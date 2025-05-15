<?php

class Database {

    public $connect;
    public function __construct(){
        $dsn = "mysql:host=localhost;port=3307;dbname=thecountbox;user=root;charset=utf8mb4";

        $this->connect = new PDO($dsn);
    }
    //Get Products
    public function get_products($args = []){
        $params = 'select * from tcb_products where store_id = 1';
        if(!empty($args)){
            $argsAttrs = $args;
            $addQuery = "";
            foreach($argsAttrs as $key => $value){
                if(is_string($value)){
                    $addQuery = $addQuery . ' and '.$key.' = "'.$value.'"';
                }else{
                    $addQuery = $addQuery . ' and '.$key.' = '.$value;
                }
            }
            $params = $params.$addQuery;
            echo $params;
        }
        
        $statement = $this->connect->prepare($params);
        $statement->execute();

        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $products;
    }
    //Add New Product
    public function add_product($args){

    }
    //Update Products
    public function update_products($args){}
    public function delete_product($args){}



}
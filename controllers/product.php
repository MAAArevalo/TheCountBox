<?php

$title = "Products";

if(!empty($_GET['addnew']) && $_GET['addnew'] == "product"):
    $title = "Add New Product";
    require 'views/addnewproduct.view.php';
else:
    require 'views/product.view.php';
endif;

if(!empty($_POST['productname'])){
    $productName = $_POST['productname'];
    $db = new Database();
    $db->add_product([
        'productName' => $_POST['productname'],
        'productSKU' => $_POST['productsku'],
        'productQuantity' => $_POST['productquantity'],
        'productPrice' => $_POST['productprice'],
    ]);
}
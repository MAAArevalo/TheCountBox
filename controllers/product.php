<?php

$title = "Products";

if(!empty($_GET['addnew']) && $_GET['addnew'] == "product"):
    $title = "Add New Product";
    require 'views/addnewproduct.view.php';
else:
    require 'views/product.view.php';
endif;
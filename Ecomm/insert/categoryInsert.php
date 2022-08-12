<?php
    require_once('../class/crud.php');
    $obj = new Crud();
    $data = [
        "category_name" => $_POST['category_name']
    ];
    $obj->insert("product_category",$data);

?>  
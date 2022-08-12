<?php
    require_once('../class/crud.php');
    $obj = new Crud();

    $data = [
        "supplier_name" => $_POST['supplier_name'],
        "supplier_address" => $_POST['supplier_address'],
        "supplier_rating" => $_POST['supplier_rating'],
        "supplier_email" => $_POST['supplier_email'],
        "supplier_phone" => $_POST['supplier_phone']
    ];

    $obj->insert("product_supplier",$data);

?>  

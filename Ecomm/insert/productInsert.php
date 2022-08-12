<?php
    require_once('../class/crud.php');
    $obj = new Crud();

    $file = $_FILES['product_image'];

    $fileName = $_FILES['product_image']['name'];
    $fileTmpName = $_FILES['product_image']['tmp_name'];
    $fileSize = $_FILES['product_image']['size'];
    $fileError = $_FILES['product_image']['error'];
    $fileType = $_FILES['product_image']['type'];

    $fileExtention = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExtention));
    $fileNewName = uniqid('',true).".".$fileActualExt;

    $allowed = array('jpg','jpeg','png');



    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                $destination = "../uploads/".$fileNewName;  
                move_uploaded_file($fileTmpName, $destination); 
                $data = [
                    "product_name" => $_POST['product_name'],
                    "category_id" =>  $_POST['product_category'],
                    "product_price" => $_POST['product_price'],
                    "product_qty" => $_POST['product_qty'],
                    "product_description" => $_POST['product_description'],
                    "product_rating" => $_POST['product_rating'],
                    "supplier_id" => $_POST['product_supplier'],
                    "product_summary" => $_POST['product_summary'],
                    "product_image" => $fileNewName 
                ];
                
                // echo '<pre>';
                // print_r($data);
                
                $obj->insert("product",$data);
            } else {
                echo "file size is to big.";
            }
        } else {
            echo 'there is an error in the upload';
        }
    } else {
        echo "you cannot uplod the file with this extention";
    }

    // product_id	product_name	product_category	product_price	
    // product_qty	product_description	product_rating	product_supplier	
    // product_summary	product_image

    // $_zproduct_name =  $_POST['product_name'];	
    // $_zproduct_category  = $_POST['product_category'];	
    // $_zproduct_price	=  $_POST['product_price'];
    // $_zproduct_qty   =  $_POST['product_qty'];	
    // $_zproduct_description	= $_POST['product_description'];
    // $_zproduct_rating = $_POST['product_rating'];	
    // $_zproduct_supplier  = $_POST['product_supplier'];	
    // $_zproduct_summary   = $_POST['product_summary'];	
    // $_zproduct_image = $fileNewName



?>  
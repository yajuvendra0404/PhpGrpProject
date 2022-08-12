
<?php   
    require_once('./class/crud.php');  
    $obj = new Crud();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hi-Techy</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        
    </head>
    <body class="sb-nav-fixed">
        <?php include './include/logo.php';?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <?php include './include/adminSidenav.php';?>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Yajuvendra Singh Thakur
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid p-4 ">

                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="font-weight-light my-4">Add New Product</h3></div>
                                        <div class="card-body">
                                            <form id="productForm" enctype="multipart/form-data">

                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div >
                                                            <label for="inputFirstName">Name</label>
                                                            <input class="form-control" id="product_name" value="Desktop-410" name="product_name" type="text" placeholder="Enter Product Name" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div >
                                                            <label for="product_price">Price</label>
                                                            <input class="form-control" id="product_price"  name="product_price" type="number" placeholder="Enter Price" />
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="">
                                                            <label for="product_qty">Quantity</label>
                                                            <input class="form-control" id="product_qty" name="product_qty" type="number" placeholder="Enter Quantity" />
        
                                                        </div>
                                                    </div>  
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Select Category</label>
                                                        <select id="inputState" name="product_category" class="form-control">
                                                            <option selected> - Select Category - </option>
                                                            <?php foreach($obj->fetchData('product_category','','','') as $row) { ?>
                                                                <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-4">
                                                        <div class=" mb-3 mb-md-0">
                                                        <label for="product_summary">Product Summary</label>
                                                            <input class="form-control" id="product_summary" value="Desktop-410" name="product_summary" type="text" placeholder="Enter Product Summary" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class=" mb-3 mb-md-0">
                                                        <label for="product_rating">Product Rating</label>
                                                            <input class="form-control" id="product_rating" name="product_rating" type="number" placeholder="Enter Product Rating" />

                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">Select Supplier</label>
                                                        <select id="inputState" name="product_supplier" class="form-control">
                                                            <option selected> - Select Supplier - </option>
                                                            <?php foreach($obj->fetchData('product_supplier','','','') as $row) { ?>
                                                                <option value="<?php echo $row['supplier_id']; ?>"><?php echo $row['supplier_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 mb-md-0">
                                                        <label for="upload_image">Upload File</label>
                                                            <input class="form-control" id="upload_image" type="file" name="product_image" placeholder="Upload Product Image" ></input>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 mb-md-0">
                                                        <label for="product_description">Product Description</label>
                                                            <textArea class="form-control" value="Desktop-410" id="product_description" type="text" name="product_description" placeholder="Enter Product Description" ></textArea>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="row mb-3">
                                                    <div class="col-md-3 ms-2">
                                                        <div class="mt-4 mb-0">
                                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Add New Product</button></div>
                                                        </div>
                                                    </div>
                                                </div>  


                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

     

                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
            $(document).ready(function() {
                $(document).on('submit','#productForm', function(e) {

                   e.preventDefault(); 
                   var eleId = document.getElementById("productForm");
                   var formData = new FormData(eleId);

                    $.ajax({
                        url:"./insert/productInsert.php",
                        type:'POST',
                        data:formData,
                        dataType:"json",
                        processData:false,
                        contentType: false,
                        success:function (res){
                            console.log("res -- ",res);
                        }
                    })
                })
            });
        </script>    
    </body>
</html>

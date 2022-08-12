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
                                        <div class="card-header"><h3 class="font-weight-light my-4">Add Supplier</h3></div>
                                        <div class="card-body">
                                            <form id="supplierForm" method="post">
                                            <!-- supplier_name supplier_address supplier_rating supplier_email supplier_phone -->
	
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <div class=" mb-3 ">
                                                            <label for="inputFirstName">Name</label>
                                                            <input class="form-control" id="supplier_name" name="supplier_name" type="text" placeholder="Enter Name" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="supplier_email">Email</label>
                                                            <input class="form-control" id="supplier_email" name="supplier_email" type="Email" placeholder="Enter Email Address" />
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label for="inputEmail">Rating</label>
                                                            <input class="form-control" id="inputEmail" name="supplier_rating" type="number" placeholder="Enter Rating" />
        
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class=" mb-3 mb-md-0">
                                                        <label for="inputPassword">Phone Number</label>
                                                            <input class="form-control" id="supplier_phone" name="supplier_phone" type="number" placeholder="Enter Phone Number" />

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3 mb-md-0">
                                                        <label for="inputPasswordConfirm">Address</label>
                                                            <textArea class="form-control" id="supplier_address" name="supplier_address" placeholder="Enter Address" ></textArea>

                                                        </div>
                                                    </div>
                                                </div>    

                                                <div class="row mb-3">
                                                    <div class="col-md-3 ms-2">
                                                        <div class="mt-4 mb-0">
                                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Add New Supplier</button></div>
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
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('submit','#supplierForm', function(e) {

                   e.preventDefault(); 
                   var eleId = document.getElementById("supplierForm");
                   var formData = new FormData(eleId);
                    $.ajax({
                        url:"./insert/supplierInsert.php",
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

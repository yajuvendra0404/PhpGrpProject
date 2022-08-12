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

                        <!-- <div id="appendToThis"></div> -->

                        <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="font-weight-light my-4">Add New Category</h3></div>
                                        <div class="card-body">
                                            <form id="categoryForm" method="post">
                                                <div class="row mb-3">
                                                    <div class="col-md-6 ms-2">
                                                        <div class="mb-3 mb-md-0">
                                                            <label for="inputFirstName">Category</label>
                                                            <input class="form-control" id="category_name" name="category_name" type="text" placeholder="Enter Category" />
                                                        </div>
                                                    </div>  
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-3 ms-2">
                                                        <div class="mt-4 mb-0">
                                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" >Add New Category</button></div>
                                                        </div>
                                                    </div>
                                                </div>    

                                            </form>
                                        </div>

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
                $(document).on('submit','#categoryForm', function(e) {

                   e.preventDefault(); 
                   var eleId = document.getElementById("categoryForm");
                   var formData = new FormData(eleId);
                   console.log("yajuvendra --- ");
                    $.ajax({
                        url:"./insert/categoryInsert.php",
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

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
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body style="background-color: #f2f2b1;">
        <!-- EEEE9B -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark sticky-top">

        <a class="navbar-brand ps-3" href="index.html"> <i class="bi bi-cpu"></i> Hi-Techy</a>

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <?php include './include/header.php';?>
        </nav>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cart <i class="bi bi-cart"></i></h3></div>
                                    <div class="card-body">
                                        <form>

                                            <div class="col-md-12">
                                                
                                                <div class="row border mt-2 ms-2 me-2 rounded">
                                                    
                                                    <div class="col-md-2 p-1">
                                                            <img src="./image/product-1.jpg" width="100" class="rounded" alt="...">
                                                          
                                                    </div>
                                                    
                                                    <div class="col-md-7 pt-1">
                                                        <h6 class="card-title font-weight-bold">Card title</h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <button type="button" class="btn btn-primary btn-sm mt-5">Buy</button>
                                                        <button type="button" class="btn btn-secondary btn-sm mt-5">Delete</button>      
                                                    </div>
                                                </div>
                                                <div class="row border mt-2 ms-2 me-2 rounded">
                                                    
                                                    <div class="col-md-2 p-1">
                                                            <img src="./image/product-1.jpg" width="100" class="rounded" alt="...">
                                                          
                                                    </div>
                                                    
                                                    <div class="col-md-7  pt-1">
                                                        <h6 class="card-title font-weight-bold">Card title</h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <button type="button" class="btn btn-primary btn-sm mt-5">Buy</button>
                                                        <button type="button" class="btn btn-secondary btn-sm mt-5">Delete</button>      
                                                    </div>
                                                </div>
                                                <div class="row border mt-2 ms-2 me-2 rounded">
                                                    
                                                    <div class="col-md-2 p-1">
                                                            <img src="./image/product-1.jpg" width="100" class="rounded" alt="...">
                                                          
                                                    </div>
                                                    
                                                    <div class="col-md-7 font-weight-bold">
                                                        <h6 class="card-title  pt-1">Card title</h6>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <button type="button" class="btn btn-primary btn-sm mt-5">Buy</button>
                                                        <button type="button" class="btn btn-secondary btn-sm mt-5">Delete</button>      
                                                    </div>
                                                </div>

                                              </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" >Buy All</a></div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

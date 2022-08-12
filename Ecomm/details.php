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
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
    <body style="background-color: #fcf3e1;">
        <!-- FEF1F1 -->
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
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body m-5">
                                        <div class="row">
                                            <div class = "col-lg-8 ">
                                                <?php
                                                    $data = $obj->fetchData('product','ONE','product_id',$_GET["id"]);
                                                    echo '<div class="row">';
                                                    echo '<div class="col-lg-5  ">';
                                                    echo '<img src= "./uploads/'.$data[0]['product_image'].'" class="rounded" width="250" height="250"  alt="...">';
                                                    echo '</div>';
                                                    echo '<div class="col-lg-7">';
                                                    echo '<h3>'.$data[0]['product_name'].'</h3>';
                                                    echo '<h5>'.$data[0]['product_summary'].'</h5>';
                                                    echo '<p>Price - '.$data[0]['product_price'].'<i class="bi bi-currency-dollar"></i></p>';
                                                    // echo '<p>Supplier - '.$data[0]['product_supplier'].'</p>';

                                                    echo '<div class="alert alert-success col-lg-11" role="alert"><b>Available In Stock. '.$data[0]['product_qty'].'</b></div>' ;
                                                    echo '<button href="" class="btn btn-outline-success btn-sm m-1" >Buy Now</button>';
                                                    echo '<button href="" class="btn btn-outline-dark btn-sm m-1" >Add To Cart</button>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    
                                                    echo '<div class="row m-5">';
                                                    echo '<div class="col-lg-12">';
                                                    echo '<h4>'.$data[0]['product_name'].'</h4><hr>';

                                                    echo '<h6>'.$data[0]['product_summary'].'</h6>';
                                                    echo '<p>'.$data[0]['product_description'].'</p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                ?>
                                            </div> 
                                            <div class = "col-lg-4 h-100 p-5 bg-light border rounded-3">
                                            <?php
                                                    $data = $obj->fetchData('product','ONE','product_id',$_GET["id"]);
                                                    
                                                    echo '<img src= "./uploads/'.$data[0]['product_image'].'" class="rounded" width="100%" height="100%"   alt="...">';
                                                    echo '<div class="m-4">';
                                                    echo '<h5>'.$data[0]['product_name'].'</h5>';
                                                    echo '<p><b>Price - '.$data[0]['product_price'].'</b><i class="bi bi-currency-dollar"></i></p>';
                                                    echo '<p>'.$data[0]['product_summary'].'</p>';
                                                    echo '<button href="" class="btn btn-outline-success btn-sm m-1" >Buy Now</button>';
                                                    echo '<button href="" class="btn btn-outline-dark btn-sm m-1" >Add To Cart</button>';
                                                    echo '</div>';
                                                ?>
                                            </div> 
                                        </div>
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

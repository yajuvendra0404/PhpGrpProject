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
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

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
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light sticky-top" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="sb-sidenav-menu-heading mt-5">Filter  <i class="bi bi-funnel"></i></div>
                            <input type="hidden" name="category" id="categoryInput" value="">

                            <?php foreach($obj->fetchData('product_category','','','') as $row) {?>
                                <div class="form-check ms-4">
                                    <input class="form-check-input" type="checkbox" id="filterCheckbox" name="filterCheckbox" value="<?php echo $row['category_id']; ?>" 
                                    <?php 
                                        if(!empty($_POST['category']) && in_array($row['category_id'], explode(',',$_POST['category']))) 
                                            echo  'checked';  
                                        else 
                                            echo  ''; ?> 
                                     >
                                     
                                    <label class="form-check-label" for="filterCheckbox">
                                        <?php echo $row['category_name']; ?>
                                    </label>
                                </div>
                            <?php }?>
                            <div class="form-check ms-1 mt-3">
                                <button type="submit" onclick="createParams()" class="btn btn-dark">Apply Filter</button>
                            </div>
                        </form>    
                        </div>
                    </div>
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

                        <div class="card mb-4">

                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                  <div class="carousel-item ">
                                    <img src="./image/sale-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                      </div>
                                  </div>

                                  <div class="carousel-item">
                                    <img src="./image/headphones-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                      </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./image/laptop-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                      </div>
                                  </div>
                                  <div class="carousel-item active">
                                    <img src="./image/sale-2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                      </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                              <!-- <div class="alert alert-dark" role="alert">
                                "Tech" the shit out of it ..!
                              </div> -->
                            

                            <div class="row mt-3 ms-1 mb-3">                              
                                
                                <?php foreach( $obj->fetchProductData('product',isset($_POST['category']) ? $_POST['category'] : '') as $row ) { ?>
                                    
                                    <div class="col-sm-3 mb-5">
                                        <a href="details.php?id=<?php echo $row['product_id'];?>" class="card-anchor">
                                            <div class="card card-animate" style="width: 14rem; height: 30rem;">
                                                <img src=<?php echo "./uploads/".$row['product_image'] ?> class="card-img-top" width="200" height="200" alt="...">
                                                <div class="card-body">
                                                <h6 class="card-title "><?php echo $row['product_name']; ?></h6>
                                                <hr>
                                                <p ><i class="bi bi-currency-dollar"></i><span><?php echo $row['product_price']; ?></span></p>
                                                <div ><p class="card-text"><?php echo $row['product_summary']; ?></p></div>
                                                    <div class="row">
                                                        
                                                        <div class="col-lg-5">
                                                            <a href="details.php" class="btn btn-outline-success btn-sm" style="bottom:3%; position:absolute;">Buy Now</a>  
                                                        </div>
                                                             
                                                        <div class="col">
                                                            <a href="details.php" class="btn btn-outline-dark btn-sm" style="bottom:3%; position:absolute;">Add To Cart</a> 
                                                        </div>    
                                                    </div>           
                                                </div>
                                            </div>
                                        </a>     
                                    </div>  
                                <?php } ?>
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
            // function createParams(){
            //     console.log("checkbox checked");
            // }
            function createParams() {
                var value ="";
                $('input[name="filterCheckbox"]:checked').each(function() {
                    value = this.value+","+value;
                });
                value = value.slice(0, -1)
                $("#categoryInput").val(value);
            }
        </script>
    </body>
</html>

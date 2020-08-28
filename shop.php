<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> S-AGA Store </title>

    <!----------------------------------- BOOTSTRAP CSS CDN -------------------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!----------------------------------- FONT AWESOME CDN -------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!----------------------------------- STYLES CSS FILE -------------------------------------------->
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
    
    <!---------X-------- START ITEMS,REGISTER,CART,LOGIN ----------X--------->
    <div id="top"><!-- top Begin -->

        <div class="container"><!-- container Begin -->

            <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

                <a href="#" class="btn btn-success btn-sm"> Welcome </a>
                <a href="checkout.php"> 4 Items In Your Cart | Total Price: $300 </a>

            </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6"><!-- col-md-6 Begin -->

                <ul class="menu"><!-- menu Begin -->

                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>

                </ul><!-- menu Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- container Finsih -->

    </div><!-- top Finish -->
    <!-------X---------- CLOSE ITEMS,REGISTER,CART,LOGIN ----------X--------->


    <!---------X-------- START COMAPANY LOGO. NAVIGATION BAR, SEARCH BAR, CART BUTTON ----------X--------->
    <div id="navbar" class="navbar navbar-default" data-spy="affix" data-offset-top="197"><!-- navbar navbar-default Begin -->
    
        <div class="container"><!-- container Begin -->
        
            <div class="navbar-header"><!-- navbar-header Begin -->
            
                <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                
                    <img src="./images/logo-c.png" alt="s-aga-store logo" class="hidden-xs">
                    <img src="./images/logo-cc.png" alt="s-aga-store logo Mobile" class="visible-xs">
                
                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                
                    <span class="sr-only">Toogle Navigation</span>

                    <i class="fa fa-align-justify"></i>
                
                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                
                    <span class="sr-only">Toogle Search</span>

                    <i class="fa fa-search"></i>
                
                </button>
            
            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
            
                <div class="padding-nav"><!-- padding-nav Begin -->
                
                    <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                                   
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    
                    </ul><!-- nav navbar-nav left Finish -->
                
                </div><!-- padding-nav Finish -->

                    <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin -->
                    
                        <i class="fa fa-shopping-cart"></i>

                        <span>4 Items In Your Cart</span>
                    
                    </a><!-- btn navbar-btn btn-primary right Finish -->

                    <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                    
                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                        
                            <span class="sr-only">Toggle Search</span>

                            <i class="fa fa-search"></i>
                        
                        </button><!-- btn btn-primary navbar-btn Finish -->

                    </div><!-- navbar-collapse collapse right Finish -->

                    <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                    
                        <form action="results.php" method="get" class="navbar-form"><!-- navbar-form Begin -->
                        
                            <div class="input-group"><!-- input-group Begin -->
                            
                                <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                                <span class="input-group-btn"><!-- input-group-btn Begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                                
                                    <i class="fa fa-search"></i>
                                
                                </button><!-- btn btn-primary Finish -->

                                </span><!-- input-group-btn Finish -->
                            
                            </div><!-- input-group Finish -->
                        
                        </form><!-- navbar-form Finish -->
                    
                    </div><!-- collapse clearfix Finish -->
            
            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->
    <!---------X-------- CLOSE COMAPANY LOGO. NAVIGATION BAR, SEARCH BAR, CART BUTTON ---------X---------->


    <!---------X-------- START BREADCRUMB, SIDEBAR ---------X---------->
    <div id="content"><!-- #content Begin -->
    
        <div class="container"><!-- container Begin -->
        
            <div class="col-md-12"><!-- col-md-12 Begin -->
            
                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                
                </ul><!-- breadcrumb Finish -->
            
            </div><!-- col-md-12 Finish -->

            <div class="col-md-3"><!-- col-md-3 Begin -->

            <?php

            include("includes/sidebar.php");

            ?>

            </div><!-- col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->

                <div class="box"><!-- box Begin -->

                    <h1>Shop</h1>

                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi laboriosam, repellat officia nam odit quo quod adipisci veniam dolorum quae numquam nostrum, facilis provident error quisquam accusantium laborum porro magnam.
                    </p>

                </div><!-- box Finish -->

                <div class="row"><!-- row Begin -->


                    <!-- PRODUCT-1 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-2.webp" alt="Product 1">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    Bag
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                    <!-- PRODUCT-2 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-1.jpg" alt="Product 2">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    T-shirt
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                    <!-- PRODUCT-3 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-4.jpg" alt="Product 3">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    Chair
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                    <!-- PRODUCT-4 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-5.jpg" alt="Product 4">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    Shoe
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                    <!-- PRODUCT-5 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-6.png" alt="Product 5">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    Multi Cooker
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                    <!-- PRODUCT-6 -->
                    <div class="col-md-4 col-sm-6 center-responsive"><!-- col-md-4 col-sm-6 center-responsive Begin -->

                      <div class="product"><!-- product Begin -->

                        <a href="details.php">

                            <img class="img-responsive" src="./products_images/Product-7.jpeg" alt="Product 6">

                        </a>

                        <div class="text"><!-- text Begin -->

                             <h3>
                                <a href="details.php">
                                    Ear Phone
                                 </a>
                             </h3>

                            <p class="price">$30</p>

                            <p class="button">

                                <a href="details.php" class="btn btn-default">View Details</a>

                                <a href="details.php" class="btn btn-primary">

                                <i class="fa fa-shopping-cart">
                                     Add To Cart
                                     </i>

                                 </a>

                            </p>

                            </div><!-- text Finish -->

                        </div><!-- product Finish -->

                    </div><!-- col-md-4 col-sm-6 center-responsive Finish -->


                </div><!-- row Finish -->

               <center>

                   <ul class="pagination"><!-- pagination Begin -->
                       <li><a href="#">First Page</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">Last Page</a></li>
                   </ul><!-- pagination Finish -->

               </center>

            </div><!-- col-md-9 Finish -->
        
        </div><!-- container Finish -->
    
    </div><!-- #content Finish -->

    <!---------X-------- CLOSE BREADCRUMB, SIDEBAR ---------X---------->


    <?php

    include("includes/footer.php");

    ?>


    <!----------------------------------- jquery CDN -------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!----------------------------------- BOOTSTRAP JAVASCRIPT CDN -------------------------------------------->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!----------------------------------- JAVASCRIPT FILE -------------------------------------------->
    <script src="./js/main.js"></script>

</body>
</html>
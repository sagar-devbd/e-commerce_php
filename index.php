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
                                   
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
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
                    
                        <button id="button-id" style="" class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                        
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


    <!---------X-------- START NEWS TRICKER ---------X---------->
    <div class="container"><!-- container Begin -->
    
        <div class="tricker"><!-- tricker Begin -->
        
            <div class="title"><!-- title Begin -->
                    
                <div class="news"><!-- news Begin -->
                
                    <marquee behavior="" direction="">
                    
                        <p style="">
                            <strong>আপনার স্বপ্ন ~ আমাদের পণ্য</strong>   
                        </p>
                    
                    </marquee>
                
                </div><!-- news Begin -->
            
            </div><!-- title Begin -->
        
        </div><!-- tricker Finish -->
    
    </div><!-- container Finish -->
    <!---------X-------- CLOSE NEWS TRICKER ---------X---------->

    <!------------------X----------- START IMAGES SLIDER, CAROUSEL, CHEVRON ---------------X---------------->
    <div class="container" id="slider"><!-- container Begin -->
    
        <div class="default""><!-- col-md-12/default Begin -->
        
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
            
                <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                
                    <li calss="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                   
                
                </ol><!-- carousel-indicators Finish -->

                <div class="carousel-inner"><!-- carousel-inner Begin -->
                
                    <div class="item active">
                    
                        <img src="./slides_images/img-5.png" alt="Slider Image 1">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-6.jpg" alt="Slider Image 2">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-7.jpg" alt="Slider Image 3">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-8.jpg" alt="Slider Image 4">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-9.jpg" alt="Slider Image 5">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-10.webp" alt="Slider Image 6">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-11.jpg" alt="Slider Image 7">

                    </div>

                    <div class="item">
                    
                        <img src="./slides_images/img-12.jpg" alt="Slider Image 8">

                    </div>

                    

                    

             </div><!-- carousel-inner Finish -->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                
                </a><!-- right carousel-control Finish -->

                <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                
                </a><!-- right carousel-control Finish -->
                
            </div><!-- carousel slide Finish -->
        
        </div><!-- col-md-12/default Finish -->
    
    </div><!-- container Finish -->
    <!------------------X----------- CLOSE IMAGES SLIDER, CAROUSEL, CHEVRON ---------------X---------------->



    <!------------------X----------- START ADVANTAGES, OFFER, PRICES, QUALITY ---------------X---------------->
    <div id="advantages"><!-- #advantages Begin -->
    
        <div class="container"><!-- container Begin -->
        
            <div class="same-height-row"><!-- same-height-row Begin -->
            
                <div class="col-sm-4"><!-- col-sm-4 Begin -->
                
                    <div class="box same-height"><!-- box same-height Begin -->
                    
                        <div class="icon"><!-- icon Begin -->
                        
                            <i class="fa fa-heart"></i>
                        
                        </div><!-- icon Finish -->

                        <h3><a href="#">Best Offer</a></h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, pariatur!</p>
                    
                    </div><!-- box same-height Finish -->
                
                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4"><!-- col-sm-4 Begin -->
                
                    <div class="box same-height"><!-- box same-height Begin -->
                    
                        <div class="icon"><!-- icon Begin -->
                        
                            <i class="fa fa-tag"></i>
                        
                        </div><!-- icon Finish -->

                        <h3><a href="#">Best Prices</a></h3>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, earum..</p>
                    
                    </div><!-- box same-height Finish -->
                
                </div><!-- col-sm-4 Finish -->

                <div class="col-sm-4"><!-- col-sm-4 Begin -->
                
                    <div class="box same-height"><!-- box same-height Begin -->
                    
                        <div class="icon"><!-- icon Begin -->
                        
                            <i class="fa fa-thumbs-up"></i>
                        
                        </div><!-- icon Finish -->

                        <h3><a href="#">100% Original</a></h3>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, quidem?</p>
                    
                    </div><!-- box same-height Finish -->
                
                </div><!-- col-sm-4 Finish -->
            
            </div><!-- same-height-row Finish -->
        
        </div><!-- container Finish -->
    
    </div><!-- #advantages Finish -->
    <!------------------X----------- CLOSE ADVANTAGES, OFFER, PRICES, QUALITY ---------------X---------------->



    <!------------------X----------- START LATEST PRODUCT HEADING 2 ---------------X---------------->
    <div id="hot"><!-- #hot Begin -->
    
        <div class="box"><!-- box Begin -->
        
            <div class="container"><!-- container Begin -->
            
                <div class="col-md-12"><!-- col-md-12 Begin -->
                
                    <h2>
                        Our Latest Products
                    </h2>
                
                </div><!-- col-md-12 Finish -->
            
            </div><!-- container Finish -->
        
        </div><!-- box Finish -->
    
    </div><!-- #hot Finish -->
    <!------------------X----------- CLOSE LATEST PRODUCT HEADING 2 ---------------X---------------->



    <!------------------X----------- START PRODUCTS IMAGES ---------------X---------------->
    <div id="content" class="container"><!-- container Begin -->

        <div class="row"><!-- row Begin -->

            <!-- PRODUCT-1 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-22.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Notebook
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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-2 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$15</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-3 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$60</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-4 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$40</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-5 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-8.png" alt="Product 5">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Bag
                            </a>
                        </h3>

                        <p class="price">$25</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-6 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-7.jpeg" alt="Product 6">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Headphone
                            </a>
                        </h3>

                        <p class="price">$20</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-7 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-2.webp" alt="Product 7">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Ladies Bag
                            </a>
                        </h3>

                        <p class="price">$75</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-8 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-6.png" alt="Product 8">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Multi Cooker
                            </a>
                        </h3>

                        <p class="price">$125</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->


            <!-- PRODUCT-9 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-22.jpg" alt="Product 1">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Notebook
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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-10 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$15</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-11 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$60</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-12 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

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

                        <p class="price">$40</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-13 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-8.png" alt="Product 5">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Bag
                            </a>
                        </h3>

                        <p class="price">$25</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-14 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-7.jpeg" alt="Product 6">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Headphone
                            </a>
                        </h3>

                        <p class="price">$20</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-15 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-2.webp" alt="Product 7">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Ladies Bag
                            </a>
                        </h3>

                        <p class="price">$75</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->

            <!-- PRODUCT-16 -->
            <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->

                <div class="product"><!-- product Begin -->

                    <a href="details.php">

                        <img class="img-responsive" src="./products_images/Product-6.png" alt="Product 8">

                    </a>

                    <div class="text"><!-- text Begin -->

                        <h3>
                            <a href="details.php">
                                Multi Cooker
                            </a>
                        </h3>

                        <p class="price">$125</p>

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

            </div><!-- col-sm-4 col-sm-6 single Finish -->
            

        </div><!-- row Finish -->

    </div><!-- container Finish -->
    <!------------------X----------- CLOSE PRODUCTS IMAGES ---------------X---------------->

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
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
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li class="active">
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
                        Contact Us
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

                    <div class="box-header"><!-- box-header Begin -->

                        <center><!-- center Begin -->

                            <h2>Feel free to Contact Us</h2>

                            <p class="text-muted"><!-- text-muted Begin -->

                                If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>

                            </p><!-- text-muted Finish -->

                        </center><!-- center Finish -->

                        <form action="contact.php" method="post"><!-- form Begin -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Name</label>

                                <input type="text" class="form-control" name="name" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Email</label>

                                <input type="text" class="form-control" name="email" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Subject</label>

                                <input type="text" class="form-control" name="subject" required>

                            </div><!-- form-group Finish -->

                            <div class="form-group"><!-- form-group Begin -->

                                <label>Message</label>

                                <textarea name="message" class="form-control"></textarea>

                            </div><!-- form-group Finish -->

                            <div class="text-center"><!-- text-center Begin -->

                                <button type="submit" name="submit" class="btn btn-primary"><!-- btn btn-primary Begin -->

                                    <i class="fa fa-user-md"></i> Send Message

                                </button><!-- btn btn-primary Finish -->

                            </div><!-- text-center Finish -->

                        </form><!-- form Finish -->

                    </div><!-- box-header Finish -->

                </div><!-- box Finish -->

            </div><!-- col-md-9 Finish -->

            </div><!-- container Finish -->
    
    </div><!-- #content Finish -->

    <!---------X-------- CLOSE BREADCRUMB, SIDEBAR ---------X---------->

    <br><br>


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
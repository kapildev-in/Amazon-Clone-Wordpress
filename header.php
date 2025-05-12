<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1: Amazon Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>

        <div class="navbar ">

            <div class="nav-logo border">
                <!-- <div class="logo"></div> -->
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/amazon_logo.png" alt="Amazon Logo">
                
            </div>
            

            <div class="nav-address border">
                <p class="add-first"> Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot add-icon-class"></i>
                    <p class="add-second">India</p>
                </div>
            </div>


            <div class="nav-search">   
                <select class="search-select">
                    <option>All</option>
                    <option>Electronics</option>
                </select>
                <input placeholder="Search Amazon" class="search-box">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

            <div class="nav-account border">  
            <p class="nav-account-p1">Hello, sign in</p>
            <p class="nav-account-p2">Account & Lists</p>

            </div>

            <div class="nav-orders border">
                <p class="nav-orders-p1">Returns</p>
                <p class="nav-orders-p2">& Orders</p>
                </div>

             <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping cart-icon" style="color: #ffffff;"></i>
                <p>Cart</p>
             </div> 
             
         </div>    

        <div class="header-panel">
            <div class="panel-menu border">
                <i class="fa-solid fa-bars"></i>
                <p>All</p>
                
            </div>

            <div class="panel-ops">
                <p class="border">Today's Deals</p>
                <p class="border">Customer Service</p>
                <p class="border">Registry</p>
                <p class="border">Gift Cards</p>
                <p class="border">Sell</p>
                
            </div>

            <div class="panel-ops-right">
                <p class="border">Track Your Orders</p>
                
            </div>


        </div>
    </header>

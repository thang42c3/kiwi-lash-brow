<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0px">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="message_header">
        <marquee behavior="scroll" direction="left" class = "center">
            LASH NOW > Pay Later with Klarna & Afterpay
            <span style="margin-left:100px">FREE Shipping | U.S. Orders $150+ (Exclusions may apply)</span>
            <span style="margin-left:100px">FREE Samples with Every Purchase</span>
        </marquee>
    </div>

    <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">LBLA WorldWide
                <i class="big_arrow down"></i>
            </button>
            <div class="dropdown-content">
                <div class="column  text_menu">
                    <a href="#">Australia</a>
                    <a href="#">Belgium</a>
                    <a href="#">Brazil</a>
                    <a href="#">Canada</a>
                    <a href="#">Czech</a>
                    <a href="#">Dubai</a>
                    <a href="#">France</a>
                    <a href="#">Germany</a>
                    <a href="#">Greece</a>
                    <a href="#">Indonesia</a>
                    <a href="#">Mexico</a>
                    <a href="#">Netherlands</a>
                    <a href="#">Slovenia</a>
                    <a href="#">Switzerland</a>
                    <a href="#">United Kingdom</a>
                </div>
            </div>
        </div>
        <a href="#">Salon Locator</a>
        <a href="#">LBLA Cosmetics</a>

        <a href="#">
            <span class="material-symbols-outlined"  style="margin-left: 600px; scale: 80%">search</span>
            <span class="text_icon" style="display: inline">Search</span>
        </a>

        <a href="#">
            <span class="material-symbols-outlined"  style="scale: 80%; padding: 0; margin: 0">info</span>
            <span class="text_icon" style="display: inline">Help Center</span>
        </a>

        <a href="#">
            <span class="material-symbols-outlined"  style="scale: 80%">person</span>
            <span class="text_icon" style="display: inline">Login</span>
        </a>

        <a href="#">
            <span class="material-symbols-outlined"  style="float: left; scale: 80%; margin-left: 10px">shopping_bag</span>
            <span class="text_icon" style="display: inline">0</span>
        </a>


        <!--
        <a href="#">
            <i class="fa-solid fa-magnifying-glass" style="margin-left: 600px">
                <p class="text_icon" style="display: inline">Search</p>
            </i>
        </a>
        <a href="#">
            <i class="fa-sharp fa-solid fa-circle-info">
                <p class="text_icon" style="display: inline">Help Center</p>
            </i>
        </a>
        <a href="#">
            <i class="fa-sharp fa-solid fa-circle-info">
                <p class="text_icon" style="display: inline">Login</p>
            </i>
        </a>
        -->
    </div>

    <div>
        <img class = "center-image" src=<?php echo get_theme_file_uri('images/logo/logo.png') ?> alt="Logo" style="max-width:300px">
    </div >

    <div class="content">
        <div class="dropdown">
            <button class="dropbtn-nav-menu">Lashes
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Adhesives
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Tweezers
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Accessories
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Aftercare
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Retail & Kits
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Lash Lift
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Beauty Products
                <i class="small_arrow down"></i>
            </button>
            <div class="dropdown-content">
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn-nav-menu">Training
            </button>
        </div>
    </div>
</header>

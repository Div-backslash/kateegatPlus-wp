<!-- custom header -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Lato|Righteous|Roboto" rel="stylesheet"> <!-- Used fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">        
        <title> KateegatPlus - Home Page </title>
        <?php wp_head() ?>
    </head>

    <body onload="load();" data-hijacking="off" data-animation="scaleDown">
        <!-- -------------------------------------- START HEADER -------------------------------------- -->
        <header id="up_theme" class="themepage"> <!-- The backFace class is same a portfolio of all header items -->
            <div class="overlay">
            <div class="row theme_header">
            <div class="col-md-6 theme_info">
                <a class="site_title" href="<?php echo home_url(); ?>">
                    <h1 class="theme_head">KateegatPlus</h1>
                </a>
                <p class="theme_description">a short description</p>
            </div>  
            <div class="col-md-6">
<!-- Start Navbar -->

<div id="navbar_theme" class="navbar_theme_section navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler button_nav" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fa-2x mobile_bars"></i>
            <span class="toggel-nav"></span>
            <span class="toggel-nav"></span>
            <span class="toggel-nav"></span>
        </button>

        <div class="collapse navbar-collapse custom_nav" id="navbarSupportedContent">
            <ul class="navbar_theme_nav m-auto">
                <li class="m-auto active">
                    <a class="theme_link" href="#" data-scroll="#home">
                        <?php echo of_get_option('home_fixedtop', 'no-entry'); ?>
                    </a>
                </li>
                <li class="m-auto">
                    <a class="theme_link" href="#" data-scroll="#about">
                    <?php echo of_get_option('about_fixedtop', 'no-entry'); ?>
                    </a>
                </li>
                <li class="m-auto">
                    <a class="theme_link" href="#" data-scroll="#my-works">
                    <?php echo of_get_option('works_fixedtop',  'no-entry'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Navbar -->
            </div>
                </div>
            </div>
        </header>
        <!-- -------------------------------------- END HEADER -------------------------------------- -->

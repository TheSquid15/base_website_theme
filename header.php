<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="navigation">
        <div class="icon_container">
            <?php 
            $sponsorLogo;
            if(get_theme_mod('sponsor_logo')) {
                $sponsorLogo = get_theme_mod('sponsor_logo'); ?>
                <a href="">
                    <img src="<?php echo $sponsorLogo ?>" width="auto" height="80px" />
                </a> <?php
            } 
            ?>
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_site_icon_url() ?>" width="80px" height="80px"/>
            </a>
        </div>
        <div id="links_container" class="links_container">
            <?php wp_nav_menu( array( "menu" => "main_nav" ) ); ?>
        </div>
        <div id="burger_btn" class="menu burger_btn">
            <div class="icon"></div>
        </div>
    </nav>
</header>
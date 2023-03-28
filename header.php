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
        <div>
            <img src="<?php echo get_site_icon_url() ?>" width="100px" height="100px"/>
        </div>
        <div>
            <?php wp_nav_menu( array("menu" => "main_nav")) ?>
        </div>
    </nav>
</header>
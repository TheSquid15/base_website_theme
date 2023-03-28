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
        <div class="links_container">
            <?php wp_nav_menu( array("menu" => "main_nav")) ?>
        </div>
    </nav>
</header>
<style>
    :root {
    --main-green: #548235;
}

* {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

body {
    margin: 0 !important;
}

nav {
    display: flex;
    justify-content: space-between;
    padding: 0 2rem;
}

.links_container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.links_container ul{
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0;
}

.links_container ul li {
    margin: 0 2rem;
    font-weight: bold;
}

.links_container ul li a {
    font-style: none;
}
</style>
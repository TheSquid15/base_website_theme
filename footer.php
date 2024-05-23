<?php wp_footer(); 
$footer_background;
if(get_theme_mod('footer_background')) {
    $footer_background = get_theme_mod('footer_background');
}

$footer_title_1 = get_theme_mod('footer_title_1');
$footer_text_1 = get_theme_mod('footer_box_1');
$footer_url_1 = get_theme_mod('footer_url_1');
$footer_title_2 = get_theme_mod('footer_title_2');
$footer_text_2 = get_theme_mod('footer_box_2');
$footer_url_2 = get_theme_mod('footer_url_2');

?>
<div id="contact" class="container footer" style="background-image: url('<?php echo $footer_background; ?>');">
    <div class="formatting">
        <div class="content_container">
            <div class="row footer_row">
                <div class="black-filter"></div>
                <div class="col-12">
                    <h3>Contact</h3>
                </div>
                <div class="col-6 col-small-12">
                    <h4><?php echo $footer_title_1; ?></h4>
                    <p>
                        <a href="<?php echo $footer_url_1; ?>">
                            <?php echo $footer_text_1; ?>
                        </a>
                    </p>
                </div>
                <div class="col-6 col-small-12">
                    <h4><?php echo $footer_title_2; ?></h4>
                    <p>
                        <a href="<?php echo $footer_url_2; ?>">
                            <?php echo $footer_text_2; ?>
                        </a>
                    </p>
                </div>
                <div class="col-12 eu-horizon">
                    <div class="socials">
                        <a href="#">
                            <i class="fa" style="justify-content: center; display: flex;">
                                <svg style="width: 60%;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                            </i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fa fa-linkedin "></i>
                        </a>
                    </div>
                    <h4>The project is co-funded by the European Union (xxxxxxxxx)</h4>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

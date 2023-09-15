<?php wp_footer(); 
$footer_background;
if(get_theme_mod('footer_background')) {
    $footer_background = get_theme_mod('footer_background');
}

$footer_text_1 = get_theme_mod('footer_box_1');
$footer_url_1 = get_theme_mod('footer_url_1');
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
                    <h4>Technical Questions</h4>
                    <p>
                        <a href="<?php echo $footer_url_1; ?>">
                            <?php echo $footer_text_1; ?>
                        </a>
                    </p>
                </div>
                <div class="col-6 col-small-12">
                    <h4>All other questions</h4>
                    <p>
                        <a href="<?php echo $footer_url_2; ?>">
                            <?php echo $footer_text_2; ?>
                        </a>
                    </p>
                </div>
                <div class="col-12 eu-horizon">
                    <div class="socials">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/2lipp-2nd-life-for-power-plants/" target="_blank">
                            <i class="fa fa-linkedin "></i>
                        </a>
                    </div>
                    <h4>The project is co-funded by the European Union (Horizon-CL5-2022)</h4>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

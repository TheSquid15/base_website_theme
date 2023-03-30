<?php wp_footer(); 
$footer_background;
if(get_theme_mod('footer_background')) {
    $footer_background = get_theme_mod('footer_background');
}

$footer_text_1 = get_theme_mod('footer_box_1');
$footer_url_1 = get_theme_mod('footer_url_1');
$footer_text_2 = get_theme_mod('footer_box_2');
$footer_url_2 = get_theme_mod('footer_url_2');
$footer_text_3 = get_theme_mod('footer_box_3');
$footer_url_3 = get_theme_mod('footer_url_3');

?>
<div class="container footer" style="background-image: url('<?php echo $footer_background; ?>');">
    <div class="formatting">
        <div class="content_container">
            <div class="row footer_row">
                <div class="col-12">
                    <h3>Contact</h3>
                </div>
                <div class="col-4">
                    <h4>Technical Questions</h4>
                    <p>
                        <a href="<?php ?>">

                        </a>
                    </p>
                </div>
                <div class="col-4">
                    <h4>Press / Site specific questions</h4>
                </div>
                <div class="col-4">
                    <h4>All other questions or inquiries</h4>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

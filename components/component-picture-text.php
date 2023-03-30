<?php 
$picture_left = get_field("picture_left");
$text_right = get_field("text_right");
?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row text_and_picture container">
                <div class="col-6 col-xs-12 picture_container">
                    <img src="<?php echo $picture_left; ?>" />
                </div>
                <div class="col-6 col-xs-12 text_container">
                    <div class="text">
                        <?php echo $text_right; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
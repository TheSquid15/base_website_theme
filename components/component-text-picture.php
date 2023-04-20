<?php
$picture_right = get_field("picture_right");
$text_left = get_field("text_left");
?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row text_and_picture container">
                <div class="col-6 col-md-12 text_container">
                    <div class="text">
                        <?php echo $text_left; ?>
                    </div>
                </div>
                <div class="col-6 col-md-12 picture_container">
                    <img src="<?php echo $picture_right; ?>" />
                </div>
            </div>
        </div>
    </div>
</div>
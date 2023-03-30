<?php 
$sponsor = get_field("sponsor");
$sponsor_text = get_field("sponsor_text");
?>
<div id="project" class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row text_and_picture container">
                <div class="col-6 col-xs-12 picture_container sponsor_container">
                    <img src="<?php echo $sponsor; ?>" />
                </div>
                <div class="col-6 col-xs-12 text_container">
                    <div class="text">
                        <?php echo $sponsor_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
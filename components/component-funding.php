<?php 
$sponsor = get_field("sponsor");
$sponsor_text = get_field("sponsor_text");
?>
<div id="funding" class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row text_and_picture container">
                <div class="col-6 col-md-12 sponsor_container">
                    <img src="<?php echo $sponsor; ?>" />
                </div>
                <div class="col-6 col-md-12 text_container sponsor_text">
                    <div class="text">
                        <?php echo $sponsor_text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
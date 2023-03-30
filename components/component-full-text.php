<?php
$text = get_field("whole_text");
$box_color = get_field("box_color");
?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row">
                <div class="col-12 box-<?php echo $box_color; ?> full-text-container">
                    <div class="full-text-wrapper">
                        <?php echo $text; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
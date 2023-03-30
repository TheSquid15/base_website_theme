<?php 
$picture_left = get_field("picture_left");
$text_right = get_field("text_right");
?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row text_and_picture container">
                <div class="col-6 picture_container" style="background-color: red;">
                    <img src="<?php echo $picture_left; ?>" />
                </div>
                <div class="col-6 text_container" style="background-color: orange;">
                    <p>
                        HAHAHAHA
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
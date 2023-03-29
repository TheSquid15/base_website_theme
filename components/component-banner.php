<?php 
    $slides = [
        $slide1 = get_field("slide_1"),
        $slide2 = get_field("slide_2"),
        $slide3 = get_field("slide_3"),
        $slide4 = get_field("slide_4"),
    ];

    // echo '<pre>', var_dump($slides), '</pre>';
    /*
    array() {
        array(5) {
          ["image"] => string()
          ["title"] => string()
          ["sub-title"] => string()
          ["show_links"] => bool()
          ["link_button"] => array() {
            ["url"]=> string()
            ["button_text"]=> string()
            ["button_color"]=> string()
            ["button_style"]=> bool()
          }
        }
        ...n, n=3
    }
    */
?>
<div class="container">
    <div class="formatting">
        <div class="slide-container">
            <?php foreach($slides as $slide) { ?>
                <div class="slide">
                    <div class="slide-text-container">
                        <h2 class="slide-title"><?php echo $slide["title"]; ?></h2>
                        <p class="slide-sub-title"><?php echo $slide["sub-title"]; ?></p>
                    </div>
                    <img src="<?php echo $slide["image"]; ?>" />
                </div>
            <?php
            }
            ?>
            <div class="pips">
            <?php 
            if(count($slides) > 1) {
                for($i = 0; $i < count($slides); $i++) { ?>
                <div class="pip" onclick="setSlide(<?php echo $i; ?>)"></div>
            <?php    
                }
            }
            ?>
        </div>
        </div>
    </div>
</div>
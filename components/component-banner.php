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

                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
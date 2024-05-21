<?php
$quotes = [
    get_field("testimonial_1"),
    get_field("testimonial_2"),
    get_field("testimonial_3"),
];

$testimonial_title = get_field("testimonial_title");

//echo '<pre>', var_dump($quotes), '</pre>';
/* 
array() {
  array(2) {
    ["portrait"] => string(69)
    ["quote"] => string(573)
  }
  ...n, n=2
*/
?>
<div class="container" id="why">
    <div class="formatting">
        <div class="content_container testimonials_container box-green">
            <div class="row testimonial_row">
                <div class="col-12 title-wrapper">
                    <h2><?php echo $testimonial_title; ?></h2>
                </div>
                <?php
                foreach($quotes as $quote) {
                ?>
                <div class="col-4 col-md-12 testimonial_container">
                    <div class="testimonial_wrapper box-light-green">
                        <div class="testimonial_portrait">
                            <img src="<?php echo $quote["portrait"]; ?>" />
                        </div>
                        <div class="text_container">
                            <?php
                                echo $quote["quote"];
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
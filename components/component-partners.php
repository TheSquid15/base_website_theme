<?php
wp_reset_query();

$args = array(
    'post_type' => 'partners',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'order' => 'ASC',
);

$query = new WP_Query($args);
?>
<div id="partners" class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row partners_row">
                <div class="col-12 title-wrapper">
                    <h2>Partners</h2>
                </div>
                <?php
                //echo '<pre>', var_dump($query), '</pre>';
                if( $query->have_posts() ):
                    while ($query->have_posts()): $query->the_post(); $id = get_the_ID();
                    $logo = get_field("partner_logo", $id);
                    $pageURL = get_field("partner_homepage", $id);
                ?>
                <div class="partner-logo-container col-3 col-small-12 col-md-6 col-large-4">
                    <?php if(isset($logo)): ?>
                    <a href="<?php echo get_permalink(); ?>">
                        <img class="partner-logo" src="<?php echo $logo; ?>" />
                    </a>
                    <?php
                    endif;
                    ?>
                </div>
                <?php
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
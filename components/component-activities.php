<?php 
wp_reset_query();

$args = array(
    'fields' => 'ids',
    'posts_per_page' => -1,
    'post_type' => 'activities'
);

$all_activities = get_posts($args);

?>
<div id="activities" class="container box-green">
    <div class="formatting">
        <div class="content_container">
            <div class="row activities_row">
                <div class="col-12 title-wrapper">
                    <h2>Activities</h2>
                </div>
                <div class="col-12 kiosk">
                    <div class="kiosk-container">
                        <ul class="kiosk-activities">
                            <?php foreach($all_activities as $id) { ?>
                            <li class="activity">
                                <div class="activity-container">
                                    <div class="activity-wrapper">
                                        <div class="activity-image-container">
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail'); ?>
                                        <?php if(isset($image) && is_array($image)) { ?>
                                            <img class="activity-image" src="<?php echo $image[0]; ?>" />
                                        <?php
                                        }
                                        ?>
                                        </div>
                                        <div class="activity-text-container">
                                            <h4><?php echo get_the_title( $id ); ?></h4>
                                            <p><?php echo get_the_excerpt( $id ); ?></p>
                                        </div>
                                        <div class="activity-link">
                                            <a href="<?php echo get_permalink( $id ); ?>">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                            } 
                            ?>
                        </ul>
                    </div>
                    <a id="prev" class="prev hidden" onclick="moveBoxes(-1)">&#10094;</a>
                    <a id="next" class="next" onclick="moveBoxes(1)">&#10095;</a>
                </div>
            </div>
        </div>
    </div>
</div>
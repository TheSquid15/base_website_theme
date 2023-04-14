<?php get_header(); ?>
<?php wp_reset_query(); ?>
<?php if (have_posts()) : ?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row activities-archive-row">
                <?php while(have_posts()) : the_post(); $currentPostID = $post->ID; ?>
                <div class="col-4 col-md-12 activity_container">
                    <div class="activity-image-container">
                        <h3><?php echo get_the_title(); ?></h3>
                    </div>
                    <div class="text_container">

                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
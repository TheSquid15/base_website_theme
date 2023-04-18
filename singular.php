<?php get_header(); ?>
<?php wp_reset_query(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $currentPostId = $post->ID; ?>
    <div class="container">
        <div class="formatting">
            <div class="single_container">
                <div class="row single_row">
                    <div class="col-12">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                    </div>
                    <div class="col-8">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
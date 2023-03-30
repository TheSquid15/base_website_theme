<?php /* Template Name: 2Lipp Page Template */ ?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $currentPostId = $post->ID; ?>
    <div id="wrapper">
        <?php 
        include get_template_directory() . '/components/component-banner.php';
        include get_template_directory() . '/components/component-picture-text.php';
        include get_template_directory() . '/components/component-full-text.php';
        include get_template_directory() . '/components/component-video-container.php';
        include get_template_directory() . '/components/component-text-picture.php';
        include get_template_directory() . '/components/component-testimonials.php';

        ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
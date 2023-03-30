<?php /* Template Name: 2Lipp Page Template */ ?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $currentPostId = $post->ID; ?>
    <div id="wrapper">
        <?php 
            include get_template_directory() . '/components/collector.php';

        ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
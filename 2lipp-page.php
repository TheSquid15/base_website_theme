<?php /* Template Name: 2Lipp Page Template */ ?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $currentPostId = $post->ID; ?>
    <div id="wrapper">
        <?php if(!is_front_page()){ ?>
          <div id="ecd-wrapper-background"></div>
        <?php } ?>
        <?php the_content(); ?>
        <?php if(is_singular( 'post' )){ include('parts/post-back.php'); } ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
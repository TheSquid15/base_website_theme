<?php 
wp_reset_query();

$args = array(
    'fields' => 'ids',
    'posts_per_page' => -1,
    'post_type' => 'activities'
);

?>
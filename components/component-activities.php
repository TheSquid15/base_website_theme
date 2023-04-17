<?php 
wp_reset_query();

$args = array(
    'fields' => 'ids',
    'posts_per_page' => -1,
    'post_type' => 'activities'
);

?>
<div id="activities" class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row partners_row">
                <div class="col-12 title-wrapper">
                    <h2>Activities</h2>
                </div>
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
</div>
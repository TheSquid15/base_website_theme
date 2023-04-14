<?php get_header(); ?>
<?php wp_reset_query(); ?>
<div class="container">
    <div class="formatting">
        <div class="content_container">
            <div class="row">
                <?php if(have_posts()) { ?>
                <div class="col-4 col-md-12 activity_container">

                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php /* Template Name: Mail signup template */ ?>
<?php get_header(); ?>
<?php wp_reset_query(); ?>
<div id="mc_embed_shell">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
  <style type="text/css">
        #mc_embed_signup{margin: auto; font:14px Helvetica,Arial,sans-serif; width: 600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div class="container">
    <div class="formatting">
        <div class="single_container">
            <div class="row single_row">
                <div class="col-8 col-md-12">
                    <h2 class="post-title center-text"><?php echo the_title(); ?></h2>
                </div>
                <div class="col-8 col-md-12">
                    <div id="mc_embed_signup">
                        <form action="https://energycluster.us6.list-manage.com/subscribe/post?u=d7b74756bcf369ca7b175b725&amp;id=8ffc75900f&amp;f_id=0070c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                            <div id="mc_embed_signup_scroll"><h2>Subscribe</h2>
                                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value=""></div><div class="mc-field-group"><label for="mce-FNAME">First Name </label><input type="text" name="FNAME" class=" text" id="mce-FNAME" value=""></div><div class="mc-field-group"><label for="mce-LNAME">Last Name </label><input type="text" name="LNAME" class=" text" id="mce-LNAME" value=""></div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display: none;"></div>
                                <div class="response" id="mce-success-response" style="display: none;"></div>
                            </div>
                            <div aria-hidden="true" style="position: absolute; left: -5000px;"><input type="text" name="b_d7b74756bcf369ca7b175b725_8ffc75900f" tabindex="-1" value=""></div><div class="clear"><input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<?php get_footer(); ?>
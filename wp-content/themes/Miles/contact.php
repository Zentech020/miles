<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="home" style="background-image: url('<?php bloginfo('template_url'); ?>/images/main_img.jpg')"></div>
<div class="container contact-container">
    <div class="row">
        <div class="col-md-6">
            <a href="mailto:milesdixon@art.com">
                <div class="paper-img" style="background-image: url('<?php bloginfo('template_url'); ?>/images/miles_email.png')">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <a target="_blank" href="https://www.instagram.com/milesdixon">
                <div class="paper-img" style="background-image: url('<?php bloginfo('template_url'); ?>/images/miles_instagram.png')">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a target="_blank" href="https://www.twitter.com/milesdixon">
                <div class="paper-img" style="background-image: url('<?php bloginfo('template_url'); ?>/images/miles_twitter.png')">
                </div>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
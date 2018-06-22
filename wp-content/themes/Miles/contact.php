<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php $contact = get_field('contact'); ?>
<?php $size = ''; ?>
<div class="home" style="background-image: url('<?php bloginfo('template_url'); ?>/images/main_img.jpg')"></div>
<div class="container contact-container">
    <div class="row">
        <div class="col-md-6">
        <a href="<?php echo $contact['email_link']; ?>">
                <div class="paper-img" style="background-image: url('<?php echo $contact['email_image']['sizes']['medium']; ?>')">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <a target="_blank" href="<?php echo $contact['instagram_link']; ?>">
                <div class="paper-img" style="background-image: url('<?php echo $contact['instagram_image']['sizes']['medium']; ?>')">
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a target="_blank" href="<?php echo $contact['twitter_link']; ?>">
                <div class="paper-img" style="background-image: url('<?php echo $contact['twitter_image']['sizes']['medium']; ?>')">
                </div>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
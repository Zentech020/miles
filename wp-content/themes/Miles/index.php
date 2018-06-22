<?php get_header(); ?>
<?php $bg = get_field('background_image'); ?>

<div class="home" style="background-image: url('<?php echo $bg['url']['sizes']['full']; ?>')"></div>

<?php get_footer(); ?>
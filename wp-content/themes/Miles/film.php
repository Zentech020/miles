<?php /* Template Name: Film */ ?>
<?php get_header(); ?>
<?php $films = get_field('videos'); ?>

<div class="arrows">
  <a class="prev" style="background-image: url('<?php bloginfo('template_url'); ?>/images/prev_arrow.png')"></a>
  <a class="next" style="background-image: url('<?php bloginfo('template_url'); ?>/images/next_arrow.png')"></a>
</div>

<div class="container film-container">
  <div class="row carousel">
    <?php foreach($films as $film): ?>
      <div>
          <div class="col-md-7">
              <iframe width="560" height="315" src="<?php echo $film['iframe']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="col-md-5">
              <h2 class="film-title"><?php echo $film['title']; ?></h2>   
              <p class="film-description">
              <?php echo $film['description']; ?>
              </p> 
              <span class="film-tags"><?php echo $film['status']; ?></span>
          </div>
        </div>
      <?php endforeach;?>

    </div>
</div>

<?php get_footer(); ?>
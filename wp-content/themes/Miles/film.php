<?php /* Template Name: Film */ ?>
<?php get_header(); ?>

<div class="arrows">
  <a class="prev" style="background-image: url('<?php bloginfo('template_url'); ?>/images/prev_arrow.png')"></a>
  <a class="next" style="background-image: url('<?php bloginfo('template_url'); ?>/images/next_arrow.png')"></a>
</div>

<div class="container film-container">
  <div class="row carousel">
      <div>
          <div class="col-md-7">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/r3UggJ9ZPDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="col-md-5">
              <h2 class="film-title">"To give (2018)"</h2>   
              <p class="film-description">
              short narrative story arthanse, located in Eugene, Oregon. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              </p> 
              <span class="film-tags">Written, directed, edited.</span>
          </div>
        </div>

        <div>
          <div class="col-md-7">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/vvFlBC7_Xjw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <div class="col-md-5">
              <h2 class="film-title">"The Hunt"</h2>   
              <p class="film-description">
              short narrative story arthanse, located in Eugene, Oregon. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              </p> 
              <span class="film-tags">Written, directed, edited.</span>
          </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
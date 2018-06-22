
<?php 
    global $post;
    $post_slug=$post->post_name;
    
?>
<html>
<head>
<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />


</head>



<body class="<?php echo $post_slug; ?>">
<nav>
<ul class="container">
  <li style="background-image: url('<?php bloginfo('template_url'); ?>/images/miles.png')">
    <a href="<?php echo get_site_url();?>"></a>
  </li>
  <li style="background-image: url('<?php bloginfo('template_url'); ?>/images/film.png')">
    <a href="<?php echo get_site_url();?>/film"></a>
</li>
  <li style="background-image: url('<?php bloginfo('template_url'); ?>/images/etc_other.png')">
    <a href="<?php echo get_site_url();?>/etc"></a>
  </li>
  <li style="background-image: url('<?php bloginfo('template_url'); ?>/images/youtube.png')">
  <a target="_blank" href="https://youtube.com"></a>
</li>
  <li style="background-image: url('<?php bloginfo('template_url'); ?>/images/contact.png')">
    <a href="<?php echo get_site_url();?>/contact"></a>
  </li>
  </ul>
</nav>
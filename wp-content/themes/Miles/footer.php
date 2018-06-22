
<?php $home_url_off = get_field('background_image', 9); ?>
<?php $home_url = $home_url_off['url']['sizes']['full']; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


<script>
var home_url = '<?php echo $home_url; ?>';

$(document).ready(function(){
  $('.carousel').slick({
    nextArrow: '.next',
    prevArrow: '.prev'
  });


  $('.hello-world').css('background-image', 'url(' + home_url + ')');
  
});


		

</script>
</html>
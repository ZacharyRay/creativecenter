<?php
            $image = get_sub_field('images');
            $mobile_images = get_sub_field('mobile_images');
?>


<!-- Slider -->

<div class="main-carousel carousel_1">
<?php if(!empty($image)) { ?>
<?php foreach($image as $hero_image){ ?>
  <div class="carousel-cell" id="frontpage-hero-image" style="background-image: url(<?= $hero_image['image'];?>)";></div>
<?php }} ?>
</div>

<!-- mobile images -->

<div id="mobile-images">
  <?php if(!empty($mobile_images)) { ?>
  <?php foreach($mobile_images as $the_mobile_image){ ?>
  <div id="mobile-image" style="background-image: url(<?= $the_mobile_image['mobile_image']; ?>)"></div> 
  <?php }} ?>
</div>

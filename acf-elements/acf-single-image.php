<?php
            $single_image = get_sub_field('single_the_image');
            $single_image_mobile = get_sub_field('single_mobile_image');
?>

<div id="main-image-wrapper">
    <div id="the-image" style="background-image: url(<?= $single_image ?>)"></div>
</div>

<!-- mobile image single -->

<div id="mobile-images-single">
  <div id="mobile-image-single" style="background-image: url(<?= $single_image_mobile; ?>)"></div> 
</div>
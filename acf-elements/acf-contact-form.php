<?php
            $contact_form_single_image = get_sub_field('contact-images');
            $contact_form_single_image_mobile = get_sub_field('mobile_images');
?>

<div id="contact-form-main-image-wrapper">
<?php if(!empty($contact_form_single_image)) { ?>
<?php foreach($contact_form_single_image as $contact_image){ ?>
    <div id="contact-form-the-image" style="background-image: url(<?= $contact_image['contact-image']; ?>)"></div>
<?php }} ?>

</div>

<!-- mobile image contact form -->

<div id="contact-form-mobile-images-single">
<?php if(!empty($contact_form_single_image_mobile)) { ?>
<?php foreach($contact_form_single_image_mobile as $mobile_contact_image){ ?>
  <div id="contact-form-mobile-image-single" style="background-image: url(<?= $mobile_contact_image['mobile_image']; ?>)"></div> 
  <?php }} ?>
</div>

<div id="contact-form-wrap">
    <div id="contact-form">
        <?php echo do_shortcode('[forminator_form id="146"]'); ?>
        <a href="mailto:CaliforniaCreativeCenter@gmail.com">CaliforniaCreativeCenter@gmail.com</a>
    </div>
</div>

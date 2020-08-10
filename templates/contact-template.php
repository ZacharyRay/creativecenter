<?php 
/* 
Template Name: Contact Template
*/
get_header();
// call layouts
if( have_rows('contact_content') ):
    while ( have_rows('contact_content') ) : the_row();
?>


<!-- acf -->


<?php //contact content ?>
      <?php if( get_row_layout() == 'contact_field' ):?>
        <?php get_template_part('acf-elements/acf', 'contact-form'); ?>
      <?php endif; ?>

      <?php
  endwhile;  
  endif;
?>

<?php get_footer(); ?>
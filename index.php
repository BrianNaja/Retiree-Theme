
<?php get_header(); ?>

<?php get_template_part( 'loop', 'index' ); ?>

<?php if (is_front_page()) { ?>
  <!-- SHOW SIDEBAR -->
  <?php get_sidebar(); ?>
<?php } else { ?>
  <!-- DON'T SHOW -->
<?php } ?>

		
<?php get_footer(); ?>
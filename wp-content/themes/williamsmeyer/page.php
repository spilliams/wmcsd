<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */

get_header(); ?>

page
<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
  <?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
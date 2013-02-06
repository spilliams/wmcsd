<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */

get_header(); ?>

single
<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
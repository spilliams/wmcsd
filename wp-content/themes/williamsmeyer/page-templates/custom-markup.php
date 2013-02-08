<?php
/**
 * Template Name: Custom Markup Template
 *
 * Description: A page template that allows custom markup.
 *
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
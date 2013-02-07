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

custom-markup-page-template.
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    post
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; ?>
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>
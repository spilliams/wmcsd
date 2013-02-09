<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */

get_header(); ?>

<div class="grey">
  <div class="row">
    <div class="twelve columns">
      <hr />
    </div>
  </div>
</div>
<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
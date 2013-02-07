<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */

get_header(); ?>

<div class="grey">
  <div class="row">
    <div class="twelve columns text-center">
      <h2>The Great Adventure starts in "late May". Tune in then!</h2>
    </div>
  </div>
</div>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>

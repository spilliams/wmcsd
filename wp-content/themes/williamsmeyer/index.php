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
have posts
  <?php while ( have_posts() ) : the_post(); ?>
post
<?php if ( function_exist('get_template_part') ) : ?>
get_template_part exists
<?php endif; ?>
    <?php get_template_part( 'content' ); ?>
  <?php endwhile; ?>
<?php else : ?>
no posts
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>

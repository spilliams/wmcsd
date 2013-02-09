<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
?>

<div class="grey">
  <div class="row">
    <div class="twelve columns text-center">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php the_content(); ?>
      <?php wp_link_pages(); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <hr />
    </div>
  </div>
</div>

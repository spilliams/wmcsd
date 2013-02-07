<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
?>

<div class="grey">
  <div class="row">
    <div class="twelve columns">
      <?php if ( is_single() ) : ?>
        <h2><?php the_title(); ?></h2>
      <?php else : ?>
        <h2>
          <a href="<?php the_permalink(); ?>" title="Permalink" rel="bookmark"><?php the_title(); ?></a>
        </h2>
      <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      by <?php the_author() ?> on <?php the_time('j F Y') ?> at <?php the_time('g:i a') ?> <?php edit_post_link(__('Edit', 'williamsmeyer')); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php the_content(__('(more...)', 'williamsmeyer')); ?>
      <?php wp_link_pages(); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <p><?php the_tags('Tags: ', ', ', '. '); ?>In: <?php the_category(', '); ?>
      <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?></p>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <hr />
    </div>
  </div>
</div>

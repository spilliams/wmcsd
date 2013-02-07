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
      <p class="meta">by <?php the_author() ?> on <?php the_time('j F Y') ?> <?php edit_post_link(__('Edit', 'williamsmeyer')); ?></p>
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
      <p>
        <?php the_tags('Tagged: ', ', ', '.'); ?>
        <?php if ( get_the_category() ) : ?>
          Categorized: <?php the_category(', '); ?>.
        <?php endif; ?>
        <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <hr />
    </div>
  </div>
</div>

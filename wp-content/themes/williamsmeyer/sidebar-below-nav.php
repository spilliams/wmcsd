<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
/*
 * If this sidebar has no widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'below-nav' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="sidebar-below-nav" class="sidebar grey">
  <div class="row"><div class="twelve columns"><hr /></div></div>
  <ul class="block-grid two-up">
  <?php if (function_exists('dynamic_sidebar')) : ?>
    <?php dynamic_sidebar('below-nav'); ?>
  <?php endif; ?>
  </ul>
  <div class="row"><div class="twelve columns"><hr /></div></div>
</div>

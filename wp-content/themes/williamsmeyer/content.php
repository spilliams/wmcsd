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
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'williamsmeyer' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'williamsmeyer' ), 'after' => '</div>' ) ); ?>
    </div>
  </div>
  <div class="row">
    <div class="twelve columns">
      <?php edit_post_link( __( 'Edit', 'williamsmeyer' ), '<span class="edit-link">', '</span>' ); ?>
    </div>
  </div>
</div>

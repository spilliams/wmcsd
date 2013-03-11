<?php
/**
 * @package WilliamsMeyer
 * @since Williams & Meyer 1.0
 */
?>

    <div id="footer" class="grey">
      <div class="row">
        <div class="twelve columns text-center">
          <p>&copy; 2013 <a href="http://spencerenglish.com/" target="_blank">Spencer Williams</a> and Grace Meyer. All rights reserved. <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" target="_blank">Powered by WordPress</a>.</p>
        </div>
      </div>
    </div>

  </div><!-- #content -->

  <!-- Included JS Files (Uncompressed) -->
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.cookie.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.event.move.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.event.swipe.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.accordion.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.alerts.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.buttons.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.clearing.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.forms.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.joyride.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.magellan.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.navigation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.orbit.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.reveal.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.tabs.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.tooltips.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.foundation.topbar.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/jquery.placeholder.js"></script>

  <script type="text/javascript">
    jQuery.noConflict();
    jQuery(window).scroll(function(){
      if  (jQuery(window).scrollTop() > 626) {
        jQuery("#sticky-header").removeClass("half-stuck");
        jQuery("#sticky-header").addClass("stuck");
      } else if (jQuery(window).scrollTop() > 273) {
        jQuery("#sticky-header").addClass("half-stuck");
        jQuery("#sticky-header").removeClass("stuck");
      } else {
        jQuery("#sticky-header").removeClass("half-stuck");
        jQuery("#sticky-header").removeClass("stuck");
      }
    });
    jQuery(document).ready(function(){
      if (jQuery("body.home").length == 0) {
        jQuery(window).scrollTop(626);
      }
    });
  </script>

  <!-- Application Javascript, safe to override -->
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/app.js"></script>
  
  <?php wp_footer(); ?>
</body>
</html>
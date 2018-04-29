<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

	</section>
	<footer class="footer grid-x grid-margin-x" data-sticky-footer>
	  <?php do_action( 'foundationpress_before_footer' ); ?>

	  <!-- footer main nav --> 
	  <div class="cell small-12 large-7 footer__upper">
		  <?php dynamic_sidebar( 'footer-left-widgets' ); ?>
	  </div>

	  <!-- footer email signup -->
	  <div class="cell small-12 large-5">
		<?php dynamic_sidebar( 'footer-right-widgets' ); ?>		
	  </div>

	  <!-- footer lower nav / mailing info -->
	  <div class="footer__lower small-12">
		  <?php dynamic_sidebar( 'footer-widgets' ); ?>
	  </div>
	  
	  <?php do_action( 'foundationpress_after_footer' ); ?>
	</footer>
	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
  document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
  //]]></script>

</body>
</html>

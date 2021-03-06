<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flash
 */

?>

		</div><!-- .tg-container -->
	</div><!-- #content -->

	<footer id="colophon" class="footer-layout site-footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>

		<div id="bottom-footer">
			<div class="tg-container">

					<?php do_action( 'flash_copyright_area' ); ?>

					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'fallback_cb' => false, ) ); ?>

			</div>
		</div>
	</footer><!-- #colophon -->
	<?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
	<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/custom-scripts.js'?>"></script>
</body>
</html>

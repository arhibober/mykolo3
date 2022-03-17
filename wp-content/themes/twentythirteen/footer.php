<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social"> 
<div class="addthis_toolbox addthis_32x32_style addthis_default_style socials_btn"> 
  <a class="addthis_button_facebook"></a> 
  <a class="addthis_button_vk"></a> 
  <a class="addthis_button_google"></a> 
  <a class="addthis_button_twitter"></a> 
  <a class="addthis_button_compact"></a> 
  </div> 
</div> 
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<h4>&copy;Ми:Коло: 2015</h4>
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	<div class="separator green margin"></div>
	<footer class="footer">
		<div class="columns">
			<?php
			while ( have_rows( 'footer-column', 'option' ) ) : the_row(); ?>
			<div class="column">
				<?php 
				if ( have_rows( 'components' ) ) :
					while ( have_rows( 'components' ) ) : the_row();
						get_template_part( 'library/component/' . get_row_layout() );
					endwhile;
				endif;
				?>
			</div>
			<?php endwhile; ?>
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>
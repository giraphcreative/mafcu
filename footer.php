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
$footer_style = get_field( 'footer_style' );
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
		<?php if ( $footer_style == 'uninsured' ) { ?>
		<div class="uninsured">
			<?php the_field( 'uninsured', 'option' ) ?>
		</div>
		<?php } else { ?>
		<div class="gov-logos">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-ncua.png" />
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-equal-housing.png" />
		</div>
		<?php } ?>
	</footer>

</div><!-- #container -->
<div class="online-banking">
	<div class="online-banking-inner">
		<a class="close"></a>
		<img src="<?php bloginfo( 'template_url' ) ?>/img/logo.svg" class="olb-logo" />
		<?php print get_field( 'olb', 'option' ); ?>
	</div>
</div>
<?php print get_field( 'scripts-footer', 'option' ); ?>
<?php wp_footer(); ?>
</body>
</html>
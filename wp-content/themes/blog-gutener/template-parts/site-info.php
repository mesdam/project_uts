<?php
/**
 * Template part for displaying site info
 *
 * @package Blog Gutener
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( get_theme_mod( 'footer_text', esc_html__( 'Copyright &copy; Yourname.', 'blog-gutener' ) ) ) ); ?>
	<?php
	printf( esc_html__( 'Blog Gutener', 'blog-gutener' ) );
	?>
	<?php esc_html_e( 'Theme by', 'blog-gutener' ); ?>
	<a href="<?php echo esc_url( __( 'https://keonthemes.com/', 'blog-gutener' ) ); ?>" target="_blank">
		<?php
		printf( esc_html__( 'Keon Themes', 'blog-gutener' ) );
		?>
	</a>
</div><!-- .site-info -->
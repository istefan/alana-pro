<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alana
 */

global $frontpagecounter;

if ( has_post_thumbnail() ) {
	$thumbnail 	= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'featured-image' );
	$style 		= ' style="background-image: url(' . esc_url( $thumbnail[0] ) . ');"';
} else {
	$style		= '';
}

?>

<article id="front-page-section-<?php echo $frontpagecounter?>" <?php post_class( 'front-page-section front-page-section-' . $frontpagecounter ); echo $style; ?>>
	<div class="wrap">

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'alana' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

	</div><!-- .wrap -->
</article><!-- #post-## -->

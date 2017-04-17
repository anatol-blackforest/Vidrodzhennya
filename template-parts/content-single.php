<?php
/**
 * Template part for displaying single posts.
 *
 * @package partia
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	     <?php if ( has_post_thumbnail()) { ?>
				<a class="imgnews" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'medium' ); ?></a>
			<?php } ?>
		<?php the_content('Детальніше...'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'partia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php partia_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


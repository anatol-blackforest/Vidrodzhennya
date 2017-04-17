<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package partia
 */

?>


<?php if (( is_category(3) ) || ( is_category(12) ) ): ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	     
	    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php if ( has_post_thumbnail()) { ?>
		    <a class="imgnews" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $id, 'medium' ); ?></a>
		<?php } ?>
		<div class="data"><?php echo get_the_date('Y-m-d'); // то же что и the_date('Y/m/d') ?></div>
		<?php the_content('Детальніше...'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'partia' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<?php else  : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'partia' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'partia' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php endif; ?> 

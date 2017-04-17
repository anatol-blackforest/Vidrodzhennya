<?php
/**
 * The template for displaying all single posts.
 *
 * @package partia
 */

get_header(); ?>






	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		    <h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="data2"><?php echo get_the_date('Y.m.d'); // то же что и the_date('Y/m/d') ?></div>
		   

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->









<?php get_sidebar(); ?>
<?php get_footer(); ?>

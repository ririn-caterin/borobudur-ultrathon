<?php
/**
 * The template for displaying all single posts.
 *
 * @package freak
 */

get_header(); ?>
<div class="container-fluid back-abu">
	<div class="container effect8 back-putih">

		<div id="primary-mono" class="content-area <?php do_action('freak_primary-width') ?> page">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_title( '<h1 class="entry-title judul">', '</h1>' ); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->
	</div>
</div>
	
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
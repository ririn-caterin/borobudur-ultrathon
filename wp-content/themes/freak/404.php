<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package freak
 */

get_header(); ?>
<div class="container-fluid back-abu">
	<div class="container effect8 back-putih">

		<div id="primary-mono" class="content-area <?php do_action('freak_primary-width') ?> page">
		<main id="main" class="site-main top-konten" role="main">
			<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'freak' ); ?></h1>
			<p class="padding20"><?php _e( 'It looks like nothing was found at this location.', 'freak' ); ?></p>

		</main><!-- #main -->

	</div><!-- #primary -->
	</div>
</div>
	
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>

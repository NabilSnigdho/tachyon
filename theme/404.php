<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tachyon
 */

get_header();
?>

	<section id="primary">
		<main id="main">

			<div>
				<header class="page-header mx-auto max-w-content">
					<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'tachyon' ); ?></h1>
				</header><!-- .page-header -->

				<div <?php tachyon_content_class( 'page-content' ); ?>>
					<p><?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'tachyon' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

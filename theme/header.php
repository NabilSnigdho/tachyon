<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tachyon
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-slate-900 antialiased dark:bg-slate-900 dark:text-white' ); ?>>

<div class="invisible h-0">
	<?php get_template_part( 'template-parts/layout/icon-sprites' ); ?>
</div>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only block bg-emerald-100 !p-4 text-center outline-0 focus:not-sr-only dark:bg-emerald-800">
		<span class="p-2 underline outline-dashed outline-1"><?php esc_html_e( 'Skip to content', 'tachyon' ); ?></span>
	</a>

	<?php get_template_part( 'template-parts/layout/header/header', 'content' ); ?>

	<div id="content" class="container mx-auto py-5">

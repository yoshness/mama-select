<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta property="og:type" content="website" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css?v=06">

		<title>Mama-Select</title>

		<meta property="og:title" content="Mama-Select">
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="Mama-Select" />
		<meta property="og:image" content="<?php echo IMAGE_URL; ?>ogp.jpg">
		<link rel="shortcut icon" type="image/png" href="<?php echo IMAGE_URL; ?>favicon.png"/>
		<link rel="apple-touch-icon" href="<?php echo IMAGE_URL; ?>favicon.png">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/4.1.0/dotdotdot.js" integrity="sha512-y3NiupaD6wK/lVGW0sAoDJ0IR2f3+BWegGT20zcCVB+uPbJOsNO2PVi09pCXEiAj4rMZlEJpCGu6oDz0PvXxeg==" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiped-events@1.1.4/dist/swiped-events.min.js"></script>
		
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="loader-overlay" id="js-loader-overlay"></div>
		<?php get_template_part( 'template-parts/header'); ?>
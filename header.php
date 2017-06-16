<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
		{ (i[r].q=i[r].q||[]).push(arguments)}
		,i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-44364519-20', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body <?php

$body_classes = array();
$body_classes[] = 'side-menu-closed';
$body_classes[] = 'no-js';
$body_classes[] = ffThemeOptions::getQuery('post posts-opening');

body_class( $body_classes );

?>>
	<?php get_template_part('templates/blocks/loader-1/loader-1'); // needs to be first in body ?>
	<div class="master-wrapper">
		<header class="header">
			<?php get_template_part('templates/sections/header-1/header-1'); ?>
		</header>
		<div class="content-wrapper">

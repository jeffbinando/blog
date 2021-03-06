<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Zero
 * @since Zero 1.0
 */


get_header(); ?>


<main class="main">
	<?php

	the_post();


	get_template_part('templates/sections/featured-area-1/featured-area-1');
	get_template_part('templates/sections/blog-post-1/blog-post-1');

	?>
</main>

<?php get_footer(); ?>


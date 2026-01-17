<?php
/**
 * The single blog post template
 *
 */

get_header(); ?>

<main id="main" class="main-content">

<div class="blog-header">
	<h1><?php the_title(); ?></h1>
</div>

<?php the_post(); the_content(); ?>
</main>

<?php get_footer(); ?>

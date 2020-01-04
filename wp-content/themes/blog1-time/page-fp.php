<?php

/**
 * Template Name: Home Page
 */

get_header(); 

?>

<div id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('category',15); ?></h1>

            <img src="<?php the_field('image'); ?>" />
            <img src="<?php the_field('image_test'); ?>" alt="" />

			<p><?php the_content(); ?></p>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>





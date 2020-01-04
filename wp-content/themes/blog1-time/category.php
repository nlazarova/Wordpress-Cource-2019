<?php
/**
 * The template for displaying category archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 


// get the current taxonomy term
$term = get_queried_object();


// vars
$image = get_field('image', $term);
$color = get_field('color', $term);

?>
<style type="text/css">
	
	.entry-title a {
		color: <?php echo $color; ?> l 
	}
	
	<?php if( $image ): ?>
	.site-header {
		background-image: url(<?php echo $image['url']; ?>);
	}
	<?php endif; ?>
	
</style>
<div class="wrap">
	
	<?php // Remaining template removed from example ?>
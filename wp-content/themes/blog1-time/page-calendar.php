<?php
/**
 * Template name: Calendar page
 */
?>

<?php get_header(); ?>

<div class="container pt-5 pb-5 text-center">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<div class="content"><?php the_content(); ?></div>

<?php endwhile; endif; ?>

</div>

<div class="container text-center">

    <?php 
    $myposts = get_posts( array(
        'posts_per_page' => 5,
        'offset'         => 0,
        'category'       => 15
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <div class="card-deck" style="width: 24rem;">
                <div class="card">
                    <img src="<?php the_post_thumbnail_url(null,'smallest') ?>" class="card-img-top" alt="image">            
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>                                               
                    </div>                    
                </div>
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>

    

    <?php /*    
    $category = get_terms('category');//custom category name 

    foreach ($category as $catVal) {
        echo '<h2>'.$catVal->name.'</h2>'; 
    }*/
    ?>
</div>

<?php get_footer(); ?>
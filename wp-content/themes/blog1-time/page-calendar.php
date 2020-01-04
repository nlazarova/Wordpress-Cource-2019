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




    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
            <img class="d-block w-100" src="http://localhost/softyni/my-blog-1/wp-content/uploads/2019/12/apple-1110x300.jpg" alt="First slide">      
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/softyni/my-blog-1/wp-content/uploads/2019/12/peach-1110x300.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost/softyni/my-blog-1/wp-content/uploads/2019/12/strawberry-1110x300.jpg" alt="Third slide">
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
       
                        
               
        
    

    <?php /*    
    $category = get_terms('category');//custom category name 

    foreach ($category as $catVal) {
        echo '<h2>'.$catVal->name.'</h2>'; 
    }*/
    ?>
</div>

<?php get_footer(); ?>
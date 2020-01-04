<?php
/**
 * Template name: Page Month
 */
?>


<?php get_header(); ?>


<div id="carouselExampleControls" class="carousel slide container pt-5" data-ride="carousel">
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


<div class="container pt-5 pb-5">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<div class="content"><?php the_content(); ?></div>

<?php endwhile; endif; ?>

</div>

<div class="container">
  <div class="row row-cols-4">
    <?php 
        $myposts = get_posts( array(
            'posts_per_page' => 4,
            'offset'         => 0,
            'category'       => 16
        ) );
    
        if ( $myposts ) {
            foreach ( $myposts as $post ) : 
                setup_postdata( $post ); ?>
        <div class="col">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
            <img src="<?php the_post_thumbnail_url(null,'smallest') ?>" class="card-img-top" alt="image">
            <h5 class="card-title"></a></h5>
        </div>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
    
  </div>
</div>

<?php get_footer(); ?>
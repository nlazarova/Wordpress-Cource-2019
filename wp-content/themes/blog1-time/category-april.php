<?php
/**
 * Template name: Page Month
 */
?>


<?php get_header(); ?>

<div class="container pt-5 pb-5" >
    <h1>April</h1>    
    <div class="navbar navbar-light text-white" style="background-color: #04d34d;">Seedlings of early tomatoes, peppers and eggplant are planted. The early garden beans are also planted (in northern Bulgaria after April 15).</div>
</div>

<div class="container pt-5 pb-5">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<div class="content"><?php the_content(); ?></div>
<div class="content"><?php the_content( 'Read more ...' ); ?></div>

<?php endwhile; endif; ?>

</div>

<div class="container">
  <div class="row row-cols-4">
    <?php 
        $myposts = get_posts( array(
            'posts_per_page' => 4,
            'offset'         => 0,
            'category'       => 14
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
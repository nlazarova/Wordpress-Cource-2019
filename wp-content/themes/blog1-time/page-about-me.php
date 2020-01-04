<?php get_header(); ?>

<div class="container pt-5 pb-5">

<p>page-about-me.php</p> // Just to know where is loaded

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<div class="my-container"><?php if ( has_post_thumbnail() ) {
    the_post_thumbnail('my-size-img');
    //get_the_post_thumbnail( $post_id, 'smallest');
    }?></div>

<div class="content"><?php the_content(); ?></div>

<?php endwhile; endif; ?>




    <div class="col-md-12" style="background-color: #e3f2fd;">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>   
            <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
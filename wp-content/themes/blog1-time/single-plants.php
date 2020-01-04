<?php get_header(); ?>

<div class="container pt-5 pb-5">    

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>    

    <div class="container">
    <div class="row">
        <div class="col-8">
            <h1><?php the_title(); ?></h1>
            <img src="<?php the_post_thumbnail_url(null,'my-size-img-post') ?>" class="img-fluid" alt="Responsive image">
            
            <div class="content pt-4"><?php the_content(); ?></div>

            <?php endwhile; endif; ?>
        </div>
        <div class="col-4">
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>   
            <?php endif; ?>
        </div>
    </div>


</div>

<?php get_footer(); ?>
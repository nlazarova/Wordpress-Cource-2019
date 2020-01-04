<?php get_header(); ?>

<div class="container pt-5 pb-5">    

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>    

    <div class="container">
        <h1><?php the_field('title'); ?></h1>
        <div class="row">
        
            <div class="col-8">        
                <h5>Author: <?php the_field('author'); ?></h5>
                <img src="<?php the_post_thumbnail_url(null,'my-size-img-post') ?>" class="img-fluid" alt="Responsive image">
                <h5 class="pt-4">Price <?php the_field('price'); ?></h5> 
                <div class="content pt-4"><?php the_content(); ?></div>
                    <?php endwhile; endif; ?>
            </div>
            <div class="col-4">
                <h5>Description</h5>
                <p><?php the_field('content'); ?></p>
            </div>
        </div>

        <div class="container alert mt-4 pt-4">
            <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    </div>   
            <?php endif; ?>
        </div>
    </div>


</div>

<?php get_footer(); ?>
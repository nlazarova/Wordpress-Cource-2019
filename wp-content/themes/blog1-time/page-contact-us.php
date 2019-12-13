<?php
/**
 * Template name: Contact us
 */
 ?>


<?php get_header(); ?>

<div class="container pt-5 pb-5">

<p>Contact us</p> // Just to know where is loaded

<?php if (have_posts()): while (have_posts()) : the_post(); ?>


<?php
/*
$data = [
    'address' => get_field( 'address' ),
    'email' => get_field( 'email' ),
    'social_media_links' => get_field( 'social_media_links' )

];*/
?>
<div class="container pt-5 pb-5">
    <?php if ( ! empty ( $company_name ) ) : ?> 
        <h1><?php echo $company_name; ?></h1>
    <?php endif; ?>

    <?php if ( ! empty ( $address ) ) : ?> 
        <p><?php echo $address; ?></p>
    <?php endif; ?>

    <?php if ( ! empty ( $phone_number ) ) : ?> 
        <h1><?php echo $phone_number; ?></h1>
    <?php endif; ?>

    <?php if ( ! empty ( $email ) ) : ?> 
        <h1><?php echo $email; ?></h1>
    <?php endif; ?>

    <?php if ( ! empty ( $social_media_links ) ) : ?> 
        <?php foreach ($social_media_links as $link) : ?>
            <li>
                <a href="<?php echo $link['url']; ?>" <?php echo $link['title']; ?> ></a>
            </li>
        <?php endforeach?>
        <h1><?php echo $social_media_links; ?></h1>
    <?php endif; ?>

    
    



<h1><?php the_title(); ?></h1>



<div class="content"><?php the_content(); ?></div>

<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>
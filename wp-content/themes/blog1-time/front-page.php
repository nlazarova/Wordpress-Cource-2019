<?php get_header(); ?>

<div class="container pt-5 pb-5 text-center">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="content"><?php the_content(); ?></div>

    <?php endwhile; endif; ?>

</div>

<div class="container pb-5"><img src="<?php the_post_thumbnail_url(null,'my-size-img-post') ?>" class="img-fluid" alt="Responsive image"></div>

<div class="container alert text-center">
  <div class="row row-cols-4 alert pl-5 text-uppercase font-weight-bold" style="height: 8rem;" role="alert">  
    
  <?php wp_list_categories( array(
        
        
        'orderby'            => 'id',
        'show_count'         => false,//true
        'use_desc_for_title' => false,
        'child_of'           => 10,       
        'style'    => 'none',        
    
    ) ); ?>
    
  </div>
</div>


<div class="container alert">
<?php $upload_dir = wp_upload_dir(); ?>
  <div class="row row-cols-4 text-center">  
    <div class="col"><a href="<?php echo get_site_url(); ?>/category/month/march/"><img src="<?php echo $upload_dir['baseurl']; ?>/prolet2-150x150.jpg" class="rounded" alt="..."></a></div>    
    <div class="col"><a href="<?php echo get_site_url(); ?>/category/month/may/"><img src="<?php echo $upload_dir['baseurl']; ?>/liato1-150x150.jpg" class="rounded" alt="..."></a></div>
    <div class="col"><a href="<?php echo get_site_url(); ?>/category/month/august/"><img src="<?php echo $upload_dir['baseurl']; ?>/ecen2-150x150.jpg" class="rounded" alt="..."></a></div>
    <div class="col"><a href="<?php echo get_site_url(); ?>/category/month/september/"><img src="<?php echo $upload_dir['baseurl']; ?>/zima1-150x150.jpg" class="rounded" alt="..."></a></div>
  </div>
</div>



<div class="container alert mt-4 pt-4">
<?php $upload_dir = wp_upload_dir(); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="<?php echo $upload_dir['baseurl']; ?>/nature2.gif" width="" height="" alt="" />
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="<?php echo $upload_dir['baseurl']; ?>/natural.gif" width="" height="" alt="" />
    </div> 
    <div class="carousel-item">  
    <img class="d-block w-100" src="<?php echo $upload_dir['baseurl']; ?>/nature-sping.gif" width="" height="" alt="" />
    </div>    
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


<div class="container alert text-center">
    <h2>Latest Posts</h2>
    <div class="container alert">
      <div class="row row-cols-4">
        <?php 
            $myposts = get_posts( array(
                'posts_per_page' => 4,
                'offset'         => 0,
                'category'       => 10
            ) );
        
            if ( $myposts ) {
                foreach ( $myposts as $post ) : 
                    setup_postdata( $post ); ?>
            <div class="col">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(null,'smallest') ?>" class="card-img-top" alt="image">
                <h5 class="card-title"><?php the_title(); ?></h5></a>
            </div>
            <?php
            endforeach;
            wp_reset_postdata();
            }
            ?>
    
      </div>
    </div>
    

</div>



<div class="container alert text-center">
  <h2>What customers say about us</h2>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Hristo Dobrev
          </button>
        </h2>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body row">
          <div class="col-sm-4">
            <img src="http://localhost/softyni/my-blog-1/wp-content/uploads/2020/01/logo-acal1-1-150x150.gif" class="rounded" alt="...">
          </div>
          <div class="col-sm-8">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et magnis dis parturient montes nascetur ridiculus mus mauris. Sapien nec sagittis aliquam malesuada. Facilisis volutpat est velit egestas dui id. Duis ut diam quam nulla. Tempus quam pellentesque nec nam. Nisl pretium fusce id velit ut. Proin sed libero enim sed faucibus. Euismod in pellentesque massa placerat duis ultricies. Pretium fusce id velit ut. Mattis vulputate enim nulla aliquet porttitor. Proin libero nunc consequat interdum varius. At augue eget arcu dictum varius.
          </div>        
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Ivan Petrov
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
        Mi quis hendrerit dolor magna eget est lorem. Tellus at urna condimentum mattis pellentesque. Nisi porta lorem mollis aliquam ut porttitor. Sed cras ornare arcu dui vivamus arcu felis bibendum ut. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit. Scelerisque eu ultrices vitae auctor eu. Duis ultricies lacus sed turpis tincidunt id aliquet risus. Eget nunc scelerisque viverra mauris in. Vestibulum sed arcu non odio euismod lacinia at. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Christina Dineva
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
        Volutpat commodo sed egestas egestas fringilla phasellus faucibus. Morbi enim nunc faucibus a. Sit amet mauris commodo quis. Blandit aliquam etiam erat velit scelerisque in dictum non. Magna ac placerat vestibulum lectus mauris ultrices eros in. Est ultricies integer quis auctor elit sed. Sit amet facilisis magna etiam tempor orci eu. Leo integer malesuada nunc vel. Diam ut venenatis tellus in metus. Feugiat sed lectus vestibulum mattis.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container alert">
<?php
/**
 * Output a post's first image.
 *
 * @param int $post_id Post ID.
 */
function wpdocs_echo_first_image( $post_id ) {
    $args = array(
        'posts_per_page' => 1,
        'order'          => 'ASC',
        'post_mime_type' => 'image',
        'post_parent'    => $post_id,
        'post_status'    => null,
        'post_type'      => 'attachment',
    );
 
    $attachments = get_children( $args );
 
    if ( $attachments ) {
        echo '<img src="' . wp_get_attachment_thumb_url( $attachments[0]->ID ) . '" class="current">';
    }
}
?>
</div>




<div class="container alert">
<img src="http://localhost/softyni/my-blog-1/wp-content/uploads/2020/01/poleto.jpg" class="card-img" alt="junk">
</div>

<?php get_footer(); ?>
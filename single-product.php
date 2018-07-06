<?php get_header('themepage'); // get custom header 
?>

<section id="content">
    <div class="container">
        <div class="row">
    <div class="col-md-6 wrap-content blog-single">
    <?php while ( have_posts() ) : the_post(); //loop ?>
        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
            <?php the_title( '<h1>','</h1>' );  ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(array(500, 500)); ?>
            </div>
            <div class="entry_content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    </div>
        <div class="col-md-6">
            <h2>Theme Details :</h2>
            <?php 
            $price = get_post_meta($post->ID, 'Price', true);
            $Download_Link = get_post_meta( $post->ID, 'Download Link', true );
            $Skills = get_post_meta($post->ID, 'Skills', true);
            if(!empty($price)) { ?>
            <div style="width:100%;background:#ccc;display: inline-flex;">
                <h3 class="col-md-6 ">Price</h3>
                    <span style="color:#777" class="col-md-6">
                        <?php echo $price ?>
                    </span>
                </div>                
            <div style="width:100%;background:#ccc;display: inline-flex;">
                <h4 class="col-md-6 ">Download</h4>
                    <span style="color:#777" class="col-md-6">
                        <a href="#">
                            <?php echo $Download_Link ?>
                        </a>
                            </span>
                </div>         
            <div style="width:100%;background:#ccc;display: inline-flex;">
                <h4 class="col-md-6 ">Download</h4>
                    <span style="color:#777" class="col-md-6">
                        <a href="#">
                            <?php echo $Skills ?>
                        </a>
                    </span>
                </div>
            <?php } // end if ?>    
            </div>
        </div>
    </div>    
</section>
<?php
get_footer();
?>


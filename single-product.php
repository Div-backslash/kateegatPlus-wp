<?php get_header('themepage'); // get custom header ?>
<section class="theme_single" id="content">
    <div class="container">
        <?php if (function_exists('my_breadcrumbs')) my_breadcrumbs(); ?>
        <div class="row main_row">
    <div class="col-md-6 wrap-content blog-single">
    <?php while ( have_posts() ) : the_post(); //loop ?>
        <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
            <?php the_title( '<h1 class="theme_title">','</h1>' );  ?>
            
            <!-- Start Content -->
            <?php 
            $Responsive = get_post_meta($post->ID, 'Responsive', true);
            $Widget_Ready = get_post_meta( $post->ID, 'Widget Ready', true );
            $High_Resolution = get_post_meta($post->ID, 'High Resolution', true);
            ?>
            <div class="custom_field">
                <h3 class="col-md-6 field_head">Responsive</h3>
                    <span class="col-md-6 custom_span">
                        <?php echo $Responsive ?>
                    </span>
                </div>                
            <div class="custom_field">
                <h3 class="col-md-6 field_head">Widget Ready</h3>
                <span class="col-md-6 custom_span">                                 <?php echo $Widget_Ready ?>
                </span>
            </div>  
            <div class="custom_field">
                <h3 class="col-md-6 field_head">High Resolution</h3>
                    <span class="col-md-6 custom_span">
                        <p>
                            <?php echo $High_Resolution ?>
                        </p>
                    </span>
                </div> 
        </article>
    <?php endwhile; ?>

    </div>
        <div class="col-md-6 details">
            <h2 class="theme_details">Theme Details</h2>
            <?php 
            // create a custom fields in theme details
            $price = get_post_meta($post->ID, 'Price', true);
            $Download_Link = get_post_meta( $post->ID, 'Download Link', true );
            $html5 = get_post_meta($post->ID, 'html5', true);
            $css3 = get_post_meta($post->ID, 'css3', true);
            $js = get_post_meta($post->ID, 'js', true);
            if(!empty($price)) { ?>
            <div class="custom_field">
                <h3 class="col-md-6 ">Price</h3>
                    <span class="col-md-6">
                        <?php echo $price ?>
                        <i class="fas fa-dollar-sign fw dollar"></i>
                    </span>
                </div>                
            <div class="custom_field">
                <h3 class="col-md-6 ">Download</h3>
                <span class="col-md-6 custom_download">
                <a href="<?php echo $Download_Link ?>" target="_blank">
                        <i class="custom_btn fas fa-download">
                            
                        </i>
                </a>  
                    </span>
                </div>  
            <div class="custom_field">
                <h3 class="col-md-6 ">Based On</h3>
                    <span class="col-md-6">
                        <p>
                            <?php echo
                                '<span class="skills">',
                                    $html5,
                                '</span>',
                                '<span class="skills">',
                                    $css3,
                                '</span>',
                                '<span class="skills">',
                                    $js,
                                '</span>'
                            ?>                         
                        </p>
                    </span>
                </div>
            <?php } // end if ?>    
            </div>
        </div>
    </div>
</section>
    <hr>
    <section class="theme_content">
        <div class="container">
            <div class="row post-thumbnail">
                <div class="col-xs-12 content_title">
                <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-xs-12 content_thumbnail">
                <?php the_post_thumbnail('', ['class' => 'img-responvise img-thumbnail', 'title' => 'Post Image']) ?>      
                </div>
            </div>
            <div class="col-xs-12 entry_content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
<?php

require_once dirname( __FILE__ ) . '/kateegat-widgets/related_posts.php';

// If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) {
     comments_template();
 }
    get_footer('themepage');
?>
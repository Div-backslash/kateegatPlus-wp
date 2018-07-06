<!-- Start Navbar -->

<div id="navbar" class="navbar_section navbar-expand-lg navbar-light">
    <div id="down_section" class="container">
            <a class="navbar-brand" href="<?php home_url(); ?>">
            <?php echo of_get_option('sitename', 'no-entry'); ?>
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggel-nav"></span>
            <span class="toggel-nav"></span>
            <span class="toggel-nav1"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto active">
                    <a class="nav-link" href="#" data-scroll="#home">
                        <?php echo of_get_option('home_fixedtop', 'no-entry'); ?>
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item m-auto">
                    <a class="nav-link" href="#" data-scroll="#about">
                    <?php echo of_get_option('about_fixedtop', 'no-entry'); ?>
                    </a>
                </li>
                <li class="nav-item m-auto">
                    <a class="nav-link" href="#" data-scroll="#my-works">
                    <?php echo of_get_option('works_fixedtop',  'no-entry'); ?>
                    </a>
                </li>
            </ul>
            <div class="icon-social">
                <a href="<?php echo of_get_option('insta_fixedtop', 'no-entry') ?>" target="_blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="<?php echo of_get_option('fb_fixedtop', 'no-entry') ?>" target="_blank">
                    <i class="fa fa-instagram"></i>
                </a>
                <a id="whatsup" href="" target="_blank">
                    <i class="fa fa-whatsapp"></i>
                </a>
                <span></span>
                <div id="whatsholder" style="display:none">
                    0100-2220-556
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Navbar -->
<section class="demoSec">
    <div class="container">
        <div class="demo-info">
            <h1 class="demo-head">Pick up a theme</h1>
            <p>Also we have free pro themes</p>
        </div>
<div class="your-class">
<?php 
$args = array( 
	'post_type' => 'product', 
	'posts_per_page' => 10 
	);

$the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
    
                  <div class="hold-post-type">
                        <a href="<?php the_permalink(); ?>" class="thumbnail">
                            <?php the_post_thumbnail('', ['class' => 'img-thumbnail img-custom', 'title' => 'Post Image']) ?>
                        <div class="overlay-thumbnail">
                            <div class="text entry-content">
                                <p>
                                    <?php the_title(); ?>
                                </p>
                            </div>
                        </div>
                       </a>
                    </div>
    <?php
 }
}else{
    _e( 'Nothing found!', 'saidweb' ); 
 }
?>
        </div>
    <?php wp_reset_postdata(); ?>
    </div>
</section>
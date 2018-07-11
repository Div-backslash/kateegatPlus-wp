<?php get_header('themepage'); // get custom header ?>
<div class="container">
<?php if (function_exists('my_breadcrumbs')) my_breadcrumbs(); ?>
</div>
<section class="theme_single" id="content">
    <div class="container">
        <div class="row">
<?php 
$args = ['post_type'  => 'product', 'posts_per_page' => 10,];

$loop = new WP_Query($args);

while ($loop->have_posts()) {
    $loop->the_post();
    ?>
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                    <?php the_post_thumbnail('', ['class' => 'img-thumbnail img-custom', 'title' => 'Post Image']) ?>
                <div class="overlay-thumbnail">
                    <div class="text entry-content">
                        <p><?php the_title(); ?></p>
                    </div>
                </div>
                </a>
            </div>
    <?php
}
?>
        </div>
    </div>            
</section>
<?php
// get Contact Section
require_once dirname( __FILE__ ) . '/template-parts/contact.php'; 
?>
<?php get_footer(); ?>
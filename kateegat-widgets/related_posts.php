	<div class="related-posts">
		<h3 class="single-related-title text-center">
            Related Posts From Themes Category
        </h3>
		<?php
		$random_posts_arguments = array(
			'posts_per_page'	=> 3,
            'post_type' => 'product',
			'orderby'	=> 'related',
			'category__in'	=> wp_get_post_categories(get_queried_object_id()),
			'post__not_in'	=> array(get_queried_object_id())

		);

		$random_posts = new WP_Query($random_posts_arguments);
?>        
        <div class="row">
<?php
		if ($random_posts->have_posts()) {
			while ($random_posts->have_posts()) {
				$random_posts->the_post() ?>
            <div class="author-posts col-sm-4">
                <a href="<?php the_permalink(); ?>">
                    <div class="over-lay">
                
                    <?php the_post_thumbnail('', ['class' => 'img-responvise img-thumbnail custom-img-height', 'title' => 'Post Image']) ?>
                    </div>
                </a>
                <h3 class="post-title">
                    <a href="<?php the_permalink() ?>">
                        <?php the_title() ?>
                    </a>
                </h3>
            </div>
		<?php
			}
		}
		wp_reset_postdata();
		?>
	</div>
</div>
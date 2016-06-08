<div class="skar-content">
<?php
	$post_args = array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'order' => 'DESC',
		'category_name' => 'news',
	);

	$post_query = new WP_Query( $post_args );
	if( $post_query->have_posts() ) : while( $post_query->have_posts() ) : $post_query->the_post();
?>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 recent-posts">
		<div class="inner-content">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="inner-content-title">
					<a href="<?php the_permalink(); ?>"><p><?php echo the_title(); ?></p></a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>
					<span>Recent Blog Post | <?php echo the_title(); ?>.</span>
					<?php echo the_excerpt(); ?>
				</p>
			</div>
			<div>
				<span><a href="<?php the_permalink(); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
			</div>
		</div>
	</div>
<?php endwhile; wp_reset_postdata(); endif; ?>
</div>
<?php
	$args = array(
		'post_type' => 'services',
		'posts_per_page' => -1,
		'order' => 'DESC'
	);
	
	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
?>

<div class="container services-wrapper">
	<div class="services-label">
		<span>OUR SERVICES</span>
	</div>

<?php while( $query->have_posts() ) : $query->the_post(); ?>

<?php if( $count % 3 == 0 ) : ?>
	<div class="row row-eq-height">
<?php endif; ?>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service-container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 service-square">
					<img src="/wp-content/uploads/2016/05/green-square.jpg">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 service-content">
					<p><?php the_title(); ?></p>
					<p><?php echo $post->post_excerpt; ?></p>
					<p id="post-<?php echo $post->ID; ?>" class="collapse"><?php echo $post->post_content; ?></p>
				</div>
			</div>
			<span role="button" data-toggle="collapse" data-parent="#accordion" href="#post-<?php echo $post->ID; ?>" class="arrow-icon"></span>
		</div>
<?php if( $count == 2 || $count == 5 || $count == 8 || $count == 11 ) : ?>
	</div>
<?php endif; ?>
<?php $count ++; endwhile; ?>
</div>
<?php endif; ?>
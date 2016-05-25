<?php 
	
	// set up and display each person
	// we're using a pure jQuery plugin to display portraits in a carousel slider

	$args = array(
		'post_type' => 'people',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	if( $query->have_posts() ) : 
?>
<div class="people-container">
	<div class="people-slider-label">
		<span>our people</span>
		<span role="button" class="email-text" data-toggle="modal" data-target="#email-alerts">Sign up for email alerts</span>
	</div>
	<div class="people-slider">
	<?php while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="person-container">
		<?php 
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); //get each person' portrait (set as featured image)
			if( get_field( 'signature' ) ) {
				$signature = get_field( 'signature' ); // set the signature
			}
		?>
			<img class="portrait" src="<?php echo $src[0]; ?>">
			<a href="<?php the_permalink(); ?>"><img class="signature" src="<?php echo $signature['url']; ?>"></a>
		</div>

	<?php endwhile; ?>
	</div>
</div>
<?php endif; wp_reset_postdata(); ?>
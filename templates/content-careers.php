<?php
	$args = array(
		'post_type' => 'skar-careers',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
?>

<div class="career-posts">
<?php while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="career-single-post">
		<div class="row career-title">
		<?php if(get_field('icon_image')) : $src = get_field('icon_image')[0]; else : $src = '/wp-content/uploads/2016/05/green-square.jpg'; endif; ?>
			<div class="list-img">
				<img class="img-responsive" src="<?php echo $src; ?>" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->ID; ?>" aria-expanded="true" aria-controls="collapse<?php echo $post->ID; ?>">
			</div>
			<div class="list-title">
				<h4>
					 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->ID; ?>" aria-expanded="true" aria-controls="collapse<?php echo $post->ID; ?>">
						<?php the_title(); ?>
					</a>	
				</h4>
			</div>
		</div>
		<div id="collapse<?php echo $post->ID; ?>" class="collapse job-content" role="tabpanel">
			<div class="job-description"><?php the_field( 'job_description' ); ?></div>
			<?php if( have_rows( 'job_details' ) ) : while( have_rows( 'job_details' ) ) : the_row(); ?>
				<div class="job-details-label"><?php the_sub_field( 'label' ); ?></div>
				<div class="job-details"><?php the_sub_field('detail_content'); ?></div>
			<?php endwhile; endif; ?>
				<div class="job-form">
				<?php if( get_field( 'apply_form' ) ) : ?>
					<?php the_field( 'apply_form' ); ?>
				<?php else : ?>
					<?php echo do_shortcode( '[contact-form-7 id="12046" title="General Job App"]' ); ?>
				<?php endif; ?>
				</div>
				<div class="additional-info"><?php the_field( 'additional_info' ); ?></div>
		</div>

	</div><hr>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php endif; ?>
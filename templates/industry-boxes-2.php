<?php
    $args = array(
        'post_type' => 'industries',
        'posts_per_page' => -1,
        'order' => 'ASC'
    );

    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
?>
<div class="container-fluid industry-boxes-2-container row-eq-height">
<?php while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 industry-box">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content-wrapper">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 this-industry-title">
				<a href="<?php the_permalink(); ?>"><?php the_title( '<p>', '</p>' ); ?></a>
				<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="/wp-content/uploads/2016/05/industry-circle.png"></a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tagline">
				<?php the_field( 'tag_line' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endif; ?>

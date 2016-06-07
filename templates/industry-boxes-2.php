<?php
    $args = array(
        'post_type' => 'industries',
        'posts_per_page' => -1,
        'order' => 'ASC'
    );

    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
?>
<div class="container-fluid industry-boxes-2-container">
<?php while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 industry-box">
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 img-wrapper">
			<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo get_field( 'icon' )['url']; ?>"></a>
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content-wrapper">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 this-industry-title">
				<a href="<?php the_permalink(); ?>"><?php the_title( '<p>', '</p>' ); ?></a>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tagline">
				<?php the_field( 'tag_line' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>

<?php endif; ?>

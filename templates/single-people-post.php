<div class="container-fluid single-people-page-container">

	<section class="row person-section-one">
	<?php if(get_field( 'big_signature' )) : ?>
		<img class="img-responsive" src="<?php echo get_field( 'big_signature' )['url']; ?>">
	<?php endif; ?>
	</section>

<?php
	$query = new WP_Query( array( 's' => get_the_title() ) );
	if( $query->have_posts() ) :
		$count = 1;
?>

	<section class="row person-section-two">
	<?php while( $query->have_posts() ) : $query->the_post(); ?>
		<div class="row person-article-container">
			<div id="title-<?php echo $count; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person-article-title">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>
			<div id="content-<?php echo $count; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person-article-content">
				<p><?php the_date(); ?></p>
				<?php the_excerpt(); ?>
			</div>
		</div>
		<?php $count ++; endwhile; wp_reset_postdata(); ?>
		<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
	</section>
<?php endif; ?>
</div>
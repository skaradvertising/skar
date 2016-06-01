<div class="container-fluid single-people-page-container">

	<section class="row person-section-one">
	<?php if(get_field( 'big_signature' )) : ?>
		<img class="img-responsive signature" src="<?php echo get_field( 'big_signature' )['url']; ?>">
	<?php endif; ?>
	</section>

<?php
	$person_tag = get_term_by( 'name', get_the_title(), 'post_tag' );
	$args = array(
		'tag__and' => array( $person_tag->term_id, 2186 )
	);
	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
?>

	<section class="row person-section-two">
	<?php while( $query->have_posts() ) : $query->the_post(); ?>
		<div class="row person-article-container">
			<div id="title-<?php echo $post->ID; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person-article-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<div id="content-<?php echo $post->ID; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person-article-content">
				<p><?php the_date(); ?></p>
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</section>
<?php endif; ?>
</div>
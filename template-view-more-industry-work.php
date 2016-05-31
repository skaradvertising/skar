<?php
/**
 * Template Name: View More Industry Work Template
 */
?>
<div class="container-fluid single-client-container">

	<div class="row single-work-header">
		<h1><?php the_title(); ?></h1>
	</div>

<?php
$parent = get_post((int)get_field( 'parent_page_id' ));
$related = new WP_Query( array(
  'connected_type' => 'industry_to_work',
  'connected_items' => $parent->ID,
  'nopaging' => true,
) );
?>
<?php while ( $related->have_posts() ) : $related->the_post(); ?>
<?php if( get_field( 'industry_archive' ) ) : ?>
	<?php
	// Find connected pages
	$connected = new WP_Query( array(
	  'connected_type' => 'work_to_campaign',
	  'connected_items' => $post->ID,
	  'nopaging' => true,
	) );

	// Display connected pages
	if ( $connected->have_posts() ) :
	?>
	
	<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

	<div class="container-fluid work-posts-container">
		<div id="post-<?php echo $post->ID; ?>" class="row single-campaign-wrapper">
			
			<div class="container campaign-label">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 campaign-title">
					<h1 class="client-name"><a href="<?php the_permalink(); ?>"><?php echo get_the_title( get_field( 'client_name' )[0] ); ?></a></h1>
					<h1 class="campaign-title"><a href="<?php the_permalink(); ?>"><?php the_field( 'campaign_title' ); ?></a></h1>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 campaign-description">
					<?php the_field( 'campaign_description' ); ?>
				</div>
			</div>
		<?php if ( have_rows( 'main_content' ) ) : while( have_rows( 'main_content' ) ) : the_row(); ?>
			<div class="row campaign-row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-type"><span><?php the_sub_field( 'type' ); ?></span></div>
					<?php if( get_sub_field( 'campaign_piece_description' ) ) : ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-piece-content"><?php the_sub_field( 'campaign_piece_description' ); ?></div>
					<?php endif; ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-content"><?php the_sub_field( 'content' ); ?></div>
					</div>
				</div>
			</div>
		<?php endwhile; endif; ?>
			
		</div>

	</div>
	<?php endwhile; ?>
	
	

	<?php 
	// Prevent weirdness
	wp_reset_postdata();

	endif;
	?>
<?php endif; ?>
<?php endwhile; ?>
<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>

</div>
<div class="container-fluid single-campaign-container">
<?php 
	if( is_tax() ) {
	    global $wp_query;
	    $term = $wp_query->get_queried_object();
	    $title = $term->name;
	}
?>
<h1><?php echo $title; ?> Work</h1>
<?php if( have_posts() ) : ?>
<div class="container-fluid work-archive-container">
	
	<?php while( have_posts() ) : the_post(); ?>
	<?php if ( have_rows( 'main_content' ) ) : while( have_rows( 'main_content' ) ) : the_row(); ?>
	<?php if( get_sub_field( 'category_type' )[0] == $term->term_id ) : ?>
		<section id="post-<?php echo $post->ID; ?>" class="row single-campaign-wrapper">
			<div class="container campaign-label">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 campaign-title">
					<h1 class="client-name"><a href="<?php the_permalink(); ?>"><?php echo get_the_title( get_field( 'client_name' )[0] ); ?></h1>
					<h1 class="campaign-title"><a href="<?php the_permalink(); ?>"><?php the_field( 'campaign_title' ); ?></h1>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 campaign-description">
				<?php if( get_sub_field( 'campaign_piece_description' ) ) : ?>
					<?php the_sub_field( 'campaign_piece_description' ); else : ?>
					<?php the_field( 'campaign_description' ); ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="row campaign-row">
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-type"><!--<span><?php the_sub_field( 'type' ); ?></span>--></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-content"><?php the_sub_field( 'content' ); ?></div>
				</div>
			</div>
		
		</section>
		<?php endif; endwhile; endif; ?>
	<?php endwhile; ?>
	<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
</div>
<?php endif; ?> 
</div>
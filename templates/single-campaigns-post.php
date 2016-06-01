<div class="container-fluid single-campaign-container">
    <div id="post-<?php echo $post->ID; ?>" class="row single-campaign-wrapper">
		
		<div class="container campaign-label">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 campaign-title">
				<h1 class="client-name"><?php echo get_the_title( get_field( 'client_name' )[0] ); ?></h1>
				<h1 class="campaign-title"><?php the_field( 'campaign_title' ); ?></h1> 
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 campaign-description">
				<?php the_field( 'campaign_description' ); ?>
			</div>
		</div>
	<?php if ( have_rows( 'main_content' ) ) : while( have_rows( 'main_content' ) ) : the_row(); ?>
		<div class="row campaign-row">
			<div class="container">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-type"><span><?php the_sub_field( 'type' ); ?></span></div>
			<?php if( get_sub_field( 'campaign_piece_description' ) ) : ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-piece-content"><?php the_sub_field( 'campaign_piece_description' ); ?></div>
			<?php endif; ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 campaign-row-content"><?php the_sub_field( 'content' ); ?></div>
			</div>
		</div>
	<?php endwhile; endif; ?>
		
	</div>
</div>
<div class="container-fluid single-campaign-container">
    <section class="single-campaign-section one row">
	    <div class="row">
	    <?php the_field( 'campaign_title' ); ?>
	    <?php the_title(); ?>
	    <?php echo $post->post_name; ?>

	    	<?php //the_content(); ?>
		</div>
    </section>
</div>
<div class="container-fluid single-industry-container">
    <section class="single-industry-section one container-fluid">
	    <div class="row">
	    <?php if( have_rows( 'shifty' ) ) : $data_depth = 0; ?>

	        <ul id="scene">

	        <?php while( have_rows( 'shifty' ) ) : the_row(); ?>

	        	<?php if( get_sub_field( 'image_layer' ) ) : $img = get_sub_field( 'image_layer' )['url']; ?>

	        		<li class="layer" data-depth="<?php echo $data_depth; ?>"><img src="<?php echo $img; ?>"></li>

				<?php endif; ?>
			<?php $data_depth += 0.03; endwhile; ?>

			</ul>

		<?php endif; ?>
		</div>
		<div class="section-one-content-container row-eq-height">
			<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 empty-section"></div>
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 section-one-content-wrapper">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 industry-title">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 industry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
    </section>
    <section class="single-industry-section two container-fluid">
    	<div class="row"><?php get_template_part( 'templates/industry', 'boxes-2' ); ?></div>
    	<div class="row"><?php get_template_part( 'templates/industry', 'featured-work' ); ?></div>
    </section>
</div>
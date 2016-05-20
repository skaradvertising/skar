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
		<div class="section-one-content-container">
			<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12"></div>
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 section-one-content-wrapper">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 industry-title">
					<?php the_title( '<h1>', '</h1>' ); ?>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 industry-content">
					<p>
						Are you looking to maximize customer acquisition while minimizing attrition? Great. Because that's one of the many things we help our financial clients do, along with implementing new ways to help increase deposits and drive cross-selling of products.
					</p>
					<p>
						Interested in learning more? Then it's time to get in touch.
					</p>
				</div>
			</div>
		</div>
    </section>
    <section class="single-industry-section two container-fluid">
    	<div class="row"><?php get_template_part( 'templates/industry', 'boxes-2' ); ?></div>
    	<div class="row"><?php get_template_part( 'templates/industry', 'featured-work' ); ?></div>
    </section>
</div>
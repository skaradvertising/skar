<div class="container-fluid single-industry-container">
    <section class="single-industry-section one row">
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
    </section>
</div>
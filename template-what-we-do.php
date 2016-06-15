<?php
/**
 * Template Name: What We Do Template
 */
?>
<div class="what-we-do-container">
	<section class="container-fluid what-we-do-section one">
	<?php if( have_rows( 'background' ) ) : $data_depth = 0; ?>
		<div class="row image-layers">
	        <ul id="scene">

	        <?php while( have_rows( 'background' ) ) : the_row(); ?>

	        	<?php if( get_sub_field( 'layer' ) ) : $img = get_sub_field( 'layer' )['url']; ?>

	        		<li class="layer" data-depth="<?php echo $data_depth; ?>"><img src="<?php echo $img; ?>"></li>

				<?php endif; ?>
			<?php $data_depth += 0.03; endwhile; ?>

			</ul>
			<p class="scroll-down-container">
				<a class="scroll-down" href="#0"><?php get_template_part( 'templates/svgs/pxd', 'arrow' ); ?></a>
			</p>
		</div>
	<?php endif; ?>
		<div class="row row-eq-height">
			<div class="col-lg-6 col-md-6"></div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-1-div-1">
					<div class="section-1-div-1-overlay"></div>
					<?php the_field( 'page_tagline' ); ?>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-1-div-2">
					<?php the_field( 'page_description' ); ?>
				</div>
			</div>
		</div>
		<span class="return-to-top"><a href="#"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
	</section>

	<section class="container-fluid what-we-do-section two">
		<div class="row two-top">
			<?php get_template_part( 'templates/industry', 'boxes-2' ); ?>
			<div class="row work-label-container">
				<div class="col-lg-12 co-md-12 col-sm-12 col-xs-12">
					<span>OUR WORK</span>
					<?php 
						if( has_nav_menu( 'work_navigation' ) ) :
		                    wp_nav_menu(['theme_location' => 'work_navigation', 'menu_class' => 'work_nav', 'after' => '<span> | </span>']);
		                endif;               
		            ?>
				</div>
			</div>
		</div>
		<?php get_template_part('templates/work', 'featured-on-pages'); ?>
	</section>

	<section class="container-fluid what-we-do-section three">
		<?php get_template_part('templates/content', 'services'); ?>
	</section>

</div>

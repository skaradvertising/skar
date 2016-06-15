<?php
		                
	if( have_rows( 'featured_work' ) ) : while( have_rows( 'featured_work' ) ) : the_row();
		$id = get_sub_field( 'campaign' )->ID;
		$work[] = array(
			'campaign' => $id,
			'permalink' => get_the_permalink( $id ),
			'client' => get_the_title(get_field('client_name', $id)[0]),
			'campaign-title' => get_field( 'campaign_title', $id ),
			'campaign-image' => get_field('campaign_image', $id)['url'],
			'text-color' => get_sub_field('label_color')
		);
		
		
	endwhile; endif;
?>



<div class="row row-eq-height work-container">

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-one" style="background: url('<?php echo $work[0]['campaign-image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[0]['permalink']; ?>">
					<p>
						<span><?php echo $work[0]['client']; ?></span>
						<span style="color: <?php echo $work[0]['text-color']; ?>"><?php echo $work[0]['campaign-title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[0]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-sm" style="background: url('<?php echo $work[2]['campaign-image']; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[2]['permalink']; ?>">
					<p>
						<span><?php echo $work[2]['client']; ?>	</span>
						<span style="color: <?php echo $work[2]['text-color']; ?>"><?php echo $work[2]['campaign-title']; ?></span>	
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[2]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-two" style="background: url('<?php echo $work[1]['campaign-image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[1]['permalink']; ?>">
					<p>
						<span><?php echo $work[1]['client']; ?></span>
						<span style="color: <?php echo $work[1]['text-color']; ?>"><?php echo $work[1]['campaign-title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[1]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-lg" style="background: url('<?php echo $work[2]['campaign-image']; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[2]['permalink']; ?>">
					<p>
						<span><?php echo $work[2]['client']; ?></span>
						<span style="color: <?php echo $work[2]['text-color']; ?>"><?php echo $work[2]['campaign-title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[2]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-four" style="background: url('<?php echo $work[3]['campaign-image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[3]['permalink']; ?>">
					<p>
						<span><?php echo $work[3]['client']; ?></span>
						<span style="color: <?php echo $work[3]['text-color']; ?>"><?php echo $work[3]['campaign-title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[3]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-five" style="background: url('<?php echo $work[4]['campaign-image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo $work[4]['permalink']; ?>">
					<p>
						<span><?php echo $work[4]['client']; ?></span>
						<span style="color: <?php echo $work[4]['text-color']; ?>"><?php echo $work[4]['campaign-title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo $work[4]['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

</div>


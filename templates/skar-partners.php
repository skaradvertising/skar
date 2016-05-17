<?php
	if( have_rows( 'partners' ) ) :
?>
<div class="partners-container">
	<div class="container partners-wrapper">
		<div class="row partners-label"><span>Our Partners</span></div>
		<div class="row row-eq-height partners-content">

		<?php while( have_rows( 'partners' ) ) : the_row(); ?>

			<?php if( get_sub_field( 'logo' ) ) : $logo = get_sub_field( 'logo' ); ?>
				<?php if( get_sub_field( 'partner_url' ) ) : ?>

					<div class="partner"><a href="<?php the_sub_field( 'partner_url' ); ?>" target="_blank"><img src="<?php echo $logo['url']; ?>" data-toggle="tooltip" title="<?php the_sub_field( 'name' ); ?>"></a></div>

				<?php else : ?>
					<div class="partner"><img src="<?php echo $logo['url']; ?>" data-toggle="tooltip" title="<?php the_sub_field( 'name' ); ?>"></div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
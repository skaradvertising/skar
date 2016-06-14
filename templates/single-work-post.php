<?php /* work posts are client posts */ ?>
<div class="container-fluid single-client-container">
	<div class="row single-work-header">
		<h1><?php the_title(); ?></h1>
	</div>

	<?php get_template_part( 'templates/content', 'campaign-to-work' ); ?>
</div>
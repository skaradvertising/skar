<div class="container search-page-container">
	<?php get_template_part('templates/page', 'header'); ?>
	<?php get_search_form(); ?>
	<?php if (!have_posts()) : ?>
		<div class="alert alert-warning">
	    	<?php _e('Sorry, no results were found.', 'sage'); ?>
	  	</div>
	  	<?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/content', 'search'); ?>
	<?php endwhile; ?>

	<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
</div>
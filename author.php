<div class="container author-archive-container">
	<?php get_template_part('templates/page', 'header'); ?>

	<?php if (!have_posts()) : ?>
	  	<div class="alert alert-warning">
	    	<?php _e('Sorry, no results were found.', 'sage'); ?>
	  	</div>
	  	<?php get_search_form(); ?>
	<?php endif; ?>

	<?php while (have_posts()) : the_post(); ?>
	  	<?php get_template_part('templates/content', 'author'); ?>
	<?php endwhile; ?>

	<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
</div>
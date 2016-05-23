<?php while (have_posts()) : the_post(); ?>
<?php if( is_singular( 'post' ) ) : ?>
<?php get_template_part( 'templates/single', 'blog-post' ); ?>
<?php elseif( is_singular( 'industries' ) ) : ?>
<?php get_template_part( 'templates/single', 'industry-post' ); ?>
<?php elseif( is_singular( 'campaigns' ) ) : ?>
<?php get_template_part( 'templates/single', 'campaigns-post' ); ?>
<?php elseif( is_singular( 'work' ) ) : ?>
<?php get_template_part( 'templates/single', 'work-post' ); ?>
<?php else : ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endif; endwhile; ?>

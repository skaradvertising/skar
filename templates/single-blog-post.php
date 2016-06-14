<div class="single-blog container-fluid">

    <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-head">
	
    <?php // featured image in blog head
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
	?>
		<img class="img-responsive" src="<?php echo $src[0]; ?>">

    </section>

    <section class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-side">
    	<?php // get the first post category
    		$categories = get_the_category();
    		if( $categories ) {
    			$category = $categories[0]->name;
    			$category_link =  home_url() . '/' . $categories[0]->slug;
    		} else {
    			$category = 'SKAR';
    			$category_link = home_url();
    		}
    	?>
    	<div class="title-content">
	    	<h1 class="post-category"><?php echo $category; ?>:</h1>
	    	<h1 class="post-title"><?php the_title(); ?></h1>
	    </div>

    </section>

    <section class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content-side">
    	<article class="post-content">
    		<p><?php the_content(); ?></p>
    	</article>
    	<div class="post-social">
    		<p>Share</p>
    		<ul>
    			<li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to Facebook" ><img src="/wp-content/uploads/2016/05/facebook-icon-gray.png"></a></li>
    			<li><a href="http://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to Twitter"><img src="/wp-content/uploads/2016/05/twitter-icon-gray.png"></a></li>
    			<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to LinkedIn"><img src="/wp-content/uploads/2016/05/linkedin-icon-gray.png"></a></li>
    		</ul>
    	</div>
    </section>

</div>
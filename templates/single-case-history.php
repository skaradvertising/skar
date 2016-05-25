<div class="container single-case-history-container">

	<section class="row section-one">
		<img class="img-responsive" src="<?php echo get_field( 'big_logo' )['url']; ?>">
	</section>

	<section class="row section-two">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 case-history-title-side">
			<h2>Case Study:</h2>
			<h1><?php the_field( 'client_name' ); ?></h1>
			<h3><?php the_field( 'case_title' ); ?></h3>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 case-history-content-side">
			<div class="row challenge">
				<h4>The Challenge</h4>
				<?php the_field( 'challenge' ); ?>
			</div>
			<div class="row solution">
				<h4>The Solution</h4>
				<?php the_field( 'solution' ); ?>
			</div>
			<div class="row result">
				<h4>The Result</h4>
				<?php the_field( 'result' ); ?>
			</div>
		</div>
	</section>
	<section class="row social">
		<p>Share</p>
		<ul>
			<li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to Facebook" ><img src="/wp-content/uploads/2016/05/facebook-icon-gray.png"></a></li>
			<li><a href="http://twitter.com/intent/tweet?text=<?php echo get_the_title(); ?>&url=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to Twitter"><img src="/wp-content/uploads/2016/05/twitter-icon-gray.png"></a></li>
			<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="Share to LinkedIn"><img src="/wp-content/uploads/2016/05/linkedin-icon-gray.png"></a></li>
		</ul>
	</section>

</div>

<?php
    $args = array(
        'post_type' => 'industries',
        'posts_per_page' => -1,
        'order' => 'ASC'
    );

    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
?>

<div class="section-2-div-3">
    <div class="industry-row">
        
    <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="industry-wrapper col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="row">
                <div class="img-content">
                <?php 

                    $image = get_field('icon');

                    if( !empty($image) ): 
                ?>

                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

                <?php endif; ?>
                </div>
                <div class="text-content">
                    <p class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <p class="text-center"><?php the_field( 'tag_line' ); ?></p>
                </div>
            </div>      
        </div>
    <?php endwhile; ?>

    </div>
</div>
<?php endif; ?>
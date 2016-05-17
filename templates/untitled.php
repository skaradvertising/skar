if ( get_sub_field( 'featured' ) ) {
				if ( get_sub_field( 'order' ) ) { // if the post has an order, extract the fields, put in an array to be used to display on the page
					$value = get_sub_field('order');
					$title = get_sub_field( 'campaign_title' );
					if( get_sub_field('campaign_image') ) {
						$image = get_sub_field('campaign_image')['url'];
					} else {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' )[0];
					}
					$text_color = get_sub_field('campaign_color');
					
					switch ($value) {
						case 1:
							$one[] = $id;
							$one[] = $title;
							$one[] = $image;
							$one[] = $text_color;
							break;
						case 2:
							$two[] = $id;
							$two[] = $title;
							$two[] = $image;
							$two[] = $text_color;
							break;
						case 3:
							$three[] = $id;
							$three[] = $title;
							$three[] = $image;
							$three[] = $text_color;
							break;
						case 4:
							$four[] = $id;
							$four[] = $title;
							$four[] = $image;
							$four[] = $text_color;
							break;
						case 5:
							$five[] = $id;
							$five[] = $title;
							$five[] = $image;
							$five[] = $text_color;
							break;
					}

				}
			}
		endwhile; endif;
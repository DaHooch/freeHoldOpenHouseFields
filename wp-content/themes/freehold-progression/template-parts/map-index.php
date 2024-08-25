			<div class="map-progression-index-container">
				<div class="map-progression" <?php if (get_theme_mod( 'map_height_progression', '400px' )) : ?>style="height:<?php echo esc_attr(get_theme_mod('map_height_progression', '400px' )); ?>px;"<?php endif; ?>></div>
			</div>
			<div clsas="clearfix-pro"></div>
			<script type="text/javascript">
			jQuery(document).ready(function($) {
				 'use strict';
				 $(".map-progression").goMap({ 
					 markers: [
						 <?php while(have_posts()): the_post(); ?><?php if(get_post_meta($post->ID, 'pyre_full_address', true)) : ?>
						 {
							 address: "<?php echo esc_html( get_post_meta($post->ID, 'pyre_full_address', true) );?>", 
							 title: "<?php the_title(); ?>",
							icon:  <?php if(get_post_meta($post->ID, 'pyre_icon_image', true)) : ?>"<?php echo esc_html( get_post_meta($post->ID, 'pyre_icon_image', true) );?>"<?php else : ?>"<?php echo esc_attr( get_theme_mod( 'pyre_property_map_icon', get_template_directory_uri() . '/images/pin.png' ) ); ?>"<?php endif; ?>,
							 html: {content: '<div class="map-container-progression"><?php if(has_post_thumbnail()): ?><a href="<?php the_permalink(); ?>" class="map-image-progression"><?php the_post_thumbnail('progression-property-map'); ?></a><?php endif; ?><div class="content-map-progression"><?php if(get_post_meta($post->ID, 'pyre_address', true)) : ?><h2 class="property-title-pro"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta($post->ID, 'pyre_address', true) );?></a></h2><div class="progression-property-title-address-meta"><?php if(get_post_meta($post->ID, 'pyre_city', true)) : ?><span class="progression-property-title-meta-city"><?php echo esc_html( get_post_meta($post->ID, 'pyre_city', true) );?>, </span><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_state', true)) : ?><span class="progression-property-title-meta-state"><?php echo esc_html( get_post_meta($post->ID, 'pyre_state', true) );?>, </span><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_zip', true)) : ?><span class="progression-property-title-meta-zip"><?php echo esc_html( get_post_meta($post->ID, 'pyre_zip', true) );?></span><?php endif; ?></div><?php else: ?><h2 class="property-title-pro"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php endif; ?><div class="clearfix-pro"></div><?php if(get_post_meta($post->ID, 'pyre_price', true)) : ?><div class="price-index-pro"><?php get_template_part( 'template-parts/price', 'property'); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'recent') : ?><div class="overlay-status-pro recent-pro"><?php echo esc_html__( 'New', 'freehold-progression' ); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'reduced') : ?><div class="overlay-status-pro reduced-pro"><?php echo esc_html__( 'Reduced', 'freehold-progression' ); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'price-change') : ?><div class="overlay-status-pro reduced-pro"><?php echo esc_html__( 'Price Change', 'freehold-progression' ); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'open-house') : ?><div class="overlay-status-pro open-house-pro"><?php echo esc_html__( 'Open House', 'freehold-progression' ); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'sold') : ?><div class="overlay-status-pro sold-pro"><?php echo esc_html__( 'Sold', 'freehold-progression' ); ?></div><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_banner', true) == 'auction') : ?><div class="overlay-status-pro auction-pro"><?php echo esc_html__( 'Auction', 'freehold-progression' ); ?></div><?php endif; ?><div class="clearfix-pro"></div><ul class="property-meta-index-map-pro"><?php if(get_post_meta($post->ID, 'pyre_property_size', true)) : ?><li class="meta-size"><span><?php echo esc_html( get_post_meta($post->ID, 'pyre_property_size', true) );?></span> <?php echo wp_kses( __('FT<sup>2</sup>', 'freehold-progression' ) , TRUE); ?><?php if(get_post_meta($post->ID, 'pyre_bedrooms', true)) : ?><li class="meta-beds"><span><?php echo esc_html( get_post_meta($post->ID, 'pyre_bedrooms', true) );?></span> <?php echo esc_html__( 'Beds', 'freehold-progression' ); ?></li><?php endif; ?><?php if(get_post_meta($post->ID, 'pyre_bathrooms', true)) : ?><li class="meta-baths"><span><?php echo esc_html( get_post_meta($post->ID, 'pyre_bathrooms', true) );?></span> <?php echo esc_html__( 'Baths', 'freehold-progression' ); ?></li><?php endif; ?></li><?php endif; ?></ul></div><div class="clearfix-pro"></div></div>'}
						},
						<?php endif; ?><?php endwhile; ?>
					],
					scaleControl: true, 
					maptype: 'ROADMAP',
					scrollwheel: false, 
					zoom: <?php echo esc_attr(get_theme_mod('map_zoom_progression', 12)); ?>,
					address: '', //Over-ride map position
					disableDoubleClickZoom: false,
				 }); 
			});			
			</script>
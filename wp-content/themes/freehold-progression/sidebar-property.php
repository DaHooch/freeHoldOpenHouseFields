<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package pro
 * @since pro 1.0
 */

?>

<div class="sidebar sticky-sidebar-progression">
	
	<?php if( is_singular( 'property' ) ) : ?>
		<div id="progression-property-index-advanced-search" class="sidebar-item">
			<div class="sidebar-container-progression-studios">
				<h4 class="widget-title"><span><?php esc_html_e( 'Location & Information', 'freehold-progression' ); ?></span></h4>
				
				<?php get_template_part( 'template-parts/property/map', 'single' ); ?>
				
				
				<?php if(get_post_meta($post->ID, 'pyre_address', true)) : ?>
					<h2 class="progression-property-title"><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_post_meta($post->ID, 'pyre_address', true) );?></a></h2>
			
					<?php if(get_post_meta($post->ID, 'pyre_city', true) || get_post_meta($post->ID, 'pyre_state', true) || get_post_meta($post->ID, 'pyre_zip', true)) : ?>
					<div class="progression-property-title-address-meta">
				
						<?php if(get_post_meta($post->ID, 'pyre_city', true)) : ?>
							<span class="progression-property-title-meta-city"><?php echo esc_html( get_post_meta($post->ID, 'pyre_city', true) );?>, </span>
						<?php endif; ?>
						<?php if(get_post_meta($post->ID, 'pyre_state', true)) : ?>
							<span class="progression-property-title-meta-state"><?php echo esc_html( get_post_meta($post->ID, 'pyre_state', true) );?>, </span>
						<?php endif; ?>
						<?php if(get_post_meta($post->ID, 'pyre_zip', true)) : ?>
							<span class="progression-property-title-meta-zip"><?php echo esc_html( get_post_meta($post->ID, 'pyre_zip', true) );?></span>
						<?php endif; ?>
					</div><!-- close. property-title-address-meta-->
					<?php endif; ?>
			
				<?php else: ?>
					<h2 class="progression-property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php endif; ?>
				
				<?php if(get_post_meta($post->ID, 'pyre_price', true)) : ?>
					<div class="progression-property-index-price"><?php get_template_part( 'template-parts/price', 'property'); ?></div>
				<?php endif; ?>
				
				<ul class="property-post-meta-sidebar-list">
					<?php if(get_post_meta($post->ID, 'pyre_open_house_date', true)) : ?><li class="single-property-meta-listing-open-house"><span><?php esc_html_e( 'Open House: ', 'freehold-progression' ); ?></span><?php echo esc_html(date('F jS, Y', strtotime(get_post_meta($post->ID, 'pyre_open_house_date', true)))); ?><?php if(get_post_meta($post->ID, 'pyre_open_house_time', true)) : ?>&nbsp;-&nbsp;<?php echo esc_html(get_post_meta($post->ID, 'pyre_open_house_time', true)); ?><?php endif; ?></li><?php endif; ?>
					<?php if(get_post_meta($post->ID, 'pyre_bedrooms', true)) : ?><li class="single-property-meta-bedrooms"><span><?php esc_html_e( 'Bedrooms:', 'freehold-progression' ); ?> </span> <?php echo esc_html( get_post_meta($post->ID, 'pyre_bedrooms', true) );?></li><?php endif; ?>
					<?php if(get_post_meta($post->ID, 'pyre_bathrooms', true)) : ?><li class="single-property-meta-bathrooms"><span><?php esc_html_e( 'Bathrooms:', 'freehold-progression' ); ?> </span><?php echo esc_html( get_post_meta($post->ID, 'pyre_bathrooms', true) );?></li><?php endif; ?>
					
					<?php if(get_post_meta($post->ID, 'pyre_garage', true)) : ?><li class="single-property-meta-garage"><span><?php esc_html_e( 'Garage Spots:', 'freehold-progression' ); ?> </span> <?php echo esc_html( get_post_meta($post->ID, 'pyre_garage', true) );?></li><?php endif; ?>
					
					<?php if(get_post_meta($post->ID, 'pyre_property_size', true)) : ?><li class="single-property-meta-size"><span><?php esc_html_e( 'Size:', 'freehold-progression' ); ?> </span> <?php echo esc_html( get_post_meta($post->ID, 'pyre_property_size', true) );?> <?php echo wp_kses( __('FT<sup>2</sup>', 'freehold-progression' ) , TRUE); ?></li><?php endif; ?>
					
					<?php if(get_post_meta($post->ID, 'pyre_lot', true)) : ?><li class="single-property-meta-lot-size"><span><?php esc_html_e( 'Lot:', 'freehold-progression' ); ?> </span> <?php echo wp_kses( get_post_meta($post->ID, 'pyre_lot', true), true );?></li><?php endif; ?>
					
					
					<?php if(get_post_meta($post->ID, 'pyre_built', true)) : ?><li class="single-property-meta-listing-date"><span><?php esc_html_e( 'Built:', 'freehold-progression' ); ?> </span> <?php echo esc_html( get_post_meta($post->ID, 'pyre_built', true) );?></li><?php endif; ?>
						
					<?php if(get_post_meta($post->ID, 'pyre_zip', true)) : ?><li class="single-property-meta-lot-zip"><span><?php esc_html_e( 'Zip:', 'freehold-progression' ); ?> </span> <?php echo esc_html( get_post_meta($post->ID, 'pyre_zip', true) );?></li><?php endif; ?>
				</ul>
		
				<div class="clearfix-pro"></div>
				
				
			<div class="clearfix-pro"></div>
			</div><!-- close .sidebar-container-progression-studios -->
		</div><!-- close #progression-property-index-advanced-search -->
	<?php endif; ?>

	<?php if( ! is_singular( 'property' ) ) : ?>
		
		<div id="progression-property-index-advanced-search" class="sidebar-item">
			<div class="sidebar-container-progression-studios">
				<h4 class="widget-title"><span><?php esc_html_e( 'Advanced Search', 'freehold-progression' ); ?></span></h4>
				
				<?php $psearchurl = get_post_type_archive_link('property'); ?>
				
				<?php
				if(!isset($_GET['search_keyword'])) { $_GET['search_keyword'] = ''; }
				if(!isset($_GET['pstatus'])) { $_GET['pstatus'] = ''; }
				if(!isset($_GET['ptype'])) { $_GET['ptype'] = ''; }
				
				if(!isset($_GET['price-min'])) { $_GET['price-min'] = ''; }
				if(!isset($_GET['price-max'])) { $_GET['price-max'] = ''; }
				
				if(!isset($_GET['city'])) {	$_GET['city'] = ''; }
				if(!isset($_GET['state'])) { $_GET['state'] = ''; }
				if(!isset($_GET['zip'])) { $_GET['zip'] = ''; }
		
				if(!isset($_GET['beds'])) { $_GET['beds'] = ''; }
				if(!isset($_GET['baths'])) { $_GET['baths'] = ''; }
				if(!isset($_GET['sqft'])) { $_GET['sqft'] = ''; }

				?>
				
				<form method="get" class="advanced-searchform-property" action="<?php echo esc_url($psearchurl); ?>">
					<input type="hidden" name="post_type" value="property" />
					
					<?php if (get_theme_mod( 'progression_studios_property_search_address', 'display') == 'display') : ?>
					<div class="progression-property-search-field">
						<input type="text" class="search-field-progression" name="search_keyword" placeholder="<?php echo esc_html__( 'Enter an address...', 'freehold-progression' ); ?>" value="<?php echo esc_attr($_GET['search_keyword']); ?>" />
					</div><!-- close #progression-property-search-field -->
					<?php endif; ?>
					
					
					<?php if (get_theme_mod( 'progression_studios_property_search_status', 'display') == 'display') : ?>
					<?php $pstatus = get_terms('property_status'); if($pstatus): ?>
					<div class="property-status-progression search-field-progression">
						<select name="pstatus">
							<option value=""><?php echo esc_html__( 'Property Status', 'freehold-progression' ); ?></option>
							<?php foreach($pstatus as $ps): ?><option value="<?php echo esc_attr($ps->slug); ?>" <?php if($_GET['pstatus'] == $ps->slug ): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($ps->name); ?></option><?php endforeach; ?>
						</select>
					</div><!-- close .property-status-progression -->
					<?php endif; ?>
					<?php endif; ?>
					
					<?php if (get_theme_mod( 'progression_studios_property_search_type', 'display') == 'display') : ?>
					<?php $ptype = get_terms('property_type'); if($ptype): ?>
					<div class="property-type-progression search-field-progression">
						<select name="ptype">
							<option value=""><?php echo esc_html__( 'Property Type', 'freehold-progression' ); ?></option>
							<?php foreach($ptype as $pt): ?><option value="<?php echo esc_attr($pt->slug); ?>" <?php if($_GET['ptype'] == $pt->slug ): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($pt->name); ?></option><?php endforeach; ?>
						</select>
					</div><!-- close .property-type-progression -->
					<?php endif; ?>
					<?php endif; ?>
					
					
					<?php if (get_theme_mod( 'progression_studios_property_search_price', 'display') == 'display') : ?>
					<div class="search-sidebar-price-container-pro">
					<div class="price-min-progression search-field-progression">
						<span class="to-progression"><?php echo esc_html__( 'to', 'freehold-progression' ); ?></span>
						<select name="price-min">
							<option value=""><?php echo esc_html__( 'Any Price', 'freehold-progression' ); ?></option>
							<option value="1000" <?php if($_GET['price-min'] == '1000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,000', 'freehold-progression' ); ?></option>
							<option value="2000" <?php if($_GET['price-min'] == '2000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '2,000', 'freehold-progression' ); ?></option>
							<option value="5000" <?php if($_GET['price-min'] == '5000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '5,000', 'freehold-progression' ); ?></option>
							<option value="10000" <?php if($_GET['price-min'] == '10000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '10,000', 'freehold-progression' ); ?></option>
							<option value="50000" <?php if($_GET['price-min'] == '50000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '50,000', 'freehold-progression' ); ?></option>
							<option value="100000" <?php if($_GET['price-min'] == '100000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '100,000', 'freehold-progression' ); ?></option>
							<option value="150000" <?php if($_GET['price-min'] == '150000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '150,000', 'freehold-progression' ); ?></option>
							<option value="200000" <?php if($_GET['price-min'] == '200000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '200,000', 'freehold-progression' ); ?></option>
							<option value="250000" <?php if($_GET['price-min'] == '250000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '250,000', 'freehold-progression' ); ?></option>
							<option value="300000" <?php if($_GET['price-min'] == '300000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '300,000', 'freehold-progression' ); ?></option>
							<option value="350000" <?php if($_GET['price-min'] == '350000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '350,000', 'freehold-progression' ); ?></option>
							<option value="400000" <?php if($_GET['price-min'] == '400000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '400,000', 'freehold-progression' ); ?></option>
							<option value="500000" <?php if($_GET['price-min'] == '500000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '500,000', 'freehold-progression' ); ?></option>
							<option value="600000" <?php if($_GET['price-min'] == '600000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '600,000', 'freehold-progression' ); ?></option>
							<option value="700000" <?php if($_GET['price-min'] == '700000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '700,000', 'freehold-progression' ); ?></option>
							<option value="800000" <?php if($_GET['price-min'] == '800000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '800,000', 'freehold-progression' ); ?></option>
							<option value="900000" <?php if($_GET['price-min'] == '900000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '900,000', 'freehold-progression' ); ?></option>
							<option value="1000000" <?php if($_GET['price-min'] == '1000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,000,000', 'freehold-progression' ); ?></option>
							<option value="1500000" <?php if($_GET['price-min'] == '1500000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,500,000', 'freehold-progression' ); ?></option>
							<option value="2000000" <?php if($_GET['price-min'] == '2000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '2,000,000', 'freehold-progression' ); ?></option>
							<option value="5000000" <?php if($_GET['price-min'] == '5000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '5,000,000', 'freehold-progression' ); ?></option>
							<option value="10000000" <?php if($_GET['price-min'] == '10000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '10,000,000', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close .price-min-progression -->
			
					<div class="price-max-progression search-field-progression">
						<select name="price-max">
							<option value=""><?php echo esc_html__( 'Any Price', 'freehold-progression' ); ?></option>
							<option value="1000" <?php if($_GET['price-max'] == '1000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,000', 'freehold-progression' ); ?></option>
							<option value="2000" <?php if($_GET['price-max'] == '2000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '2,000', 'freehold-progression' ); ?></option>
							<option value="5000" <?php if($_GET['price-max'] == '5000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '5,000', 'freehold-progression' ); ?></option>
							<option value="10000" <?php if($_GET['price-max'] == '10000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '10,000', 'freehold-progression' ); ?></option>
							<option value="50000" <?php if($_GET['price-max'] == '50000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '50,000', 'freehold-progression' ); ?></option>
							<option value="100000" <?php if($_GET['price-max'] == '100000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '100,000', 'freehold-progression' ); ?></option>
							<option value="150000" <?php if($_GET['price-max'] == '150000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '150,000', 'freehold-progression' ); ?></option>
							<option value="200000" <?php if($_GET['price-max'] == '200000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '200,000', 'freehold-progression' ); ?></option>
							<option value="250000" <?php if($_GET['price-max'] == '250000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '250,000', 'freehold-progression' ); ?></option>
							<option value="300000" <?php if($_GET['price-max'] == '300000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '300,000', 'freehold-progression' ); ?></option>
							<option value="350000" <?php if($_GET['price-max'] == '350000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '350,000', 'freehold-progression' ); ?></option>
							<option value="400000" <?php if($_GET['price-max'] == '400000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '400,000', 'freehold-progression' ); ?></option>
							<option value="500000" <?php if($_GET['price-max'] == '500000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '500,000', 'freehold-progression' ); ?></option>
							<option value="600000" <?php if($_GET['price-max'] == '600000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '600,000', 'freehold-progression' ); ?></option>
							<option value="700000" <?php if($_GET['price-max'] == '700000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '700,000', 'freehold-progression' ); ?></option>
							<option value="800000" <?php if($_GET['price-max'] == '800000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '800,000', 'freehold-progression' ); ?></option>
							<option value="900000" <?php if($_GET['price-max'] == '900000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '900,000', 'freehold-progression' ); ?></option>
							<option value="1000000" <?php if($_GET['price-max'] == '1000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,000,000', 'freehold-progression' ); ?></option>
							<option value="1500000" <?php if($_GET['price-max'] == '1500000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '1,500,000', 'freehold-progression' ); ?></option>
							<option value="2000000" <?php if($_GET['price-max'] == '2000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '2,000,000', 'freehold-progression' ); ?></option>
							<option value="5000000" <?php if($_GET['price-max'] == '5000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '5,000,000', 'freehold-progression' ); ?></option>
							<option value="10000000" <?php if($_GET['price-max'] == '10000000'): ?>selected="selected"<?php endif; ?>><?php echo esc_attr(get_theme_mod('avlar_currency_pro', '$')); ?><?php echo esc_html__( '10,000,000', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close .price-max-progression -->
					</div><!-- close .arch-sidebar-price-container-pro -->
					<div class="clearfix-pro"></div>
					<?php endif; ?>
					
					
					<?php
					$query_for_search = new WP_Query(array( 'post_type' => 'property', 'posts_per_page' => 99, ));
					while($query_for_search->have_posts()): $query_for_search->the_post();
						if(get_post_meta(get_the_ID(), 'pyre_city', true)): $city[] = get_post_meta(get_the_ID(), 'pyre_city', true); endif;
						if(get_post_meta(get_the_ID(), 'pyre_state', true)): $state[] = get_post_meta(get_the_ID(), 'pyre_state', true); endif;
						if(get_post_meta(get_the_ID(), 'pyre_zip', true)): $zip[] = get_post_meta(get_the_ID(), 'pyre_zip', true); endif;
						if(isset($city)) { if($city) { $city = array_unique($city); } }
						if(isset($state)) { if($state) { $state = array_unique($state); } }
						if(isset($zip)) { if($zip) { $zip = array_unique($zip); } }
					endwhile;
					?>
					
					<?php if (get_theme_mod( 'progression_studios_property_search_city', 'display') == 'display') : ?>
					<?php if($city): ?>
					<div class="city-progression search-field-progression">
						<select name="city"> 
							<option value="" selected="selected"><?php echo esc_html__( 'City', 'freehold-progression' ); ?></option> 
							<?php foreach($city as $c): ?>
							<option value="<?php echo esc_attr($c); ?>" <?php if($_GET['city'] == $c): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($c); ?></option>
							<?php endforeach; ?> 
						</select>
					</div>
					<?php endif; ?>
					<?php endif; ?>
					
					
					<?php if (get_theme_mod( 'progression_studios_property_search_state', 'display') == 'display') : ?>
					<?php if($state): ?>
					<div class="state-progression search-field-progression">
						<select name="state"> 
							<option value="" selected="selected"><?php echo esc_html__( 'State', 'freehold-progression' ); ?></option> 
							<?php foreach($state as $s): ?>
							<option value="<?php echo esc_attr($s); ?>" <?php if($_GET['state'] == $s): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($s); ?></option>
							<?php endforeach; ?> 
						</select>
					</div>
					<?php endif; ?>
					<?php endif; ?>
					
					
					<?php if (get_theme_mod( 'progression_studios_property_search_zip', 'display') == 'display') : ?>
					<?php if($zip): ?>
					<div class="zip-progression search-field-progression">
						<select name="zip"> 
							<option value="" selected="selected"><?php echo esc_html__( 'Zip', 'freehold-progression' ); ?></option> 
							<?php foreach($zip as $z): ?>
							<option value="<?php echo esc_attr($z); ?>" <?php if($_GET['zip'] == $z): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($z); ?></option>
							<?php endforeach; ?> 
						</select>
					</div>
					<?php endif; ?>
					<?php endif; ?>
					
					<?php if (get_theme_mod( 'progression_studios_property_search_beds', 'display') == 'display') : ?>
					<div class="property-beds-progression search-field-progression">
						<select name="beds">
							<option value=""><?php echo esc_html__( 'Beds', 'freehold-progression' ); ?></option>
							<option value="1" <?php if($_GET['beds'] == '1'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '1+ Bed', 'freehold-progression' ); ?></option>
							<option value="2" <?php if($_GET['beds'] == '2'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '2+ Beds', 'freehold-progression' ); ?></option>
							<option value="3" <?php if($_GET['beds'] == '3'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '3+ Beds', 'freehold-progression' ); ?></option>
							<option value="4" <?php if($_GET['beds'] == '4'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '4+ Beds', 'freehold-progression' ); ?></option>
							<option value="5" <?php if($_GET['beds'] == '5'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '5+ Beds', 'freehold-progression' ); ?></option>
							<option value="6" <?php if($_GET['beds'] == '6'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '6+ Beds', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close .property-beds-progression -->
					<?php endif; ?>
					
					<?php if (get_theme_mod( 'progression_studios_property_search_baths', 'display') == 'display') : ?>
					<div class="property-baths-progression search-field-progression">
						<select name="baths">
							<option value=""><?php echo esc_html__( 'Baths', 'freehold-progression' ); ?></option>
							<option value="1" <?php if($_GET['baths'] == '1'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '1+ Bath', 'freehold-progression' ); ?></option>
							<option value="2" <?php if($_GET['baths'] == '2'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '2+ Baths', 'freehold-progression' ); ?></option>
							<option value="3" <?php if($_GET['baths'] == '3'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '3+ Baths', 'freehold-progression' ); ?></option>
							<option value="4" <?php if($_GET['baths'] == '4'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '4+ Baths', 'freehold-progression' ); ?></option>
							<option value="5" <?php if($_GET['baths'] == '5'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '5+ Baths', 'freehold-progression' ); ?></option>
							<option value="6" <?php if($_GET['baths'] == '6'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '6+ Baths', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close .property-baths-progression -->
					<div class="clearfix-pro"></div>
					<?php endif; ?>
					
					
					<?php if (get_theme_mod( 'progression_studios_property_search_size', 'display') == 'display') : ?>
					<div class="property-sqft-progression search-field-progression">
						<select name="sqft">
							<option value=""><?php echo esc_html__( 'Property Size', 'freehold-progression' ); ?></option>
							<option value="250" <?php if($_GET['sqft'] == '250'): ?>selected="selected"<?php endif; ?>>250+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="500" <?php if($_GET['sqft'] == '500'): ?>selected="selected"<?php endif; ?>>500+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="1000" <?php if($_GET['sqft'] == '1000'): ?>selected="selected"<?php endif; ?>>1000+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="1250" <?php if($_GET['sqft'] == '1250'): ?>selected="selected"<?php endif; ?>>1250+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="1500" <?php if($_GET['sqft'] == '1500'): ?>selected="selected"<?php endif; ?>>1500+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="2000" <?php if($_GET['sqft'] == '2000'): ?>selected="selected"<?php endif; ?>>2000+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="2500" <?php if($_GET['sqft'] == '2500'): ?>selected="selected"<?php endif; ?>>2500+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="3000" <?php if($_GET['sqft'] == '3000'): ?>selected="selected"<?php endif; ?>>3000+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="3500" <?php if($_GET['sqft'] == '2000'): ?>selected="selected"<?php endif; ?>>3500+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="4000" <?php if($_GET['sqft'] == '4000'): ?>selected="selected"<?php endif; ?>>4000+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>
							<option value="4500" <?php if($_GET['sqft'] == '4500'): ?>selected="selected"<?php endif; ?>>4500+ <?php echo wp_kses( __('FT2', 'freehold-progression' ) , TRUE); ?></option>

						</select>
					</div><!-- close .property-sqft-progression -->
					<?php endif; ?>
			
					<div class="clearfix-pro"></div>
					
					
					
					<input type="submit" class="submit-search-pro" name="submit" value="<?php echo esc_html__( 'Search', 'freehold-progression' ); ?>" />
				</form>
				
				<div class="clearfix-pro"></div>
			</div><!-- close .sidebar-container-progression-studios -->
		</div><!-- close #progression-property-index-advanced-search -->

	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'progression-studios-sidebar-property-index' ) ) : ?>
		<?php dynamic_sidebar( 'progression-studios-sidebar-property-index' ); ?>
	<?php endif; ?>

</div><!-- close .sidebar -->
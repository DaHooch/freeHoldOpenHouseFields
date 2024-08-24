<div id="freehold-progression-header-search-container" class="noselect">
	<div class="width-container-pro">
		<?php		
		$psearchurl = get_post_type_archive_link('property');
		if(!isset($_GET['search_keyword'])) { $_GET['search_keyword'] = ''; }
		
		if(!isset($_GET['pstatus'])) { $_GET['pstatus'] = ''; }
		if(!isset($_GET['ptype'])) { $_GET['ptype'] = ''; }
		
		if(!isset($_GET['price-min'])) { $_GET['price-min'] = ''; }
		if(!isset($_GET['price-max'])) { $_GET['price-max'] = ''; }

		if(!isset($_GET['beds'])) { $_GET['beds'] = ''; }
		if(!isset($_GET['baths'])) { $_GET['baths'] = ''; }
		?>
		<form method="get" class="header-advanced-searchform-property" action="<?php echo esc_url($psearchurl); ?>">
			<input type="hidden" name="post_type" value="property" />
			
			<div id="header-progression-property-search-field">
				<label for="header-search-field-progression" class="progression-studios-header-search-assistive-text"><i class="fa fa-search" aria-hidden="true"></i></label>
				<input type="text" id="header-search-field-progression" name="search_keyword" placeholder="<?php echo esc_html__( 'Enter an address, zip code or city...', 'freehold-progression' ); ?>" value="<?php echo esc_attr($_GET['search_keyword']); ?>" />
				
				<input type="submit" id="header-submit-search-pro" name="submit" value="<?php echo esc_html__( 'Search', 'freehold-progression' ); ?>" />
				<div class="clearfix-pro"></div>
				
			</div><!-- close #header-progression-property-search-field -->
			
			
			
			<div id="header-progression-search-expanded-container">
				
				<div id="header-search-price-container-pro">
				<div id="header-price-min-progression">
					<span class="header-to-progression"><?php echo esc_html__( 'to', 'freehold-progression' ); ?></span>
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
		
				<div id="header-price-max-progression">
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
				</div><!-- close #header-max-progression -->
				<div class="clearfix-pro"></div>
				</div><!-- close #header-search-price-container-pro -->
				
				
				<div id="header-property-beds-baths-container">
					<div id="header-property-beds-progression">
						<select name="beds">
							<option value=""><?php echo esc_html__( 'Beds', 'freehold-progression' ); ?></option>
							<option value="1" <?php if($_GET['beds'] == '1'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '1+ Bed', 'freehold-progression' ); ?></option>
							<option value="2" <?php if($_GET['beds'] == '2'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '2+ Beds', 'freehold-progression' ); ?></option>
							<option value="3" <?php if($_GET['beds'] == '3'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '3+ Beds', 'freehold-progression' ); ?></option>
							<option value="4" <?php if($_GET['beds'] == '4'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '4+ Beds', 'freehold-progression' ); ?></option>
							<option value="5" <?php if($_GET['beds'] == '5'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '5+ Beds', 'freehold-progression' ); ?></option>
							<option value="6" <?php if($_GET['beds'] == '6'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '6+ Beds', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close #header-property-beds-progression -->
				
					<div id="header-property-baths-progression">
						<select name="baths">
							<option value=""><?php echo esc_html__( 'Baths', 'freehold-progression' ); ?></option>
							<option value="1" <?php if($_GET['baths'] == '1'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '1+ Bath', 'freehold-progression' ); ?></option>
							<option value="2" <?php if($_GET['baths'] == '2'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '2+ Baths', 'freehold-progression' ); ?></option>
							<option value="3" <?php if($_GET['baths'] == '3'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '3+ Baths', 'freehold-progression' ); ?></option>
							<option value="4" <?php if($_GET['baths'] == '4'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '4+ Baths', 'freehold-progression' ); ?></option>
							<option value="5" <?php if($_GET['baths'] == '5'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '5+ Baths', 'freehold-progression' ); ?></option>
							<option value="6" <?php if($_GET['baths'] == '6'): ?>selected="selected"<?php endif; ?>><?php echo esc_html__( '6+ Baths', 'freehold-progression' ); ?></option>
						</select>
					</div><!-- close #header-property-baths-progression -->
					<div class="clearfix-pro"></div>
				</div><!-- close #header-property-beds-baths-container -->
				
				
				
				<?php $pstatus = get_terms('property_status'); if($pstatus): ?>
				<div id="header-property-status-progression">
					<select name="pstatus">
						<option value=""><?php echo esc_html__( 'Property Status', 'freehold-progression' ); ?></option>
						<?php foreach($pstatus as $ps): ?><option value="<?php echo esc_attr($ps->slug); ?>" <?php if($_GET['pstatus'] == $ps->slug ): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($ps->name); ?></option><?php endforeach; ?>
					</select>
				</div><!-- close #header-property-status-progression -->
				<?php endif; ?>
				
				
				<?php $ptype = get_terms('property_type'); if($ptype): ?>
				<div id="header-property-type-progression">
					<select name="ptype">
						<option value=""><?php echo esc_html__( 'Property Type', 'freehold-progression' ); ?></option>
						<?php foreach($ptype as $pt): ?><option value="<?php echo esc_attr($pt->slug); ?>" <?php if($_GET['ptype'] == $pt->slug ): ?>selected="selected"<?php endif; ?>><?php echo esc_attr($pt->name); ?></option><?php endforeach; ?>
					</select>
				</div><!-- close #header-property-type-progression -->
				<?php endif; ?>
				
				
				<div class="clearfix-pro"></div>
				<a href="<?php echo esc_url($psearchurl); ?>" id="progression-header-more-search-options-text"><?php echo esc_html__( 'More search options', 'freehold-progression' ); ?></a>
				<div class="clearfix-pro"></div>
			</div><!-- close #header-progression-search-expanded-container -->
			

		</form>

		<div id="progression-header-more-search-btn"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
		
		
		<div class="clearfix-pro"></div>
	</div><!-- close .width-container-pro -->
</div><!-- close #freehold-progression-header-search-container -->
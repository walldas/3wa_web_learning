<?php
	global $font_list;
	$social_array = array(
		'rss',
		'behance',
		'bitbucket',
		'codepen',
		'delicious',
		'deviantart',
		'digg',
		'dribbble',
		'dropbox',
		'drupal',
		'facebook',
		'flickr',
		'foursquare',
		'git',
		'github',
		'gittip',
		'google-plus',
		'hacker-news',
		'instagram',
		'joomla',
		'jsfiddle',
		'linkedin',
		'maxcdn',
		'openid',
		'pinterest',
		'reddit',
		'share-alt',
		'soundcloud',
		'spotify',
		'stack-exchange',
		'stack-overflow',
		'stumbleupon',
		'tumblr',
		'twitter',
		'vimeo',
		'vine',
		'vk',
		'weibo',
		'weixin',
		'wordpress',
		'xing',
		'yahoo',
		'youtube',
	);
	//load color functions
	if($_POST){
		global $wpdb;
		//Main options
		$main_option_array = array(
			'logo_url' 					=> check_post('logo_url'),
			'logo_retina_url' 			=> check_post('logo_retina_url'),
			'logo_retina_width' 		=> check_post('logo_retina_width'),
			'logo_retina_height' 		=> check_post('logo_retina_height'),
			'favicon_url' 				=> check_post('favicon_url'),
			'copyright' 				=> check_post('copyright'),
			'tracking_code' 			=> check_post('tracking_code'),
			'custom_js' 				=> check_post('custom_js'),
			'custom_css' 				=> check_post('custom_css'),
		);
		update_option( 'wope-main', $main_option_array);
		
		//post options
		$post_option_array = array(
			'relative_post' 		=> check_post('relative_post'),
			'relative_post_number' 	=> check_post('relative_post_number')
		);
		update_option( 'wope-post', $post_option_array);
		
		//sidebar options
		$sidebar_option_array = array(
			'index-sidebar' 		=> check_post('index-sidebar'),
			'single-sidebar' 		=> check_post('single-sidebar'),
			'archive-sidebar' 		=> check_post('archive-sidebar'),
			'category-sidebar' 		=> check_post('category-sidebar'),
			'author-sidebar' 		=> check_post('author-sidebar'),
			'tag-sidebar' 			=> check_post('tag-sidebar'),
			'search-sidebar' 		=> check_post('search-sidebar'),
		);
		update_option( 'wope-sidebar', $sidebar_option_array);
		
		//Socials options
		$social_option_array = array();
		foreach($social_array as $each_social){
			$social_option_array[$each_social] =  check_post('social-'.$each_social);
		}
		update_option( 'wope-social', $social_option_array);
		
		//update font set
		$font_option_array = array(
			'font_menu' => check_post('font_menu'),
			'font_heading' => check_post('font_heading'),
			'font_body' => check_post('font_body'),
		);
		update_option( 'wope-font', $font_option_array);
		
		
		$font_options = get_option('wope-font');
		global $font_menu;
		global $font_heading;
		global $font_body;
		$font_menu 		= $font_options['font_menu'];
		$font_heading 	= $font_options['font_heading'];
		$font_body 		= $font_options['font_body'];
		get_template_part('lib'.DS."font_pattern");
		
		//update color
		$color_option_array = array(
			'main-color' 	=> check_post('main-color'),
		);
		update_option( 'wope-color', $color_option_array);
		
		//add new color css file
		$color_options = get_option('wope-color');
		global $main_color;
		$main_color 		= $color_options['main-color'];
		get_template_part('lib'.DS."color_pattern");
		
		$msg = "Settings saved.";
		
	}
	 	
	
	$main_option = get_option('wope-main');
	
	$social_option = get_option('wope-social');
	$post_option = get_option('wope-post');
	$portfolio_options = get_option('wope-portfolio');
	$sidebar_options = get_option('wope-sidebar');
	$font_options = get_option('wope-font');
	
	$unique_font_option = array_unique($font_options);
	foreach($unique_font_option as $each_font){
		if($key = array_key_exists($each_font,$font_list)){
			wp_register_style( 'wope-gfont-'.$each_font,'http://fonts.googleapis.com/css?family='.$font_list[$each_font][1]);
			wp_enqueue_style('wope-gfont-'.$each_font);
		}
	}
	
	$color_options = get_option('wope-color');
	
	
	//sidebar
	$sidebar = array(
		'index-sidebar' 	=> 'Index Sidebar',
		'single-sidebar' 	=> 'Single Sidebar',
		'archive-sidebar' 	=> 'Archive Sidebar',
		'category-sidebar' 	=> 'Category Sidebar',
		'author-sidebar' 	=> 'Author Sidebar',
		'tag-sidebar' 		=> 'Tag Sidebar',
		'search-sidebar' 	=> 'Search Sidebar',
	);
	
	function sidebar_selector($sidebar,$current,$select_name){
		?>
			<select name="<?php echo $select_name;?>">
		<?php
			foreach($sidebar as $key => $each_sidebar){
				if($current == $key){
		?>
					<option selected="selected" value="<?php echo $key;?>"><?php echo $each_sidebar;?></option>
		<?php	
				}else{
		?>
					<option value="<?php echo $key;?>"><?php echo $each_sidebar;?></option>
		<?php
				}
			}
		?>
			</select>
		<?php
	}

?>
<form action="" id="wope_option_form" method="post">
	<div class="wrap">
		
		<div class="admin-logo">
			JudyBlog
		</div>
		
		<div id="option-area">
			<div id="option-tab-buttons">
				<div class="tab-current" id="option-tab-main">
					<a href="#main">Main</a> 
				</div>
				<div id="option-tab-sidebar">
					<a href="#sidebar">Sidebar </a> 
				</div>
				<div id="option-tab-color">
					<a href="#color">Color Scheme</a> 
				</div>
				<div id="option-tab-font">
					<a href="#font">Typography</a> 
				</div>
				<div id="option-tab-blog">
					<a href="#blog">Blog </a> 
				</div>
				<div id="option-tab-social">
					<a href="#social">Social </a> 
				</div>
			</div>
			<div id="option-tab-container">
				<div class="option-section-white">
					<?php if(isset($msg)){?>
						<div class="input-section">
							<div class="msg">
								<?php echo $msg;?>
							</div>
						</div>
					<?php }?>
					<button class="form-submit-button button button-primary button-large" > Save Changes </button>
				</div>
					
				<div class="option-tab tab-current" id="option-tab-main-content">
					<div class="option-tab-title">General Options</div>
					<div class="option-section">
						<div class="option-section-title">Site Logo</div>
						<div class="column2">
							<input class="upload_field" type="text" size="36" name="logo_url" value="<?php echo $main_option['logo_url'];?>" />
							<input class="button upload_button" type="button" value="Upload Image" />
							<span class="button red-button remove_image">Remove Image</span>
						</div>
						<div class="column2 column_last">
							<img class="uploaded_image" src="<?php echo $main_option['logo_url'];?>">
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Site Retina Logo</div>
						<div class="column2">
							<input class="upload_field_width" type="text" size="36" name="logo_retina_width" value="<?php echo $main_option['logo_retina_width'];?>" />
							<input class="upload_field_height" type="text" size="36" name="logo_retina_height" value="<?php echo $main_option['logo_retina_height'];?>" />
							<input class="upload_field" type="text" size="36" name="logo_retina_url" value="<?php echo $main_option['logo_retina_url'];?>" />
							<input class="button upload_button" type="button" value="Upload Image" />
							<span class="button red-button remove_image">Remove Image</span>
							
						</div>
						<div class="column2 column_last">
							<img class="uploaded_image" src="<?php echo $main_option['logo_retina_url'];?>">
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Favicon</div>
						<div class="column2">
							<input class="upload_field" type="text" size="36" name="favicon_url" value="<?php echo $main_option['favicon_url'];?>" />
							<input class="button upload_button" type="button" value="Upload Image" />
							<span class="button red-button remove_image">Remove Image</span>
						</div>
						<div class="column2 column_last">
						<?php if(isset($main_option['favicon_url'])){?>
							<img class="uploaded_image" src="<?php echo $main_option['favicon_url'];?>">
						<?php }?>
						</div>
						<div class="cleared"></div>
		
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Tracking Code</div>
						<div class="column2">
							<textarea rows="5" name="tracking_code" class="normal_textarea"><?php echo $main_option['tracking_code'];?></textarea>
						</div>
						<div class="column2 column_last">
							<div class="help">The Tracking Code to include after &lt;/BODY&gt; such as Google Analytics... ect</div>
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Custom Javascript</div>
						<div class="column2">
							<textarea rows="5" name="custom_js" class="normal_textarea"><?php echo $main_option['custom_js'];?></textarea>
						</div>
						<div class="column2 column_last">
							<div class="help">The Custom Javascript to include before &lt;/HEAD&gt; </div>
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Custom Style</div>
						<div class="column2">
							<textarea rows="5" name="custom_css" class="normal_textarea"><?php echo $main_option['custom_css'];?></textarea>
						</div>
						<div class="column2 column_last">
							<div class="help">The Custom CSS to include before &lt;/HEAD&gt; </div>
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-tab-title">Footer Options</div>
	
					<div class="option-section">
						<div class="option-section-title">Copyright Info</div>
						<?php wp_editor( $main_option['copyright'], 'copyright_editor', $settings = array( 'textarea_rows' => 8, 'textarea_name' => 'copyright') ); ?>
					</div>
					
					
					
				</div>
				<div class="option-tab" id="option-tab-sidebar-content">
					
					<div class="option-tab-title">Sidebar Options</div>
					
					<?php $standard_sidebar = array(
						0 => array(
							'name' => 'Index',
							'id' => 'index-sidebar',
						),
						1 => array(
							'name' => 'Single',
							'id' => 'single-sidebar',
						),
						2 => array(
							'name' => 'Archive',
							'id' => 'archive-sidebar',
						),
						3 => array(
							'name' => 'Category',
							'id' => 'category-sidebar',
						),
						4 => array(
							'name' => 'Author',
							'id' => 'author-sidebar',
						),
						5 => array(
							'name' => 'Tag',
							'id' => 'tag-sidebar',
						),
						6 => array(
							'name' => 'Search',
							'id' => 'search-sidebar',
						)
					);	?>
					
					<?php 
					$sidebar_count = 1;
					$sidebar_end = false;
					foreach($standard_sidebar as $each_sidebar){
						if($sidebar_end == false){
							$sidebar_end = true;
							$before_html = '<div class="option-section"><div class="column2">';
							$after_html = '</div>';
						}else{
							$sidebar_end = false;
							$before_html = '<div class="column2 column_last">';
							$after_html = '</div><div class="cleared"></div></div>';
						}
						
						if($sidebar_count == count($standard_sidebar)){
							
							$before_html = '<div class="option-section"><div class="column2">';
							$after_html = '</div><div class="cleared"></div></div>';
						}
						
						$sidebar_count ++;
					?>
						<?php echo $before_html;?>
							<h3><?php echo $each_sidebar['name'];?></h3>
							<?php sidebar_selector($sidebar,$sidebar_options[$each_sidebar['id']],$each_sidebar['id']);?>
						<?php echo $after_html;?>
					<?php }?>
				</div>
				<div class="option-tab" id="option-tab-color-content">
					<div class="option-tab-title">Color Scheme Options</div>
					<div class="option-section">
						<div class="column4">
							<div class="option-section-title">Main Color</div>
							<input id="main-color" class="color-picker" name="main-color" style="width:60px"  type="text" value="<?php echo $color_options['main-color'];?>" />
						</div>
						<div class="cleared"></div>
					</div>
					
					<div class="option-section">
						<div class="option-section-title">Predefined Color Schemes</div>
						
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#00a68e;">00a68e</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#4caee6;">4caee6</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#f28293;">f28293</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#8ad378;">8ad378</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#a48cd1;">a48cd1</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#e16158;">e16158</span>
						</div>
					
						<div class="color-scheme">
							<span class="main-code" style="background-color:#3272b0;">3272b0</span>
						</div>
						<div class="color-scheme">
							<span class="main-code" style="background-color:#fc7330;">fc7330</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#4caee6;">4caee6</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#e74c3c;">e74c3c</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#d06cc5;">d06cc5</span>
						</div>
						
						<div class="color-scheme">
							<span class="main-code" style="background-color:#8dcc44;">8dcc44</span>
						</div>
						
						<div class="cleared"></div>
					</div>
				</div>
				<div class="option-tab" id="option-tab-font-content">
					<div class="option-tab-title">Typography Options</div>
					<div class="option-section">
					
						<div class="column2">
							<div class="option-section-title">Menu Font</div>
							<select class="font_selector" name="font_menu">
								<?php foreach($font_list as $each_font){?>
									<?php if($each_font[0] == $font_options['font_menu']){?>
										<option value="<?php echo $each_font[0];?>" selected="selected"><?php echo $each_font[0];?></option>
									<?php }else{?>
										<option value="<?php echo $each_font[0];?>" ><?php echo $each_font[0];?></option>
									<?php }?>
								<?php }?>
							</select>
							<textarea class="normal_textarea font_textarea menu_font_textarea" style="font-family:<?php echo $font_options['font_menu'];?>;" rows="5" id="font_body_text">HOME ABOUT  PORTFOLIO BLOG CONTACT</textarea>
						</div>
						
						<div class="column2 column_last">
							<div class="option-section-title">Heading Font</div>
							<select id="font_body" class="font_selector" name="font_heading">
								<?php foreach($font_list as $each_font){?>
									<?php if($each_font[0] == $font_options['font_heading']){?>
										<option value="<?php echo $each_font[0];?>" selected="selected"><?php echo $each_font[0];?></option>
									<?php }else{?>
										<option value="<?php echo $each_font[0];?>" ><?php echo $each_font[0];?></option>
									<?php }?>
								<?php }?>
							</select>
							<textarea class="normal_textarea font_textarea heading_font_textarea" style="font-family:<?php echo $font_options['font_heading'];?>;" rows="5" id="font_body_text">RECENT WORKS RECENT POSTS GALLERY LIGHTBOX MEET THE TEAM TESTIMONIAL GRID TYPOGRAPHY</textarea>
						</div>
						<div class="cleared"></div>
	
						<div>
							<div class="option-section-title">Body Font</div>
							<select class="font_selector" name="font_body">
								<?php foreach($font_list as $each_font){?>
									<?php if($each_font[0] == $font_options['font_body']){?>
										<option value="<?php echo $each_font[0];?>" selected="selected"><?php echo $each_font[0];?></option>
									<?php }else{?>
										<option value="<?php echo $each_font[0];?>" ><?php echo $each_font[0];?></option>
									<?php }?>
								<?php }?>
							</select>
							<textarea class="normal_textarea font_textarea body_font_textarea" style="font-family:<?php echo $font_options['font_body'];?>;" rows="5" id="font_body_text">Eu duo alia commune, partem molestiae at duo, id stet facilisi has.Ex veri nonumy vix, volumus ancillae similique ea quo. Eruditi luptatum mea ne, habeo dolorum vituperatoribus ex mea.Probo dolores lobortis an duo. Usu quod gubergren ullamcorper ad.Timeam detracto ad sit, ornatus indoctum usu at.</textarea>
						</div>
						
						<div class="cleared"></div>
					</div>
		
				</div>
				
				<div class="option-tab" id="option-tab-blog-content">
					<div class="option-tab-title">Blog Options</div>
					
					<div class="option-section">
						<div class="column2">
							<div class="option-section-title">Relative Posts</div>
							<input type="checkbox" name="relative_post" value="1" id="relative_post" <?php checked($post_option['relative_post'],1);?>><label for="relative_post">Show Relative Posts</label>
						</div>
						<div class="column2 column_last">
							<div class="option-section-title">Number of Relative Posts</div>
							<input type="text" name="relative_post_number" class="normal_input" value="<?php echo $post_option['relative_post_number'];?>">
						</div>
						<div class="cleared"></div>
					</div>
					
				</div>
				
				<div class="option-tab" id="option-tab-social-content">
					<div class="option-tab-title">Socials Options</div>
					
					<?php if(count($social_array) >0){
						$social_column1 = true;
					?>
						<?php foreach($social_array as $each_social){
							if($social_column1 == true){
								$column_last = '';
								$start_div = '<div class="option-section">';
								$end_div = '';
								$social_column1 = false;
							}else{
								$column_last = 'column_last';
								$start_div = '';
								$end_div = '<div class="cleared"></div></div>';
								$social_column1 = true;
							}
						?>
							<?php echo $start_div;?>
							
							<?php if($each_social == 'rss'){?>
								<div class="column2 <?php echo $column_last;?>">
									<h3><i class="fa fa-rss"></i> RSS </h3>
									<input type="checkbox" name="social-rss" id="check_rss" value="1" <?php checked($social_option['rss'],1);?>><label for="check_rss">Show rss link in social bar</label>	
								</div>
							<?php }else{?>
								<div class="column2 <?php echo $column_last;?>">
									<h3><i class="fa fa-<?php echo $each_social;?>"></i> <?php echo $each_social;?> </h3>
									<input type="text" name="social-<?php echo $each_social;?>" class="normal_input" value="<?php echo $social_option[$each_social];?>">
								</div>
							<?php }?>
							
							<?php echo $end_div;?>
						<?php }?>
						<div class="cleared"></div>
					<?php }?>
				</div>
				
				<div class="option-section">
					<button class="form-submit-button button button-primary button-large" > Save Changes </button>
				</div>
				
			</div>
			<div class="cleared"></div>
		</div>
		<div class="footer-task-bar">
			
		</div>

	</div>
	</form>
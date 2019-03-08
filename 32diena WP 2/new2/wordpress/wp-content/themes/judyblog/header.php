<?php
/**
 * The Header for our theme.
 */
 global $main_option;
$main_option = get_option('wope-main');
$social_option = get_option('wope-social');
$logo_width_half = $main_option['logo_retina_width'] / 2;
$logo_height_half = $main_option['logo_retina_height'] / 2;

?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<?php if(!empty($main_option['favicon_url'])){?>
		<?php if(trim($main_option['favicon_url']) != ''){?>
		<link REL="icon" HREF="<?php echo $main_option['favicon_url'];?>">
		<?php }?>
	<?php }?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head();?>
</head>
<body <?php body_class(  ); ?>>
	<div id="background">
		<div id="main-menu-toggle">
			<div class="toggle-menu-top">
				<span class="toggle-menu-close"><i class="fa fa-angle-left"></i></span>
			</div>
			<?php 
				if ( has_nav_menu('main-menu')){
					wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
				}else{
			?>
			<ul>
				<li ><a href="<?php echo home_url(); ?>"><?php _e('Home','wope');?></a></li>
			</ul>
			<?php
				}
			?>  
			
		</div>
		<div id="back_top"><i class="fa fa-angle-up"></i></div>
		<div id="page" >
			<div id="header">
				<div id="topbar">
					<div class="wrap">
						<div id="toggle-menu-button"><i class="fa fa-align-justify"></i></div>
						<div class="main-menu">
							<?php 
								if ( has_nav_menu('main-menu')){
									wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
								}else{
							?>
							<ul>
								<li ><a href="<?php echo home_url(); ?>"><?php _e('Home','wope');?></a></li>
							</ul>
							<?php
								}
							?> 
							<div class="cleared"></div>
						</div><!-- End Main Menu -->
						<?php if($social_option){?>
							<div class="top-social">
								<?php foreach($social_option as $key => $each_social){?>
									<?php if($key == 'rss'){?>
										<?php if($each_social == 1){?>
											<span>
												<a target="_blank" href=" <?php bloginfo( 'rss2_url' ); ?> "><i class="fa fa-rss"></i></a>
											</span>
										<?php }?>
									<?php }elseif(trim($each_social) != ''){?>
										<span><a target="_blank"  href="<?php echo $each_social;?>"><i class="fa fa-<?php echo $key;?>"></i></a></span>
									<?php }?>
								<?php }?>
								<div class="cleared"></div>
							</div>
						<?php }?>
						<div class="cleared"></div>
					</div>
				</div>
				<div class="wrap">
					<div class="logo-box">
						
						<?php if(trim($main_option['logo_url']) != ''){?>
							<?php if(is_front_page()){?>
								<h1>
									<a class="logo-image" href="<?php echo home_url(); ?>">
										<?php if( trim($main_option['logo_retina_url']) != ''){?>
											<img class="logo-normal" alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_url'];?>">
											<image width="<?php echo $logo_width_half;?>" height="<?php echo $logo_height_half;?>" class="logo-retina" alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_retina_url'];?>" >
										<?php }else{?>
											<img alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_url'];?>">
										<?php }?>
									</a>
								</h1>
							<?php }else{?>
								<a class="logo-image" href="<?php echo home_url(); ?>">
									<?php if( trim($main_option['logo_retina_url']) != ''){?>
										<img class="logo-normal" alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_url'];?>">
										<image width="<?php echo $logo_width_half;?>" height="<?php echo $logo_height_half;?>" class="logo-retina" alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_retina_url'];?>" >
									<?php }else{?>
										<img alt="<?php bloginfo('name');?>" src="<?php echo $main_option['logo_url'];?>">
									<?php }?>
								</a>
							<?php }?>
						<?php }else{?>
							<?php if(is_front_page()){?>
								<h1>
									<a class="logo-text" href="<?php echo home_url(); ?>">
										<?php bloginfo('name');?>
									</a>
								</h1>
								<?php if(get_bloginfo ( 'description' ) != ''){?>
									<span class="logo-tagline"><?php echo get_bloginfo ( 'description' );?></span>
								<?php }?>
							<?php }else{?>
								<div>
									<a class="logo-text" href="<?php echo home_url(); ?>">
										<?php bloginfo('name');?>
									</a>
								</div>
								<?php if(get_bloginfo ( 'description' ) != ''){?>
									<span class="logo-tagline"><?php echo get_bloginfo ( 'description' );?></span>
								<?php }?>
							<?php }?>
						<?php }?>
							
					</div>

					
					<div class="cleared"></div>
					<script>
						var menu_open = false;
						jQuery('#toggle-menu-button').click(function(){
							if(menu_open == false){
								jQuery("#main-menu-toggle").addClass("toggle-menu-open");
								jQuery("#page").addClass("page-to-right");
								menu_open = true;
							}else{
								jQuery("#main-menu-toggle").removeClass("toggle-menu-open");
								jQuery("#page").removeClass("page-to-right");
								menu_open = false;
							}
						});
						
						jQuery('.toggle-menu-close').click(function(){
							if(menu_open == true){
								jQuery("#main-menu-toggle").removeClass("toggle-menu-open");
								jQuery("#page").removeClass("page-to-right");
								menu_open = false;
							}
						});
						
					</script>
				</div>
			</div><!-- End Header -->
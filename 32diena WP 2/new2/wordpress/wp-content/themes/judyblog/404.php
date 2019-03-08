<?php
/**
 * The main template file.
 */
$main_option = get_option('wope-main');

//load page heading option
$heading_style 	= $main_option['heading_style'] ;
$heading_image 	= trim($main_option['heading_image']);

//process heading style
if($heading_style == 1 and  $heading_image != ''){ //process heading style
	$heading_style = 'style="background-image:url('."'".$heading_image."'".');" ';
	$heading_class = 'class="page-title-image"';
}else{
	$heading_style = '';
	$heading_class = '';
}
get_header(); ?>
	<div id="body" >
		<div class="wrap">
			<div class="full-column">
				<div class="page-entry">
					<?php if ( has_post_thumbnail() ) {?>
						<div class="page-entry-thumb">
							<?php echo the_post_thumbnail('page-featured');?>
						</div>
					<?php }?>
					
					<div class="page-entry-body">
						<h1 class="page-title"><?php _e('Page Not Found','wope');?></h1>

						<div class="page-entry-content content">
							<div class="text-404"><?php _e('404','wope');?></div>
							<p class="center" style="padding-top:20px">
								<?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Please try another search ... ','wope');?>
							</p>
								<div class="center">
									<?php get_search_form(); ?>
								</div>
								
						</div>
						<div class="cleared"></div>
					</div>
					
					
				</div>
				<?php //comments_template( '', true ); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
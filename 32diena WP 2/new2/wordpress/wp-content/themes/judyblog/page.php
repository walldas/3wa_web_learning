<?php
/**
 * The main template file.
 */
//load site option 
$main_option = get_option('wope-main');

//load page option
$heading_setting 		= get_post_meta( $post->ID, 'heading_setting', true );
$sidebar_setting		= get_post_meta( $post->ID, 'sidebar_setting', true );
$sidebar_selector		= get_post_meta( $post->ID, 'sidebar_selector', true );
$custom_sidebar_option 	= get_option('wope_custom_sidebar');

get_header(); 
?>
	<?php if ( have_posts() ) { ?>
		<?php /* Start the Loop */ ?>
		<?php the_post(); ?>
		
		
	
		<?php if($sidebar_setting == 0){ //fullwidth?>
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
								<h1 class="page-title"><?php the_title();?></h1>

								<div class="page-entry-content content">
									<?php the_content(); ?>
								</div>
								<div class="cleared"></div>
							</div>
							
							
						</div>
						<?php //comments_template( '', true ); ?>
					</div>
				</div>
			</div>
		<?php }else{ //sidebar ?>
			<div id="body">
				<div class="wrap">
					<div class="big-column left">
						<div class="page-entry">
							<?php if ( has_post_thumbnail() ) {?>
								<div class="page-entry-thumb">
									<?php echo the_post_thumbnail('page-featured-sidebar');?>
								</div>
							<?php }?>
							<div class="page-entry-body">
								<h1 class="page-title"><?php the_title();?></h1>
								<div class="page-entry-content content">
									<?php the_content(); ?>
									
								</div>
								<div class="cleared"></div>
							</div>
						</div>
						<?php //comments_template( '', true ); ?>
					</div>
					<!-- End Big Column -->
		
					<div class="small-column right">
						<?php dynamic_sidebar( $sidebar_selector );?>
						
					</div><!-- End Small Column -->
					<div class="cleared"></div>
					
				</div>
			</div><!-- End Body-->
		<?php } ?>	

		<?php 
			wp_link_pages();
			
		?>
	<?php } ?>	
<?php get_footer(); ?>
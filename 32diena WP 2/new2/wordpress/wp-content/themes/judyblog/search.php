<?php
/**
 * The main template file.
 */
//load site option
$sidebar_options = get_option('wope-sidebar');
$main_option = get_option('wope-main');

get_header(); 
?>
	<div id="body" class="search-page">
		<div class="wrap">
			<div class="big-column left">
				<div class="page-entry">
					<div class="page-search-body">
						<?php if ( is_search() ) { ?>
							<?php if ( have_posts() ) { ?>
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wope' ), get_search_query() ); ?></h1>
								<div class="top-search-form">
									<?php get_search_form(); ?>
								</div>
								<?php 
										
									while ( have_posts() ) {
										the_post();
										get_template_part( 'content-search');
									}
									
								?>
								<?php
									global $wp_query;
									if($wp_query->max_num_pages > 1){
								?>
									<div class="paginate">
										<?php show_paginate_search(); ?>
									</div>
								<?php } ?>
							<?php }else{?>
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wope' ), get_search_query() ); ?></h1>
								<div class="top-search-form empty-search-result">
									<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wope' ); ?></p>
									<?php get_search_form(); ?>
								</div>
							<?php }?>
						<?php }else{?>
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wope' ), get_search_query() ); ?></h1>
							<div class="top-search-form">
								<?php get_search_form(); ?>
							</div>
						<?php }?>

						
					</div>
				</div>
			</div><!-- End Big Column -->
			
			<div class="small-column right">
				<?php dynamic_sidebar( $sidebar_options['search-sidebar'] ); ?>	
			</div><!-- End Small Column -->
			
			<div class="cleared"></div>
		</div>
		
	</div><!-- End Body-->
	
<?php get_footer(); ?>
<?php
/**
 * The main template file.
 */
$sidebar_options = get_option('wope-sidebar');
get_header(); ?>
	
	<div id="body" >
		<div class="wrap">
			<div class="big-column left">
				<?php
					if ( have_posts() ) {
						$post_count = wp_count_posts();
						while ( have_posts() ) {
							the_post();
							get_template_part( 'content');
						}
					}
				?>
				
				<?php
					global $wp_query;
					if($wp_query->max_num_pages > 1){
				?>
					<div class="paginate">
						<?php show_paginate_links(); ?>
					</div>
				<?php } ?>
			</div>
			<!-- End Big Column -->
			
			<div class="small-column right">
				<?php dynamic_sidebar( $sidebar_options['index-sidebar'] ); ?>
			</div><!-- End Small Column -->
			
			<div class="cleared"></div>			
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>
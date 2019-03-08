<?php
/**
 * The main template file.
 */
$sidebar_options = get_option('wope-sidebar');
$post_option = get_option('wope-post');
$main_option = get_option('wope-main');

get_header(); ?>
	<div class="page-title" >
		<div class="wrap">
			<h1 id="page-title"><span>
				<?php if ( is_day() ) : ?>
					<?php printf( __( 'Daily Archives: %s', 'wope' ),  get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( 'Monthly Archives: %s', 'wope' ),  get_the_date( 'M Y' )  ); ?>
				<?php elseif ( is_year() ) : ?>
					<?php printf( __( 'Yearly Archives: %s', 'wope' ), get_the_date( 'Y') ); ?>
				<?php else : ?>
					<?php _e( 'Blog Archives', 'wope' ); ?>
				<?php endif; ?>
				</span>
			</h1>
		</div>
	</div><!-- End Page Title -->
	
	<div id="body">
		<div class="wrap">
			<div class="content">
				<div class="big-column left">
					<?php
						if ( have_posts() ) {
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
					<?php dynamic_sidebar( $sidebar_options['archive-sidebar'] ); ?>
				</div><!-- End Small Column -->
				<div class="cleared"></div>
			</div>
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>
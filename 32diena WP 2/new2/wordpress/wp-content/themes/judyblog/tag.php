<?php
/**
 * The main template file.
 */
//load site option
$sidebar_options = get_option('wope-sidebar');
$post_option = get_option('wope-post');
$main_option = get_option('wope-main');


get_header(); ?>
	<div class="page-title" >
		<div class="wrap">
			<h1> <?php printf( __( 'Tag Archives: %s', 'wope' ),  single_tag_title( '', false )  ); ?></h1>
		</div>
	</div><!-- End Page Title -->
	
	<div id="body" class="white-bg">
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
					<?php dynamic_sidebar( $sidebar_options['tag-sidebar'] ); ?>
				</div><!-- End Small Column -->
				<div class="cleared"></div>
			</div>
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>
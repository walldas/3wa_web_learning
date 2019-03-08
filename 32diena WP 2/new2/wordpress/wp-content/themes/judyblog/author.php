<?php
/**
 * The main template file.
 */
$sidebar_options = get_option('wope-sidebar');
$post_option = get_option('wope-post');
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$main_option = get_option('wope-main');


get_header(); ?>
	<div class="page-title" >
		<div class="wrap">
			<h1 id="page-title"><?php printf( __( 'Author Archives: %s', 'wope' ), $curauth->display_name ); ?>  </h1>
		</div>
	</div><!-- End Page Title -->
	
	<div id="body">
		<div class="wrap">
			<div class="content">
				<div class="big-column left">
						<?php if(trim(get_the_author_meta('description',$curauth->ID)) != ''){?>
						<div class="author-bio author-bio-page">
							<div class="author-bio-avatar">
								<?php echo get_avatar( get_the_author_meta('email',$curauth->ID) , 90 ); ?>
							</div>
							<div class="author-bio-details">
								<div class="author-bio-title">
									<?php echo get_the_author_meta('display_name')?>
									
									<?php if(get_the_author_meta('user_url') != ''){?>
										<span class="author-bio-url">
											<a href="<?php the_author_meta('user_url');?>"><?php _e('Visit Website ','wope');?></a>
										</span>
									<?php }?>
								</div>
								<div class="author-bio-description">
									<?php the_author_meta('description',$curauth->ID); ?>
								</div>
							</div>
							<div class="cleared"></div>
						</div>
						<?php }?>
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
					<?php dynamic_sidebar( $sidebar_options['author-sidebar'] ); ?>
				</div><!-- End Small Column -->
				<div class="cleared"></div>
			</div>
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>
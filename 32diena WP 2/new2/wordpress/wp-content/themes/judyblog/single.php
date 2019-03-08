<?php
/**
 * The main template file.
 */

//load site option
$sidebar_options = get_option('wope-sidebar');
$post_option = get_option('wope-post');
$main_option = get_option('wope-main');

get_header(); ?>
	<?php if ( have_posts() ) { 
			/* Start the Loop */
			the_post(); 
			$post_media_type 	= get_post_meta( $post->ID, 'post_media_type', true );
			$quote_author 		= get_post_meta( $post->ID, 'quote_author', true );

			//Get the Thumbnail URL
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
			if(!empty($src[0])){
				$post_thumb = $src[0];
			}else{
				$post_thumb = '';
			}
			
			$post_like_number 	= get_post_meta( $post->ID, 'post_like_number', true );
			//get portfolio like number
			if($post_like_number == false){
				$post_like_number = 0;
			}
			
			//check cookie
			$cookie_name = 'liked_post_'.$post->ID;
			if(!empty($_COOKIE[$cookie_name])){
				if($_COOKIE[$cookie_name] == 1){
					$like_button_class = 'liked-button';
				}else{
					$like_button_class = 'unlike-button';
				}	
			}else{
				$like_button_class = 'unlike-button';
			}		
		?>

		
		<div id="body" >
			<div class="wrap">
				<div class="big-column left">
					<div class="post-entry-single">
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">	

							<?php if($post_media_type == 'quote'){?>
								<div class="post-entry-quote">
									<i class="fa fa-quote-right"></i>
									<h1 class="post-entry-content">
										<a href="<?php the_permalink(); ?>"><?php the_content(  ''  ); ?></a>
									</h1>
									<div class="post-entry-quote-author">
										<?php echo $quote_author;?>
									</div>
								</div>
							<?php }else{?>
								<?php get_template_part( 'content-media');?>
								<div class="post-entry-body">
									<div class="post-entry-top">
										<div class="post-entry-top-left">
											<i class="fa fa-folder-open-o"></i><?php the_category(', ');?>
										</div>
										<div class="post-entry-top-right">
											<span class="like-button <?php echo $like_button_class;?>">
												<i class="fa fa-heart-o"></i>
												<span class="like-number"><?php echo $post_like_number;?></span>
												<input type="hidden" name="post-id" class="post-id" value="<?php echo $post->ID;?>">
											</span>
											<span class="comment-count">
												<i class="fa fa-comment-o"></i> <?php comments_number( __('0','wope') , __('1','wope'), __('%','wope') ); ?>
											</span>
											<span class="share-button">
												<i class="fa fa-share-square-o"></i> Share
												<span class="share-button-container">
													<span class="share-button-arrow"></span>
													<a target="_blank" class="social-share-icon social-share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
													<a target="_blank" class="social-share-icon social-share-twitter" href="https://twitter.com/intent/tweet?source=webclient&text=Checkout+<?php the_title(); ?>+<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
													<a target="_blank" class="social-share-icon social-share-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><i class="fa fa-google-plus"></i></a>
													<a target="_blank" class="social-share-icon social-share-pinterest" href="http://www.pinterest.com/pin/create/button/?source_url=<?php the_permalink(); ?>&media=<?php echo $post_thumb;?>&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
													
												</span>
											</span>
										</div>
										<div class="cleared"></div>
									</div>
									<h1 class="post-entry-title">
										<?php the_title(); ?>
									</h1>
									<div class="post-entry-content content">
										<?php the_content(  ''  ); ?>
									</div>
									<div class="cleared"></div>
									
									<?php wp_link_pages(array(
										'before' => '<p class="post-entry-pages">' . __( 'Pages:','wope' ),
										'after'   => '</p>',));
									?>
									
									<div class="post-entry-tags">
										<?php the_tags('','','');?>
									</div>

								</div>
								<div class="post-entry-bottom">
									
									<span class="post-entry-author">
										<i class="fa fa-user"></i>
										<?php the_author_posts_link(); ?>
									</span>
									<span class="post-entry-date">
										<i class="fa fa-calendar"></i>
										<span class="post-entry-meta-text"><?php echo get_the_date('M j,Y');?></span>
									</span>
									<div class="cleared"></div>
								</div>
							<?php }?>
							
						</div>	<!-- End Post ID -->

					</div> <!-- End Post Entry -->
				
					<?php if(trim(get_the_author_meta('description')) != ''){?>
						<div class="author-bio">
							
							<div class="author-bio-avatar">
								<?php echo get_avatar( get_the_author_meta('email') , 90 ); ?>
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
								<div class="author-bio-description content">
									<?php the_author_meta('description'); ?>
								</div>
								
							</div>
							<div class="cleared"></div>
						</div><!-- End Post Author-->
					<?php }?>
					
					<?php 		
					if($post_option['relative_post'] == 1){
						//get current categories
						$all_category = wp_get_post_categories($post->ID);
						
						$args = array(
							'posts_per_page' 	=> 3,
							'orderby' 			=> 'rand',
							'category__in' 		=> $all_category,
							'post__not_in'		=> array($post->ID)
						);
						
						// The Query
						$the_query = new WP_Query( $args );
						
						// The Loop
						if ( $the_query->have_posts() ) {?>
						<div class="post-relative">
							<div class="post-section-title"><?php _e('Related Posts ','wope');?></div>
							<div class="post-relative-content">
								<?php
								$post_count = 1;
								while ( $the_query->have_posts() ) : $the_query->the_post();
									if($post_count == 3){
										$clear_div = '<div class="cleared"></div>';
										$column_last = 'column-last';
										$post_count = 1;
									}else{
										$clear_div = '';
										$column_last = '';
										$post_count ++;
									}
									?>
									<div class="post-relative-column <?php echo $column_last;?>">
										<div class="post-relative-thumb">
											<a  href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumb-relative');?></a>
										</div>
										<div class="post-relative-title">
											<a href="<?php the_permalink(); ?>"> <i class="icon-angle-right"></i> <?php the_title();?></a> 
										</div>
									</div>
									<?php echo $clear_div;?>
									<?php
								endwhile;
								?>
							</div>
							<div class="cleared"></div>
						</div><!-- End Post relative-->
						<?php
						}
						
						// Reset Post Data
						wp_reset_postdata();
					} ?>
			
					
					
					<?php comments_template( '', true ); ?>
					<div class="cleared"></div>
				</div><!-- End Big Column -->
				
				<div class="small-column right">
					<?php dynamic_sidebar( $sidebar_options['single-sidebar'] ); ?>
				</div><!-- End Small Column -->
				<div class="cleared"></div>
	
			</div>
		</div><!-- End Body-->
	<?php } ?>	
<?php get_footer(); ?>
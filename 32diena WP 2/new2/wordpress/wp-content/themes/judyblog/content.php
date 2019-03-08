			<?php $post_option = get_option('wope-post');
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
				
				//tag more
				global $more;
				$more = 0;
			?>
			
			<div class="post-entry">
				<div <?php post_class(); ?>>
					
				
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
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>
							<div class="post-entry-content content">
								<?php the_content(  ''  ); ?>
							</div>
							<div class="cleared"></div>

						</div>
						<div class="post-entry-bottom">
							<a class="post-entry-button" href="<?php the_permalink(); ?>" ><span><?php _e('Read More','wope');?> <i class="fa fa-long-arrow-right"></i></span> </a>
							<span class="post-entry-author">
								<i class="fa fa-user"></i>
								<?php the_author_posts_link(); ?>
							</span>
							<span class="post-entry-date">
								<i class="fa fa-calendar"></i>
								<span class="post-entry-meta-text"><?php echo get_the_date('M j,Y');?></span>
							</span>
						</div>
					<?php }?>
				</div>
			</div><!-- End Post Entry -->
			
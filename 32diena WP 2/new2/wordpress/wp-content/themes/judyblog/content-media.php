					<?php
					$post_media_type 	= get_post_meta( $post->ID, 'post_media_type', true );
					$quote_author 		= get_post_meta( $post->ID, 'quote_author', true );
					$link 				= get_post_meta( $post->ID, 'link', true );
					$embed_code 		= get_post_meta( $post->ID, 'embed_code', true );
					$slider_button 		= get_post_meta( $post->ID, 'slider_button', true );
					$slider_effect 		= get_post_meta( $post->ID, 'slider_effect', true );
					$slide_speed 		= get_post_meta( $post->ID, 'slide_speed', true );
					$image_array 		= get_post_meta( $post->ID, 'image_array', false );
					if(empty($image_array[0])){
						$image_array 		= array();
					}else{
						$image_array 		= $image_array[0];
					}
					
					?>
					
					<?php if($post_media_type == 'youtube'){?>
						<div class="post-entry-media">
							<div class="youtube-container">
								<?php echo $embed_code;?>
							</div>
						</div>
					<?php }elseif($post_media_type == 'vimeo'){?>
						<div class="post-entry-media">
							<div class="vimeo-container">
								<?php echo $embed_code;?>
							</div>
						</div>
					<?php }elseif($post_media_type == 'soundcloud'){?>
						<div class="post-entry-media">
							<?php echo $embed_code;?>
						</div>
					<?php }elseif($post_media_type == 'image_slider'){
						if($slider_button == 1){
							$controlNav = 'false';
							$directionNav = 'true';
						}elseif($slider_button == 2){
							$controlNav = 'true';
							$directionNav = 'false';
						}elseif($slider_button == 3){
							$controlNav = 'true';
							$directionNav = 'true';
						}else{
							$controlNav = 'false';
							$directionNav = 'false';
						}
					?>
						<?php if(is_array($image_array)){?>
						<div class="post-entry-media">
							<div class="post-flexslider">
								<div class="flexslider" id="flexslider-post-<?php echo $post->ID;?>">
									<ul class="slides">
									<?php foreach($image_array as $each_slide){
									?>
										<li>
											<img src="<?php echo $each_slide;?>" />
										</li>
									<?php }?>
									</ul>
								</div>
							</div>
							<script>
								jQuery(document).ready(function(){
									jQuery('#flexslider-post-<?php echo $post->ID;?>').flexslider({
										controlNav: <?php echo $controlNav;?>,            
										directionNav: <?php echo $directionNav;?>,
										animation : '<?php echo $slider_effect;?>',
										slideshowSpeed :<?php echo $slide_speed;?>,
									});
								});
							</script>
						</div>
						<?php }?>
					<?php }elseif($post_media_type == 'link'){?>
						<div class="post-entry-link"><i class="fa fa-link"></i><a href="<?php echo $link;?>"><?php echo $link;?></a></div>
					<?php }elseif($post_media_type == 'location'){?>
						<div class="post-entry-map">
							<div class="post-map-container">
								<?php echo $embed_code;?>
							</div>
						</div>
					<?php }elseif($post_media_type == 'text'){?>
					<?php }else{?>
						<?php if ( has_post_thumbnail() ) {?>
							<div class="post-entry-media">
								<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumb-big');?></a>
							</div>
						<?php }?>
					<?php }?>
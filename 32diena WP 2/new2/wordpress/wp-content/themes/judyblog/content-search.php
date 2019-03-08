			<?php 
				
				//tag more
				global $more;
				$more = 0;

			?>
			<div class="post-search-entry">
				<div class="post-search-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>

				<div class="post-search-content content">
					<?php 
					global $post;
					if ( trim(get_the_excerpt() ) == '') {
						$content = get_the_content();
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>',']]&gt;', $content);
						$substr_content = substr(strip_tags($content),0,200); 
						if($substr_content != ''){
							echo $substr_content;
						}else{
							echo '<p>This result have no content to display.</p>';
						}	
					}else{
						the_excerpt('' );
					}						
					?>
				</div>
				<div class="cleared"></div>
				<a class="post-search-button" href="<?php the_permalink(); ?>" ><?php _e('Read More','wope');?></a>
							
			</div>			
						
			
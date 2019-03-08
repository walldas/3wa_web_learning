<?php
//video widget
class wope_videos_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'wope_videos_widget', // Base ID
			'Video Widget', // Name
			array( 'description' =>  'A Widget play Youtube,Vimeo video' ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		$video_type = $instance[ 'video_type' ];
		$embed_code = $instance[ 'embed_code' ];
		
		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
		?>
		<div class="<?php echo $video_type;?>-container">
			<?php echo $embed_code;?>
		</div>
		<?php
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['video_type'] 	= strip_tags( $new_instance['video_type'] );
		$instance['embed_code'] 	=  $new_instance['embed_code'] ;

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	
		//get all categories
		$categories = get_categories( );
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = 'Hot Video';
		}
		
		if ( isset( $instance[ 'video_type' ] ) ) {
			$video_type = $instance[ 'video_type' ];
		}
		else {
			$video_type = 1;
		}
		
		if ( isset( $instance[ 'embed_code' ] ) ) {
			$embed_code = $instance[ 'embed_code' ];
		}
		else {
			$embed_code =  '';
		}
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'video_type' ); ?>">Video Type :</label> 
			<select name="<?php echo $this->get_field_name( 'video_type' ); ?>">
				<option value="youtube" <?php echo selected($video_type,'youtube');?>>Youtube</option>
				<option value="vimeo" <?php echo selected($video_type,'vimeo');?>>Vimeo</option>
			</select>
			
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'embed_code' ); ?>">Embed Code :</label> <br>
			<textarea style="width:100%" rows="5" id="<?php echo $this->get_field_id( 'embed_code' ); ?>" name="<?php echo $this->get_field_name( 'embed_code' ); ?>"><?php echo $embed_code;?></textarea>
		</p>
		<?php 
	}

} // class wope_videos_Widget

// register wope_videos_Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "wope_videos_Widget" );' ) );

//post widget
class wope_Posts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'wope_posts_widget', // Base ID
			'Post Tabs', // Name
			array( 'description' =>  'Show the post in 3 tabs.' ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		$current_category 	= $instance[ 'category' ];
		$post_number 		= $instance[ 'post_number' ];
		
		echo $before_widget;
		?>
		<div class="tab tab-post">
			<div class="tab-top">
				<div class="tab-title"><?php _e('Comments','wope');?></div>
				<div class="tab-title"><?php _e('Likes','wope');?></div>
				<div class="tab-title"><?php _e('Random','wope');?></div>
			</div>
			<div class="tab-bottom">
				<div class="tab-content content">
					<?php
					$args = array(
						'posts_per_page' => $post_number,
						'posts_per_archive_page' => $post_number,
						'orderby' => 'comment_count',
						'ignore_sticky_posts' => 1,
					);
					
					// The Query
					$the_query = new WP_Query( $args );
					
					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
						<div class="widget-post">
							<div class="widget-post-thumb" >
								<?php echo the_post_thumbnail( 'post-thumb-widget');?>
							</div>
							<div class="widget-post-title" >
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</div>
							<div class="widget-post-meta" >
								<?php comments_number( __('No Comment','wope') , __('1 Comment','wope'), __('% Comments','wope') ); ?>
							</div>
							<div class="cleared"></div>
						</div>
						
						<?php
					endwhile;
					// Reset Post Data
					wp_reset_postdata();
					?>
				</div>
				<div class="tab-content content">
					<?php
					$args2 = array(
						'posts_per_page' => $post_number,
						'posts_per_archive_page' => $post_number,
						'orderby' => 'meta_value_num',
						'meta_key' => 'post_like_number',
						'ignore_sticky_posts' => 1,
					);
					
					// The Query
					$the_query2 = new WP_Query( $args2 );
					
					
					
					// The Loop
					while ( $the_query2->have_posts() ) : $the_query2->the_post();
						global $post;
						$post_like_number 	= get_post_meta( $post->ID, 'post_like_number', true );
						if($post_like_number == false){
							$post_like_number = 0;
						}
						?>
						<div class="widget-post">
							<div class="widget-post-thumb" >
								<?php echo the_post_thumbnail( 'post-thumb-widget');?>
							</div>
							<div class="widget-post-title" >
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</div>
							<div class="widget-post-meta" >
								<?php echo sprintf( _n( '1 Like', '%s Likes', $post_like_number, 'wope' ), $post_like_number ); ?>
							</div>
							<div class="cleared"></div>
						</div>
						
						<?php
					endwhile;
					// Reset Post Data
					wp_reset_postdata();
					?>
				</div>
				<div class="tab-content content">
					<?php
					$args3 = array(
						'posts_per_page' => $post_number,
						'posts_per_archive_page' => $post_number,
						'orderby' => 'rand',
						'ignore_sticky_posts' => 1,
					);
					
					// The Query
					$the_query3 = new WP_Query( $args3 );
					
					
					
					// The Loop
					while ( $the_query3->have_posts() ) : $the_query3->the_post();
						?>
						<div class="widget-post">
							<div class="widget-post-thumb" >
								<?php echo the_post_thumbnail( 'post-thumb-widget');?>
							</div>
							<div class="widget-post-title" >
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</div>
							<div class="widget-post-meta" >
								<?php comments_number( __('No Comment','wope') , __('1 Comment','wope'), __('% Comments','wope') ); ?>
							</div>
							<div class="cleared"></div>
						</div>
						
						<?php
					endwhile;
					// Reset Post Data
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<?php
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] 			= strip_tags( $new_instance['title'] );
		$instance['category'] 		= strip_tags( $new_instance['category'] );
		$instance['post_number'] 	= strip_tags( $new_instance['post_number'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
	
		//get all categories
		$categories = get_categories( );
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = 'Popular Posts';
		}
		
		if ( isset( $instance[ 'post_number' ] ) ) {
			$post_number = $instance[ 'post_number' ];
		}
		else {
			$post_number =  4;
		}
		
		if ( isset( $instance[ 'category' ] ) ) {
			$current_category = $instance[ 'category' ];
		}else{
			$current_category = 0;
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>">Category :</label> 
			
			<?php if(is_array($categories)){?>
				<select name="<?php echo $this->get_field_name( 'category' ); ?>">
					<option value="0">All Categories</option>
					<?php foreach($categories as $each_category){?>
						<?php if($current_category == $each_category->term_id ){?>
							<option selected="selected" value="<?php echo $each_category->term_id ;?>"><?php echo $each_category->name ;?></option>
						<?php }else{?>
							<option value="<?php echo $each_category->term_id ;?>"><?php echo $each_category->name ;?></option>
						<?php }?>
						
					<?php }?>
				</select>
			<?php }?>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'post_number' ); ?>">Number of posts to show :</label> 
			<input size="3" id="<?php echo $this->get_field_id( 'post_number' ); ?>" name="<?php echo $this->get_field_name( 'post_number' ); ?>" type="text" value="<?php echo esc_attr( $post_number ); ?>" />
		</p>
		<?php 
	}

} // class wope_Posts_Widget

// register wope_Posts_Widget widget
add_action( 'widgets_init', create_function( '', 'register_widget( "wope_Posts_Widget" );' ) );
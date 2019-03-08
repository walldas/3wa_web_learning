<?php
// add post metabox
add_action( 'admin_init', 'wope_build_post_metabox' );
add_action( 'save_post', 'wope_post_metabox_save' );

function wope_build_post_metabox() {
    add_meta_box( 'post-media',  'Post Media' , 'wope_post_metabox', 'post', 'normal', 'high' );
}

//show metabox
function wope_post_metabox(){
	global $post;
	$post_media_type 	= get_post_meta( $post->ID, 'post_media_type', true );
	$quote_author 		= get_post_meta( $post->ID, 'quote_author', true );
	$link 				= get_post_meta( $post->ID, 'link', true );
    $embed_code 		= get_post_meta( $post->ID, 'embed_code', true );
	$slider_button 		= get_post_meta( $post->ID, 'slider_button', true );
	$slider_effect 		= get_post_meta( $post->ID, 'slider_effect', true );
    $slide_speed 		= get_post_meta( $post->ID, 'slide_speed', true );
	
	$image_array 		= get_post_meta( $post->ID, 'image_array', false );
	$image_array = $image_array[0];
	
	//add more upload field
	$image_array[] = '';

	if(!$post_media_type){
		$post_media_type = 'image';
	}
?>
	<div class="meta-section">
		<div class="meta-field-title">Media Type</div>
		<select name="post_media_type">
			<option value="text" <?php selected($post_media_type,'text');?>>Text</option>
			<option value="quote" <?php selected($post_media_type,'quote');?>>Quote</option>
			<option value="link" <?php selected($post_media_type,'link');?>>Link</option>
			<option value="location" <?php selected($post_media_type,'location');?>>Location</option>
			<option value="image" <?php selected($post_media_type,'image');?>>Single Image</option>
			<option value="image_slider" <?php selected($post_media_type,'image_slider');?>>Image Slider</option>
			<option value="soundcloud" <?php selected($post_media_type,'soundcloud');?>>Soundcloud</option>
			<option value="youtube" <?php selected($post_media_type,'youtube');?>>Youtube</option>
			<option value="vimeo" <?php selected($post_media_type,'vimeo');?>>Vimeo</option>
		</select>
	</div>
	<div class="column3">
		<div class="meta-field">
			<div class="meta-field-title">Quote Author</div>
			<input type="text" class="normal_input" name="quote_author" value="<?php echo $quote_author;?>">
		</div>
		<div class="meta-field">
			<div class="meta-field-title">Link</div>
			<input type="text" class="normal_input" name="link" value="<?php echo $link;?>">
		</div>
		<div class="meta-field">
			<div class="meta-field-title">Embed Code</div>
			<textarea rows="3" name="embed_code" class="normal_textarea"><?php echo $embed_code;?></textarea>
		</div>
	</div>
	<div class="column3">
		<div class="meta-field">
			<div class="meta-field-title">Slider Button</div>
			<select name="slider_button">
				<option value="0" <?php selected($slider_button,0);?>>No Buttons</option>
				<option value="1" <?php selected($slider_button,1);?>>Navigation Buttons</option>
				<option value="2" <?php selected($slider_button,2);?>>Numbered Buttons</option>
				<option value="3" <?php selected($slider_button,3);?>>All Buttons</option>
			</select>
		</div>
		<div class="meta-field">
			<div class="meta-field-title">Slide Effect</div>
			<select name="slider_effect">
				<option value="fade" <?php selected($slider_effect,'fade');?>>Fade</option>
				<option value="slide" <?php selected($slider_effect,'slide');?>>Slide</option>
			</select>
		</div>
		<div class="meta-field">
			<div class="meta-field-title">Slide Speed</div>
			<input type="text" class="normal_input" name="slide_speed" value="<?php echo $slide_speed;?>">
		</div>
	</div>
	<div class="column3 column-last">
		<div class="meta-field-title">Image Slides / Galleries</div>
		<div class="flexible-upload">
			<?php if(is_array($image_array) and count($image_array) > 0){?>
				<?php foreach($image_array as $each_image){?>
					<div>
						<input class="upload_field" type="text" name="image_slide[]" value="<?php echo $each_image;?>" />
						<input class="button upload_button" type="button" value="Upload" />
					</div>
				<?php }?>
			<?php }?>
		</div>
		<input class="button button-primary flexible-upload-button" type="button" value="Add More">
	</div>
	<div class="cleared"></div>
<?php
}

function wope_post_metabox_save(){
	global $post;  
    if( $_POST and !empty($post)) {
		update_post_meta( $post->ID, 'post_media_type',check_post('post_media_type') );
		update_post_meta( $post->ID, 'quote_author', check_post('quote_author') );
		update_post_meta( $post->ID, 'link', check_post('link') );
		update_post_meta( $post->ID, 'embed_code', check_post('embed_code') );
		update_post_meta( $post->ID, 'slider_button', check_post('slider_button') );
		update_post_meta( $post->ID, 'slider_effect', check_post('slider_effect') );
		update_post_meta( $post->ID, 'slide_speed', check_post('slide_speed') );
		
		$image_array_post = check_post('image_slide') ;
		if(count($image_array_post)>0){
			foreach($image_array_post as $each_image){
				if(trim($each_image) != ''){
					$image_array[] = $each_image;
					$image_number++;
				}
			}
		}
		update_post_meta( $post->ID, 'image_array', $image_array );
	}
}
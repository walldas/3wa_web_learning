<?php
// add sub title metabox
add_action( 'admin_init', 'wope_build_page_metabox' );
add_action( 'save_post', 'wope_page_metabox_save' );

function wope_build_page_metabox() {
    add_meta_box( 'wope-page-data', 'Page Setting' , 'wope_page_metabox', 'page', 'normal', 'high' );
}

//show metabox
function wope_page_metabox(){
	global $post;
	$sidebar_setting			= get_post_meta( $post->ID, 'sidebar_setting', true );
	$sidebar_selector			= get_post_meta( $post->ID, 'sidebar_selector', true );
	
	$custom_sidebar_option = get_option('wope_custom_sidebar');
?>
		<div class="column3">
			<div class="meta-field-title">Sidebar Option</div>
			<input type="radio" name="sidebar_setting" value="0" id="no_sidebar" <?php checked($sidebar_setting,0);?> /><label for="no_sidebar">No Sidebar </label>
			<input type="radio" name="sidebar_setting" value="1" id="use_sidebar" <?php checked($sidebar_setting,1);?> /><label for="use_sidebar">Use Sidebar </label>
		</div>
		<div class="column3">
			<div class="meta-field-title">Choose Sidebar</div>
			<?php if(count($custom_sidebar_option) > 0){?>
			<select name="sidebar_selector">
				<?php foreach($custom_sidebar_option as $key=> $each_sidebar){?>
					<?php if($sidebar_selector == $key){?>
						<option value="<?php echo $key;?>" selected="selected"><?php echo $each_sidebar;?></option>
					<?php }else{?>
						<option value="<?php echo $key;?>"><?php echo $each_sidebar;?></option>
					<?php }?>
				<?php }?>
			</select>
			<?php }else{?>
				You need to create a sidebar.
			<?php }?>
		</div>
		<div class="column3 column-last">
			<div class="meta-field-title">Create New Sidebar</div>
			<input type="text" name="new_sidebar" value="">
		</div>
		<div class="cleared"></div>
<?php
}

function wope_page_metabox_save(){
	global $post;  
    if( $post) {
		update_post_meta( $post->ID, 'sidebar_selector',	check_post('sidebar_selector') );
		
		$new_sidebar = trim(check_post('new_sidebar'));
		if($new_sidebar != ''){
			$new_sidebar_slug = convert_slug($new_sidebar);
			$custom_sidebar_option = get_option('wope_custom_sidebar');
			$custom_sidebar_option[$new_sidebar_slug] = $new_sidebar;
			update_option( 'wope_custom_sidebar', $custom_sidebar_option);
			update_post_meta( $post->ID, 'sidebar_selector',	$new_sidebar_slug );
		}
		update_post_meta( $post->ID, 'heading_setting',	check_post('heading_setting') );
		update_post_meta( $post->ID, 'page_subtitle',	check_post('page_subtitle') );
		update_post_meta( $post->ID, 'sidebar_setting',	check_post('sidebar_setting') );
		
	}
}


/*
page builer hidden field name

total_section 				: total section of page

section1_total				: total box of section1
section1_layout				: layout of section 1
section1_field_total 		: total field of section1
section1_field1				: value of field1 of section1

box1_total 					: total widget of box1
box1						: column type of box1

widget1_total				: total field of widget1
widget1						: type of widget1
widget1_field1				: value of field1 of widget1
*/
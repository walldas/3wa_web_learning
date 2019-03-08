<?php
//setup the theme
add_action( 'after_setup_theme', 'wopethemes_setup' );
function wopethemes_setup() {
	// add feature images
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );

	if ( is_user_logged_in() ) {
		$current_user = wp_get_current_user();
		$show_bar = get_user_meta($current_user->data->ID, 'show_admin_bar_front');
		if($show_bar[0] == 'false'){
			show_admin_bar( false);
		}else{
			show_admin_bar( true );
		}		
	}
}

//function to remove stripslashes
function my_stripslashes($text){
	if(get_magic_quotes_gpc()){
		return stripslashes($text);
	}else{
		return $text;
	}
}

//remove wordpress escape
function remove_wp_magic_quotes(){
	$_GET    = stripslashes_deep($_GET);
	$_POST   = stripslashes_deep($_POST);
	$_COOKIE = stripslashes_deep($_COOKIE);
	$_REQUEST = stripslashes_deep($_REQUEST);
}
remove_wp_magic_quotes();

//build menu list
function get_menu_list($select_name,$current_menu){
	$menus = get_terms( 'nav_menu', array(  'order' => 'name') );
	if(count($menus)> 0){
	?>
	<select name="<?php echo $select_name;?>">
		<?php foreach($menus as $menu){ ?>
			<?php if($current_menu == $menu->slug){?>
				<option value="<?php echo $menu->slug; ?>" selected="selected"><?php echo $menu->name; ?></option>
			<?php }else{?>
				<option value="<?php echo $menu->slug; ?>"><?php echo $menu->name; ?></option>
			<?php }?>
		<?php } ?>
	</select>
	<?php
	}
}

function show_paginate_links(){
	global $wp_query;		
	global $wp_rewrite;		
	if( $wp_rewrite->using_permalinks() ){
	
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

		$pagination = array(
			'base' => @add_query_arg('page','%#%'),
			'format' => '',
			'total' => $wp_query->max_num_pages,
			'current' => $current,
			'show_all' => false,
			'type' => 'plain',
			'prev_text'    => '<i class="fa fa-angle-left"></i>',
			'next_text'    => '<i class="fa fa-angle-right"></i>',
		);

		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array('s'=>get_query_var('s'));

		echo  paginate_links($pagination) ; 
	}else{
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text'    => '<i class="fa fa-angle-left"></i>',
			'next_text'    => '<i class="fa fa-angle-right"></i>',
		) );
	}
}

function show_paginate_search(){
	global $wp_query;		
	
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text'    => '<i class="fa fa-angle-left"></i>',
			'next_text'    => '<i class="fa fa-angle-right"></i>',
		) );
}

function custom_paginate_links($paged){
	global $wp_query;		
	global $wp_rewrite;	
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'show_all' => false,
		'type' => 'plain',
		'prev_text'    => '<i class="fa fa-angle-left"></i>',
		'next_text'    => '<i class="fa fa-angle-right"></i>',
		'current' => $paged,
		'total' => $wp_query->max_num_pages
	);	
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array('s'=>get_query_var('s'));
		
	echo  paginate_links($pagination) ; 	
	
}

//filter to remove width,height of images.
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

//limit text by number of single text
function text_limit($str,$limit=10,$suffix)
{
	if(stripos($str," ")){
		$ex_str = explode(" ",$str);
		if(count($ex_str)>$limit){
			$str_s = '';
			for($i=0;$i<$limit;$i++){
				$str_s.=$ex_str[$i]." ";
			}
			return $str_s.$suffix;
		}else{
			return $str;
		}
	}else{
		return $str;
	}
}

function check_post($key){
	global $POST;
	if(array_key_exists($key,$_POST)){
		return $_POST[$key];
	}
}


function convert_slug($string){
    $string = strtolower($string);
    $string = html_entity_decode($string);
    $string = str_replace(array('ä','ü','ö','ß'),array('ae','ue','oe','ss'),$string);
    $string = preg_replace('#[^\w\säüöß]#',null,$string);
    $string = preg_replace('#[\s]{2,}#',' ',$string);
    $string = str_replace(array(' '),array('-'),$string);
    return $string;
}

function wope_page_breadcrumb($post_parent){
	$parent_array = array();
	_wope_page_breadcrumb($post_parent,$parent_array);
	return $parent_array;
}

function _wope_page_breadcrumb($post_parent,&$array){
	if($post_parent != 0){
		$parent_page = get_post($post_parent);	
		
		//add new parent to array
		$new_array['id'] = $parent_page->ID;
		$new_array['post_title'] = $parent_page->post_title;
		array_unshift($array,$new_array);
		
		//search for next parent
		$new_post_parent = $parent_page->post_parent;
		_wope_page_breadcrumb($new_post_parent,$array);
	}
}

function parse_shortcode_content( $content ) {

   /* Parse nested shortcodes and add formatting. */
    $content = trim( do_shortcode( shortcode_unautop( $content ) ) );

    /* Remove '' from the start of the string. */
    if ( substr( $content, 0, 4 ) == '' )
        $content = substr( $content, 4 );

    /* Remove '' from the end of the string. */
    if ( substr( $content, -3, 3 ) == '' )
        $content = substr( $content, 0, -3 );

    /* Remove any instances of ''. */
    $content = str_replace( array( '<p></p>' ), '', $content );
    $content = str_replace( array( '<p>  </p>' ), '', $content );
	

    return $content;
}

function get_end_class($current,$total,$each,$return_class = 'widget-element-bottom'){
	$end_level = floor($total/$each);
	
	if($end_level * $each == $total){
		$end_begin = $total - $each + 1;
	}else{
		$end_begin = $end_level * $each + 1;
	}
	
	if($current >= $end_begin){
		return $return_class;
	}else{
		return "";
	}
}

//get revolution slider list
if( class_exists( 'RevSlider' ) ) {
	function mdf_get_revSlider(){
		if(class_exists('RevSlider')){
			$returnSlider = array();
			$slider = new RevSlider();
			$arrSliders = $slider->getArrSliders();
			
			foreach($arrSliders as $slider) { 
				$returnSlider[$slider->getAlias()] = $slider->getTitle();
			}
			return $returnSlider;
		}else{
			$returnSlider = array();
			return $returnSlider;
		}
	}	
}

function wp_write($dir,$content){
	$access_type = get_filesystem_method();
	if($access_type === 'direct'){
		/* you can safely run request_filesystem_credentials() without any issues and don't need to worry about passing in a URL */
		$creds = request_filesystem_credentials(site_url() . '/wp-admin/', '', false, false, array());

		/* initialize the API */
		if ( ! WP_Filesystem($creds) ) {
			/* any problems and we exit */
			return false;
		}	

		global $wp_filesystem;
			
		$wp_filesystem->put_contents($dir,$content,FS_CHMOD_FILE);
	}else{
		/* don't have direct write access. Prompt user with our notice */
		add_action('admin_notice', 'can_not_write_file'); 	
	}
}

function can_not_write_file(){
	?>
	 <div class="updated">
        <p><?php _e( 'It seem can not write files to update color&amp;fonts to your server, please contact hosting provide to fix it!', 'wope' ); ?></p>
    </div>
	<?php
}
?>
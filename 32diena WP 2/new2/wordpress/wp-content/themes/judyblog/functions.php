<?php
//locazition
load_theme_textdomain('wope', get_template_directory() . '/languages/');

//content width
if ( ! isset( $content_width ) )
$content_width = 600;

//config directory
define( 'DS', DIRECTORY_SEPARATOR );
define('THEME_PATH', dirname(__FILE__) . DS);
define('LIB_PATH', THEME_PATH . 'lib' . DS);

//include comment functions
include(LIB_PATH.'common_functions.php');

//setup the theme
add_action( 'after_setup_theme', 'wope_setup' );
function wope_setup() {
	set_post_thumbnail_size( 780, 9999);
	add_image_size( 'post-thumb-big', 780, 9999 ); 
	add_image_size( 'post-thumb-relative', 400, 240,true ); 
	add_image_size( 'post-thumb-widget', 60, 60,true ); 
	add_image_size( 'page-featured', 1200, 9999 ); 
	add_image_size( 'page-featured-sidebar', 780, 9999 ); 
	
}

function wope_register_my_menus() {
	register_nav_menus(
		array( 'main-menu' => 'Main Menu'  , 'footer-menu' => 'Footer Menu')
	);
}
add_action( 'init', 'wope_register_my_menus' );

//load widgets & sidebars
include(LIB_PATH.'widgets.php');
include(LIB_PATH.'sidebars.php');

//load post meta
include(LIB_PATH.'post.php');

//load page setting
include(LIB_PATH.'page.php');

//build judyblog admin menu & page
add_action( 'admin_menu', 'wope_admin_menu' );
function wope_admin_menu(){
	add_menu_page( 'JudyBlog', 'JudyBlog' , 'manage_options', 'theme-judyblog', 'wope_admin_page');

}
function wope_admin_page(){
	//load admin page
	get_template_part("font_list");
	include(LIB_PATH.'setting_page.php');
}

//load css & js files for admin page
add_action( 'admin_init', 'wope_register_script_style' );

//load jquery lib and functions to admin page
function wope_register_script_style(){
	//Sandy required file
	wp_register_script( 'wope-jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.js' );
	wp_register_script( 'wope-admin-script',get_template_directory_uri() .'/js/admin_script.js', __FILE__ );
	wp_register_style( 'wope-admin-style', get_template_directory_uri() .'/admin.css' , __FILE__ );
	//jpicker required files
	wp_register_script( 'wope-admin-jpicker-script', get_template_directory_uri() .'/js/jpicker/jpicker-1.1.6.min.js' , __FILE__ );
	wp_register_style( 'wope-admin-jpicker-style', get_template_directory_uri() .'/js/jpicker/jPicker-1.1.6.min.css' , __FILE__ );
	wp_register_style( 'wope-admin-font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.min.css' , __FILE__ );
}

//load script in front end
function wope_load_script_frontend(){
	//front end script
	wp_register_script( 'wope-jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.js' ,'',false,true );
	wp_register_script( 'wope-frontend-script',get_template_directory_uri() .'/js/script.js','',false,true);
	wp_register_script( 'wope-frontend-flex-slider',get_template_directory_uri() .'/js/flex-slider/jquery.flexslider-min.js','',false,true );
	wp_register_script( 'wope-frontend-prettyPhoto',get_template_directory_uri() .'/js/prettyPhoto/js/jquery.prettyPhoto.js','',false,true );
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-accordion' );
	wp_enqueue_script( 'wope-frontend-script' );
	wp_enqueue_script( 'wope-jquery-easing' );
	wp_enqueue_script( 'wope-frontend-flex-slider' );
	wp_enqueue_script( 'wope-frontend-prettyPhoto' );
	
}
add_action('wp_enqueue_scripts', 'wope_load_script_frontend');

//load style in front end
function wope_load_style_frontend(){
	$font_options = get_option('wope-font');
	$color_options = get_option('wope-color');

	//front end script
	wp_register_style( 'wope-default-style', get_stylesheet_uri ()  );
	wp_register_style( 'wope-color', get_template_directory_uri() .'/color-scheme/color.css' );
	wp_register_style( 'wope-responsive', get_template_directory_uri() .'/responsive.css' );
	wp_register_style( 'wope-font', get_template_directory_uri() .'/font-set/typography.css' );
	wp_register_style( 'wope-flexslider', get_template_directory_uri() .'/js/flex-slider/flexslider.css' );
	wp_register_style( 'wope-prettyPhoto', get_template_directory_uri() .'/js/prettyPhoto/css/prettyPhoto.css' );
	wp_register_style( 'wope-font-awesome', get_template_directory_uri() .'/font-awesome/css/font-awesome.min.css' , __FILE__ );
	
	
	
	global $font_list;
	get_template_part('font_list');
	$unique_font_option = array_unique($font_options);
	foreach($unique_font_option as $each_font){
		if($key = array_key_exists($each_font,$font_list)){
			wp_register_style( 'wope-gfont-'.$each_font,'http://fonts.googleapis.com/css?family='.$font_list[$each_font][1]);
			wp_enqueue_style('wope-gfont-'.$each_font);
		}
	}
	
	wp_enqueue_style('wope-default-style');
	wp_enqueue_style('wope-responsive');
	wp_enqueue_style('wope-color');
	wp_enqueue_style('wope-font');
	wp_enqueue_style('wope-flexslider');	
	wp_enqueue_style('wope-prettyPhoto');	
	wp_enqueue_style('wope-font-awesome');
}

add_action('wp_enqueue_scripts', 'wope_load_style_frontend');

//load custom script and javascript in header
add_action('wp_head', 'wope_load_custom_js_css');
function wope_load_custom_js_css(){
	$main_option = get_option('wope-main');
	if(!empty($main_option['custom_js'])){
		if(trim($main_option['custom_js']) != ''){?>
			<script type='text/javascript'>
				<?php echo $main_option['custom_js'];?>
			</script>
		<?php }
	}
	
	if(!empty($main_option['custom_css'])){
		if(trim($main_option['custom_css']) != ''){?>
			<style type="text/css">
				<?php echo $main_option['custom_css'];?>
			</style>
		<?php }
	}
};


//load style and script into admin setting page
add_action('admin_enqueue_scripts', 'wope_enqueue_script');
add_action('admin_enqueue_scripts', 'wope_enqueue_style');
function wope_enqueue_script() {
	if(!empty($_GET['page'])){
		if($_GET['page'] == 'theme-judyblog' ){
			//admin scripts
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'jquery-ui-core' );
			wp_enqueue_script( 'jquery-ui-sortable' );
			wp_enqueue_script( 'jquery-ui-draggable' );
			wp_enqueue_script( 'wope-admin-script' );
			wp_enqueue_script( 'wope-jquery-easing' );
			
			//jpicker
			wp_enqueue_script( 'wope-admin-jpicker-script' );
			wp_enqueue_script( 'wope-admin-jquery-form' );
			//wp uploader
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}

function wope_enqueue_style() {
	//admin style
	wp_enqueue_style( 'wope-admin-style' );
	//jpicker style
	wp_enqueue_style( 'wope-admin-jpicker-style' );
	//wp uploader style
	wp_enqueue_style('thickbox');
	//font awesome
	wp_enqueue_style('wope-admin-font-awesome');
}



//load script & styles for only edit page in admin
add_action('admin_enqueue_scripts', 'wope_enqueue_page_builder_script');

function wope_enqueue_page_builder_script() {
	if(get_post_type() == 'page'){
		//admin scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'wope-admin-script' );
		wp_enqueue_script( 'wope-jquery-easing' );
		
		//jpicker
		wp_enqueue_script( 'wope-admin-jpicker-script' );
		wp_enqueue_script( 'wope-admin-jquery-form' );
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
		
	}elseif(get_post_type() == 'post'){
		//admin scripts
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-ui-draggable' );
		wp_enqueue_script( 'wope-admin-script' );
		wp_enqueue_script( 'wope-jquery-easing' );
		
		//jpicker
		wp_enqueue_script( 'wope-admin-jpicker-script' );
		wp_enqueue_script( 'wope-admin-jquery-form' );
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}elseif(get_post_type() == 'element'){
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'wope-admin-script' );
		
		//jpicker
		wp_enqueue_script( 'wope-admin-jpicker-script' );
		wp_enqueue_script( 'wope-admin-jquery-form' );
		
		//wp uploader
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
}


//filder for wp uploader
add_filter('get_media_item_args', 'wope_get_media_item_args');
function wope_get_media_item_args($args) {    
	$args['send'] = true;
	return $args;
}



//function to show post nave links
function wope_post_nav_link(){
	global $wp_query;  
	if ( $wp_query->max_num_pages > 1 ){
	?>
		<div class="posts-navigation"><p><?php posts_nav_link(); ?></p></div>
	<?php
	}
}


//init data for theme
if( !get_option( 'judyblog-init-data') ){

	$theme_url = get_template_directory_uri();

	update_option( 'judyblog-init-data', 1);
	
	//Main options
	$main_option_array = array(
		'logo_url' 					=> '',
		'logo_retina_url' 			=> '',
		'logo_retina_width' 		=> '',
		'logo_retina_height' 		=> '',
		'favicon_url' 				=> '',
		'copyright' 				=> 'Copyright 2014 JudyBlog - Designed by  <a href="http://wopethemes.com/">Wopethemes</a>',
		'tracking_code' 			=> '',
		'custom_js' 				=> '',
		'custom_css' 				=> '',
	);
	update_option( 'wope-main', $main_option_array);
	
	//post options
	$post_option_array = array(
		'relative_post' 		=> 1,
		'relative_post_number' 	=> 4
	);
	update_option( 'wope-post', $post_option_array);
	
	//sidebar options
	$sidebar_option_array = array(
		'category_sidebar' 		=> 'index-sidebar',
		'index-sidebar' 		=> 'index-sidebar',
		'single-sidebar' 		=> 'index-sidebar',
		'archive-sidebar' 		=> 'index-sidebar',
		'category-sidebar' 		=> 'index-sidebar',
		'author-sidebar' 		=> 'index-sidebar',
		'tag-sidebar' 			=> 'index-sidebar',
		'search-sidebar' 		=> 'index-sidebar',
	);
	update_option( 'wope-sidebar', $sidebar_option_array);
	
	$font_option_array = array(
		'font_menu' => 'Lato',
		'font_heading' => 'Lato',
		'font_body' => 'Open Sans',
	);
	update_option( 'wope-font', $font_option_array);
	
	$color_option_array = array(
		'main-color' 	=> '00a68e',
	);
	update_option( 'wope-color', $color_option_array);
	
}

if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 


/* button shortcode */

function wope_button_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'white',
		'icon' => '',
		'blank' => 1,
	), $atts ) );
	
	if(trim($icon) != ''){
		$icon_html = '<i class="fa '.$icon.'"></i>';
	}else{
		$icon_html = '';
	}
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="normal-button '.$color.'-button"  href="'.$url.'">'.$icon_html.$label.'</a>';
}
add_shortcode( 'button', 'wope_button_shortcode' );

function wope_button_small_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'white',
		'icon' => '',
		'blank' => 1,
	), $atts ) );
	
	if(trim($icon) != ''){
		$icon_html = '<i class="fa '.$icon.'"></i>';
	}else{
		$icon_html = '';
	}
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="small-button '.$color.'-button" href="'.$url.'">'.$icon_html.$label.'</a>';

}
add_shortcode( 'button-small', 'wope_button_small_shortcode' );

function wope_button_big_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'url' => '#',
		'label' => 'Button',
		'color' => 'white',
		'icon' => '',
		'blank' => 1,
	), $atts ) );
	
	if(trim($icon) != ''){
		$icon_html = '<i class="fa '.$icon.'"></i>';
	}else{
		$icon_html = '';
	}
	
	if(trim($blank) == 0){
		$blank_html = '';
	}else{
		$blank_html = 'target="_blank"';
	}
	
	return '<a '.$blank_html.' class="big-button '.$color.'-button" href="'.$url.'">'.$icon_html.$label.'</a>';

}
add_shortcode( 'button-big', 'wope_button_big_shortcode' );

/* social shortcode */
function wope_social_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'type',
		'url' => '#',
	), $atts ) );

	return '<a target="_blank"  class="social-icon social-'.$type.'" href="'.$url.'"><i class="fa fa-'.$type.'"></i></a>';
}
add_shortcode( 'social', 'wope_social_shortcode' );

/* youtube shortcode */
function wope_youtube_shortcode( $atts , $content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	return '<div class="youtube-container">'.apply_filters('the_content', $content).'</div>';
}
add_shortcode( 'youtube', 'wope_youtube_shortcode' );

/* vimeo shortcode */
function wope_vimeo_shortcode( $atts , $content = null) {
	extract( shortcode_atts( array(
	), $atts ) );

	return '<div class="vimeo-container">'.apply_filters('the_content', $content).'</div>';
}
add_shortcode( 'vimeo', 'wope_vimeo_shortcode' );

/* accordion shortcode */
function wope_accordion_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		
	), $atts ) );

	return '<div class="accordion">' . parse_shortcode_content($content) . '</div>';
	
}
add_shortcode( 'accordion', 'wope_accordion_shortcode' );

function wope_accordion_item_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Your Title'
	), $atts ) );
	
	return '<div class="accor-title">'.$title.'<span class="accor-title-icon"><i class="fa fa-arrow-down"></i></span></div>
		<div class="accor-content">'.$content.'</div>';
}
add_shortcode( 'accordion-item', 'wope_accordion_item_shortcode' );

/* tab shortcode */
$tab_top_global 	= ''; 
$tab_bottom_global 	= '';
function wope_tab_shortcode( $atts , $content = null ) {
	global $tab_top_global;
	global $tab_bottom_global;
	$tab_top_global = ''; //reset it
	$tab_bottom_global = ''; //reset it
	
	$return = parse_shortcode_content($content).'<div class="tab"><div class="tab-top">'.$tab_top_global.'</div><div class="tab-bottom">'.$tab_bottom_global.'</div></div>';
	
	return $return;
	
}
add_shortcode( 'tab', 'wope_tab_shortcode' );

function wope_tab_item_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'title' => 'Your Title'
	), $atts ) );
	
	global $tab_top_global;
	global $tab_bottom_global;
	
	$tab_top_global .= '<div class="tab-title">'.$title.'</div>';
	$tab_bottom_global .= '<div class="tab-content content">'.$content.'</div>';
	
	return '';
}
add_shortcode( 'tab-item', 'wope_tab_item_shortcode' );

function wope_info_box_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'type' => 'general'
	), $atts ) );
	
	return '<div class="info-box '.$type.'-box" >
		<div class="info-box-remove"><i class="fa fa-trash-o"></i></div>
		'.$content.'</div>';
}
add_shortcode( 'info-box', 'wope_info_box_shortcode' );

function wope_dropcap_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'style' => '1'
	), $atts ) );
	
	return '<span class="dropcap dropcap-style'.$style.'" >'.$content.'</span>';
}
add_shortcode( 'd', 'wope_dropcap_shortcode' );


/* custom list shortcode */
function wope_list_shortcode( $atts , $content = null ) {
	return '<ul class="custom-list">' . parse_shortcode_content($content) . '</ul>';
}
add_shortcode( 'list', 'wope_list_shortcode' );

function wope_list_child_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'icon' => '',
	), $atts ) );
	
	if($icon != ''){
		$icon_html = '<i class="fa '.$icon.'"></i> '; 
	}else{
		$icon_html = '';
	}
	
	return '<li>' . $icon_html . $content . '</li>';
	
}
add_shortcode( 'list-child', 'wope_list_child_shortcode' );

/* column shortcode */
function wope_column_shortcode( $atts , $content = null ) {
	extract( shortcode_atts( array(
		'width' => '',
		'last' => 0,
	), $atts ) );
	
	if($last == 1){
		$column_class = 'column-last';
		$last_after = '<div class="cleared"></div>';
	}else{
		$column_class = '';
		$last_after = '';
	}
	
	
	return '<div class="column column'.$width.' '.$column_class.'">' . parse_shortcode_content($content) . '</div>'.$last_after;
	
}
add_shortcode( 'column', 'wope_column_shortcode' );

/* archive shortcode */
function wope_archive_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'type' => 'latest',
		'count' => 5,
	), $atts ) );
	
	switch($type){
		case 'latest':
			$args = array('posts_per_page' => $count);
			// The Query
			$the_query = new WP_Query( $args );
			// The Loop
			if ( $the_query->have_posts() ) {
					$html .= '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$html .= '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
				}
					$html .= '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			break;
		case 'popular':
			$args = array('posts_per_page' => $count,'orderby' => 'comment_count');
			// The Query
			$the_query = new WP_Query( $args );
			// The Loop
			if ( $the_query->have_posts() ) {
					$html .= '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$html .= '<li><a href="'.get_permalink().'">' . get_the_title() . '</a> ('.get_comments_number().')</li>';
				}
					$html .= '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			break;
		case 'category':
			$html .= '<ul>';
			$html .= wp_list_categories( 'echo=0&title_li=&show_count=true' );
			$html .= '</ul>';
			
			break;
		case 'archive':
			$args = array(
				'type' => 'monthly',
				'echo' => false,
				'show_post_count' => true, 
			);
			$html .= '<ul>';
			$html .= wp_get_archives( $args );
			$html .= '</ul>';
			
			break;
		case 'tag':
			$tags = get_tags();
			$html = '<ul>';
			foreach ( $tags as $tag ) {
				$tag_link = get_tag_link( $tag->term_id );
						
				$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
				$html .= "{$tag->name}</a> ({$tag->count})</li>";
			}
			$html .= '</ul>';
			break;
		case 'author':
			$html = wp_list_authors('hide_empty=0&show_fullname=1&optioncount=1&echo=0&exclude_admin=0'); 
			break;
	}

	return $html;
}
add_shortcode( 'archive', 'wope_archive_shortcode' );

// embed the javascript file that makes the AJAX request
wp_enqueue_script( 'my-ajax-request', get_template_directory_uri() . '/js/ajax-like.js', array( 'jquery' ) );
// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

//send to admin-ajax
add_action( 'wp_ajax_nopriv_post_like', 'post_like_handle' );
add_action( 'wp_ajax_post_like', 'post_like_handle' );
function post_like_handle() {
	$post_id = $_POST['post_id'];
	$post_type = $_POST['post_type'];
	$cookie_name = 'liked_'.$post_type.'_'.$post_id;
	$meta_name = $post_type.'_like_number';

	if($post_id != ''){
		if(empty($_COOKIE[$cookie_name]) ){
			$can_like = true;
		}else{
			if($_COOKIE[$cookie_name] == 1){
				$can_like = false;
			}else{
				$can_like = true;
			}
		}
		
		if($can_like == true){
			if (is_ssl()) {
				$secure = true;
			}else{
				$secure = false;
			}
			setcookie($cookie_name, 1, time() + 60*60*24*365, COOKIEPATH, COOKIE_DOMAIN, $secure, true);
			$like_number 	= get_post_meta( $post_id,$meta_name , true );
			$like_number ++;
			update_post_meta( $post_id, $meta_name,$like_number );
			echo 'success_liked';
		}else{
			echo 'unsuccess_liked';
		}
	}
 
    // IMPORTANT: don't forget to "exit"
    exit;
}
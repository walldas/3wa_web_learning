jQuery(document).ready(function(){
	var pathname = window.location.pathname;
	var pos = pathname.indexOf('wp-admin');
	var theme_url = pathname.substr(0,pos) + 'wp-content/themes/judyblog/';
	
	jQuery('#wope_colorpicker_input').jPicker({
		images:{
			clientPath: theme_url+'js/jpicker/images/'
		},
		window:{
			effects:{
				type: 'slide',
				speed: {
					show : 'fast',
					hide : 'fast'
				}
			},
			position:{
				x:'screenCenter',
				y:'120px'
			}
		}
	},function(color, context){
		jQuery('.jPicker').css('z-index','200');
		jQuery('.jPicker').css('position','fixed');
	});
	
	jQuery('.color-picker').jPicker({ //color scheme
		images:{
			clientPath: theme_url+'js/jpicker/images/'
		},
		window:{
			effects:{
				type: 'slide',
				speed: {
					show : 'fast',
					hide : 'fast'
				}
			},
			position:{
				x:'screenCenter',
				y:'-100px'
			}
		}
	});
	
	// Uploading files
	var file_frame;
	var uploaded_input;
	var uploaded_input_width;
	var uploaded_input_height;
	var uploaded_image;
	jQuery('.upload_button').live('click', function( event ){
		uploaded_input 			= jQuery(this).prev('input'); 
		uploaded_input_height 	= jQuery(uploaded_input).prev('input'); 
		uploaded_input_width 	= jQuery(uploaded_input_height).prev('input'); 
		uploaded_image 			= jQuery(this).parent().parent().find('.uploaded_image');
		
		
		
		event.preventDefault();
		// If the media frame already exists, reopen it.
		if ( file_frame ) {
			file_frame.open();
			return;
		}
 
		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Upload Image',
			button: {
				text: 'Select',
			},
			multiple: false  // Set to true to allow multiple files to be selected
		});
 
		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
			// We set multiple to false so only get one image from the uploader
			attachment = file_frame.state().get('selection').first().toJSON();
	 
			// Do something with attachment.id and/or attachment.url here
			jQuery(uploaded_input).val(attachment.url);
			jQuery(uploaded_input_width).val(attachment.width);
			jQuery(uploaded_input_height).val(attachment.height);
			jQuery(uploaded_image).attr('src',attachment.url);
			
			jQuery(uploaded_input_height).show();
		});
 
		// Finally, open the modal
		file_frame.open();
	});
	
	jQuery('.remove_image').click(function(){
		jQuery(this).parent().find('input[type=text]').val('');
		jQuery(this).parent().parent().find('img').attr('src','');
	});
	
	/*
	var my_original_editor = window.send_to_editor;
	jQuery('.upload_button').live("click",function() {
		uploadID = jQuery(this).prev('input'); 
		uploaded_image = jQuery(this).parent().parent().find('.uploaded_image');
		tb_show('', 'media-upload.php?TB_iframe=true');
		window.send_to_editor = function(html) {
			imgurl = jQuery(html).attr('href');
			uploadID.val(imgurl);
			uploaded_image.attr('src',imgurl);
			tb_remove();
			window.send_to_editor = my_original_editor;
		};
		return false;
	});
	*/
	
	//option tabs
	jQuery('#option-tab-buttons div').click(function(){
		var button_id = jQuery(this).attr('id');
		if(jQuery(this).hasClass('tab-current')	){
		}else{
			jQuery('#option-tab-buttons').find('div').removeClass('tab-current');
			jQuery(this).addClass('tab-current');
		}
		jQuery('.option-tab').hide();
		jQuery('#'+button_id+'-content').show();
	});
	
	//get #tab from url
	var query = location.href.split('#');
	
	
	if(query[1] != undefined){
		//active current tab buttons
		jQuery('#option-tab-buttons').find('div').removeClass('tab-current');
		jQuery('#option-tab-buttons').find('#option-tab-'+query[1]).addClass('tab-current');
		
		//show the current tab content
		jQuery('.option-tab').hide();
		jQuery('#option-tab-'+query[1]+'-content').show();
	};
	
	jQuery('.color-scheme').click(function(){
		var main_color 		= jQuery(this).find('.main-code').html();
		jQuery.jPicker.List[0].color.active.val('hex', main_color, this);
	});
	
	//font change
	jQuery(".font_selector").change(function() {
		var font_name = jQuery(this).find('option:selected').text();
		jQuery('<link/>', {
			href: 'http://fonts.googleapis.com/css?family=' + encodeURI(font_name),
			rel: 'stylesheet',
			type: 'text/css'
		}).appendTo('head');
		
		jQuery(this).parent().find('.font_textarea').css('font-family', font_name);    

	});
	
	jQuery('.flexible-upload-button').click(function(){
		var copied_upload = jQuery(this).parent().find('.flexible-upload').find('div').last().clone();
		jQuery(this).parent().find('.flexible-upload').append(copied_upload);
	});

});


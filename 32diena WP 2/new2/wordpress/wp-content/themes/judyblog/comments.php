<?php
/**
 * The template for displaying Comments.
 *
 */
?>
	
	<?php if ( post_password_required() ) { ?>
	<div id="comment-section">
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'wope' ); ?></p>
	</div>
	<?php } ?>
	<?php if( comments_open() ) {?>
		<?php if(wp_count_comments($post->ID)->approved > 0 ){?>
		<div id="comment-section">
			<div class="comment-number post-section-title">
				<span><?php comments_number(  __('No Comment','wope') , __('1 Comment','wope'), __('% Comments','wope') ); ?></span>
			</div>
					
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // Are there comments to navigate through? ?>
				<div class="comment-navigation">
					<div class="comment-previous"><?php previous_comments_link( __( 'Older Comments <span class="meta-nav"> &rarr;</span>', 'wope' ) ); ?></div>
					<div class="comment-next"><?php next_comments_link( __( '<span class="meta-nav">&larr;</span> Newer Comments', 'wope' ) ); ?></div>
					<div class="cleared"></div>
				</div> <!-- .navigation -->
			<?php } // check for comment navigation ?>
			
			<div id="comment-container">
				<ul>
				<?php 
				 $args = array(
					'type=' => 'comment',
					'callback' => 'wope_comment',
					'reverse_top_level' => true,
					'reverse_children'  =>  false 
				); 
				wp_list_comments( $args ); ?> 
				</ul>		
			</div>
			
			
		</div>
		<?php }?>
		
		<div id="comment-form">
			<?php wope_comment_form(); ?> 
		</div>
			
	<?php }?>
<?php

//wope comment forum
function wope_comment_form(){
	$post_option = get_option('wope-post');
	
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => 	'<div class="comment-form-left">
							<div class="comment-form-author">' .
							__('Your Name*','wope').' <br>
							<input id="comment-author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . '  />' .
						'</div>',
		'email'  => 	'<div class="comment-form-email"> '.
							__('Your E-Mail*','wope').' <br>
							<input id="comment-email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />'
						.'</div>',
		'url'    => 	'<div class="comment-form-url">'.
							__('Your Webpage','wope').' <br>
							<input id="comment-url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" ' . $aria_req . ' />'.
						'</div></div>',
	);
	
	$args = array(
		'fields' => $fields,
		'title_reply' => '<span>'.__( 'Leave Your Comment' , 'wope').'</span>',
		'label_submit' => __( 'Submit Your Comment' , 'wope' ),
		'comment_field' => '<p class="comment-form-comment">'
								.__('Your Comment*','wope').' <br>
								<textarea name="comment" rows="4" ></textarea>
						</p>',
		'comment_notes_before'	=> '',	
	);
	comment_form($args);
}

//setup comment section
function wope_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div class="comment-entry" >
			<div class="comment-entry-left" >
				<div class="comment-avatar">
					<?php echo get_avatar( $comment->comment_author_email, 100 ); ?>
				</div>
				<div class="comment-author">
						<?php printf(('%s'), get_comment_author_link()); ?>
					</div>
			</div>
			<div class="comment-entry-right" >
				<div class="comment-entry-right-inner">
					<div class="comment-date">
						<i class="fa fa-calendar"></i>
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s','wope'), get_comment_date(),  get_comment_time()) ?></a> <?php edit_comment_link('(Edit)','  ','') ?>
					</div>
					<span class="comment-reply">
						
						<?php comment_reply_link(array_merge( $args, array('reply_text' => __('<i class="fa fa-mail-forward"></i> Reply','wope'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					</span>
					<div class="comment-content content">
						<?php if ($comment->comment_approved == '0'){ ?>
							<div class="comment-awaitting"> 
								<?php _e('Your comment is awaiting moderation.','wope') ?>
							</div>
						<?php } ?>
						<?php comment_text(); ?>
					</div>
				</div>
			</div>
			<div class="cleared"></div>
		</div><!-- End Comment entry-->
	</li>
<?php
}

?>
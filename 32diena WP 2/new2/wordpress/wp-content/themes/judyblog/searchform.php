<?php
/**
 * The template for displaying search forms 
 */
?>
	<div class="widget_search">
		<div class="search-form content">
			<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="text" class="search-input" name="s" id="s" value="<?php echo get_search_query();?>" placeholder="<?php _e( 'Key Words', 'wope' ); ?>" />
				<input type="submit" class="search-button" name="submit" id="searchsubmit" value="<?php _e( 'Search', 'wope' ); ?>" />
			</form>
		</div>
	</div>
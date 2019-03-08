<?php
/**
 * The template for displaying the footer.
 */
$main_option = get_option('wope-main');
$social_option = get_option('wope-social');
$sidebar_options = get_option('wope-sidebar');

$sidebar_count = 1;
$actived_sidebar = array();
for($i=1; $i<=4 ;$i++){
	if(is_active_sidebar('footer-sidebar'.$i)){
		$actived_sidebar[$sidebar_count] = 'footer-sidebar'.$i;
		$sidebar_count++;
	}
}

$total_actived_sidebar = count($actived_sidebar);
?>			
		<div id="footer">
			<?php if( $total_actived_sidebar>0){?>
				<div class="wrap">	
					<div class="content">
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-sidebar1' );?>
						</div>
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-sidebar2' );?>
						</div>
						<div class="footer-column column-last">
							<?php dynamic_sidebar( 'footer-sidebar3' );?>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			<?php }?>
		</div> <!-- End Footer -->
		<div id="footer-bottom">
			<div class="wrap">	
				<div id="footer-copyright">
					<div class="footer-text">
						<?php echo $main_option['copyright'];?>
					</div>
				</div>
				<div id="footer-right">
					<?php 
						if ( has_nav_menu('footer-menu')){
							wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
							echo '<div class="cleared"></div>';
						}
					?> 
				</div>
				<div class="cleared"></div>
			</div>
		</div><!-- End Footer Bottom -->
		
	</div><!-- End Page -->
</div><!-- End Site Background -->

<?php echo $main_option['tracking_code'];?>
<?php wp_footer(); ?>
</body>
</html>

<?php get_header(); ?>


<section class="clearfix">



<?php 
$right_class="";
$title= get_post_meta($post->ID, 'titleK', true);


?>

<?php if ($title){ ?>


				<div class="kaire clearfix"><article >
					<header> <h2> <i class="fa fa-pagelines" aria-hidden="true"></i>
						<?php echo get_post_meta($post->ID, 'titleK', true); ?></h2> </header>
						<img src="img/who.jpg" alt="">
						<?php echo get_post_meta($post->ID, 'kaire', true); ?>
					
					<div class="clearfix"></div>
				</article></div>
				<?php  

				$right_class="desine";
					}
				?>

				<article>
				<div class="<?php echo $right_class ?> clearfix">
				<section>
					<header> <h2 ><i class="fa fa-pagelines" aria-hidden="true"></i><?php the_title(); ?></h2> 
					</header>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php the_content(); ?>
							</article>
						<?php endwhile; ?>
						<?php else: ?>
							<article>
								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
							</article>
						<?php endif; ?>
								
							

						
						</section>
					</article></div>
				</section>



	

<?php get_footer(); ?>

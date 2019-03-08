<?php
/* Template Name: Kontaktai puslapio */ 
get_header(); ?>
<section class="clearfix">
	<div class="desine2 clearfix">
			<header> <h2 > 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.734296957536!2d25.265054216226897!3d54.67910488027988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9472c09e8bb1%3A0x8d2b9e6b4a1aa84f!2s%C5%A0vitrigailos+g.+8%2C+Vilnius+03223!5e0!3m2!1slt!2slt!4v1483967711483" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</header>
	</div>
	<div class="kaire2 clearfix">
		
			<header> <h2 > <i class="fa fa-home"></i><?php the_title(); ?></h2></header>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
			<?php endif; ?>
	</div>

	<?php get_footer(); ?>

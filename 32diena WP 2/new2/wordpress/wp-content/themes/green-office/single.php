<?php get_header(); ?>
	<main role="main">
	<section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			
			
			<?php the_content(); // Dynamic Content ?>
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
		</article>
	<?php endwhile; ?>
	<?php else: ?>
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
	<?php endif; ?>
	</section>
	</main>
<?php get_footer(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php 
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} 
	?>
	<h1><?php the_title() ;?></h1>
	<p class="byline">
		<div><?php the_time(__('F j, Y')); ?></div>
		<div><?php the_author_posts_link(); ?></div>
		<?php edit_post_link(__('Edit', 'example'), ' <span class="sep">|</span> <span class="edit">', '</span> '); ?>
	</p>
	<?php the_excerpt(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>
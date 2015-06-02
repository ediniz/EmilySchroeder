<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title() ;?></h1>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>

			<?php endwhile; else: ?>

				<p>Sorry, no posts to list</p>

			<?php endif; ?>
		</div>
		<div class="col-lg-1"></div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
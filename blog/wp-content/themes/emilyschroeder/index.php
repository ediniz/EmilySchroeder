<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">

			<?php get_template_part( 'content', 'none' ); ?>
		</div>
		<div class="col-lg-1"></div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
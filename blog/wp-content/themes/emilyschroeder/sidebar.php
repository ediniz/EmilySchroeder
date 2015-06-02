<div id="sidebar"class="col-lg-3">
	<?php _e('<h2 class="navy">Search</h2>'); ?>
	<?php get_search_form(); ?>
	<hr/>
	<?php _e('<h2 class="navy">Categories</h2>'); ?>
	<ul><?php wp_list_cats(); ?></ul>
	<hr>
	<?php _e('<h2 class="navy">Archives</h2>'); ?>
	<ul><?php wp_get_archives('type=monthly'); ?></ul>
</div>
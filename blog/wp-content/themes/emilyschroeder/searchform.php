<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<input type="search" class="search-field searchbar" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" size="100%" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
</form>
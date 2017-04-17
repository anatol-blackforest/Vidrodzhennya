<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-query" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" class="lupa" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
</form>
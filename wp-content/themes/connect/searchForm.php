<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="text" class="searchBox" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type=image  class="searchIcon" src="<?php bloginfo('template_directory'); ?>/images/searchWhite.png" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"/>
	</div>
</form>
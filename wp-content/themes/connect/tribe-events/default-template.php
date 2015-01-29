<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header(); ?>
<div id="body">
<div class="alignment">
<nav id="sideMenu">
	<?php	
	$args = array(
    'menu'    => 'Top Nav',
    'submenu' => 'Get Involved',
    'highlight' =>'Calendar'
);

wp_nav_menu( $args ); ?>
	</nav>
	<section>
	<div id="tribe-events-pg-template">
		<?php tribe_events_before_html(); ?>
		<?php tribe_get_view(); ?>
		<?php tribe_events_after_html(); ?>
	</div> <!-- #tribe-events-pg-template -->

</section>
</div>
</div>
<?php get_footer(); ?>
<?php
//ShortCodes
function infoBox_shortcode( $atts, $content = null ) {

	 $a = shortcode_atts( array(
        'title' => 'Default Title'
       
    ), $atts );

	return '<div class="infoBox"><h1>'.$a['title'].'</h1>' . $content . '</div>';
}
add_shortcode( 'info-box', 'infoBox_shortcode' );


// Account Info Page
function auth_redirect_login() {
	$user = wp_get_current_user();
	if ( $user->id == 0 ) {
		nocache_headers();
		wp_redirect(get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode($_SERVER['REQUEST_URI']));
		exit();
	}
}


//Header--------------------------------------
function getPostLinksForCategory($category){
	$links = "<ul>";

	query_posts('category_name='.$category);
	
	$i = 0; 

	while (have_posts() && $i < 3) : the_post();
		$links = $links . "<li><a href='".get_permalink('echo=0')."'>".the_title_attribute('echo=0')."</a></li>";
	
	$i++;
	endwhile;
 	wp_reset_query();



	$links = $links ."</ul>";
	return $links;
}

function generateSidebar(){
	

}

function loginLink(){

	if ( is_user_logged_in() ) {
		global $current_user;
		get_currentuserinfo();
		if (!current_user_can('administrator') && !is_admin()) {
			if( $current_user->user_firstname ){

				return '<div class="loginLinks"><a href="index.php?page_id=32">'. $current_user->user_firstname .'</a>' .'|<a href='.wp_logout_url( $redirect ).'>Sign Out</a></div>';
			}
			else{
				return '<div class="loginLinks"><a href="index.php?page_id=32">'. $current_user->user_login.'</a></div>';
			}
		}
		else{
			if( $current_user->user_firstname ){

				return '<div class="loginLinks"><a href="wp-admin">'. $current_user->user_firstname .'</a>' .'|<a href='.wp_logout_url( $redirect ).'>Sign Out</a></div>';
			}
			else{
				return '<div class="loginLinks"><a href="wp-admin">'. $current_user->user_login.'</a></div>';
			}

		}
	}
	else{
		return '<div class="loginLinks"><a href="wp-login.php">Sign In</a> |'.  wp_register('', '',$echo) . '</div>';
;
	}
}

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

function register_my_menus() {
  register_nav_menus(
    array(
      'support-programs' => __( 'Support - Programs' ),
      'support-resources'=> __('Support - Resources'),
      'support-actions'=> __('Support - Actions'),

      'education-events' => __( 'Education - Events' ),
      'education-resources' => __( 'Education - Resources' ),
      'education-actions' => __( 'Education - Actions' ),

      'outreach-information' => __('Outreach - Information'),
      'outreach-actions' => __('Outreach - Actions'),

      'involved-community' => __('Get Involved - Community'),
      'involved-social' => __('Get Involved - Social'),
      'involved-actions' => __('Get Involved - Actions'),

      'crisis-resources'=> __('In Crisis - Resources')
    )
  );

}

add_action( 'init', 'register_my_menus' );
add_action('after_setup_theme', 'remove_admin_bar');
?>
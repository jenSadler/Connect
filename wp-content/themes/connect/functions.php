<?php
//ShortCodes
function infoBox_shortcode( $atts, $content = null ) {

	 $a = shortcode_atts( array(
        'title' => 'Default Title'
       
    ), $atts );

	return '<div class="infoBox '.$atts['bgcolor'].'"><h1>'.$a['title'].'</h1>' . $content . '</div>';
}
add_shortcode( 'info-box', 'infoBox_shortcode' );


function slider_shortcode( $atts ){
  $output="<div id='slider'>";
  $args = array( 'numberposts' => '3','meta_key' => '_thumbnail_id' );
  $recent_posts = wp_get_recent_posts( $args );

  $eventargs = array( 'numberposts'=>'3' );
  $recent_events = tribe_get_events( $eventargs );
  $countPosts = 0;
  foreach( $recent_posts as $recent ){
    $post = get_post($recent["ID"]);
    if($countPosts ==0){
      $output.= '<div class="active"><div class="imageBox"><a href="' . get_permalink($recent["ID"]). '">' . get_the_post_thumbnail($recent['ID'], 'banner') .'</a>';
    }
    else{

       $output.= '<div><a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail($recent['ID'], 'banner') .'</a>';

    }

    $output.='<div class="holdDots">';

    for($i=0;$i<count($recent_posts)+count($recent_events);$i++){
      if($i==$countPosts){
          $output .= '<div class="activeDot"></div>';

      }
      else{
        $output .='<div class = "dot"></div>';
      }
    }
    $output .='</div>';
    $output.= '</div> ';

    $output.= '<div class = "description">';
    $output.= '<h1 class="slider">'.$post->post_title.'</h1>';
    $output.= '<p class="slider">'.$post->post_excerpt.'</p>';
    $output.= '</div></div>';
    $countPosts++;
  }
  
  $countEvents=0;

  foreach( $recent_events as $recentevent ){
    $output.= '<div><div class="imageBox"><a href="' . get_permalink($recentevent->ID) . '">' . get_the_post_thumbnail($recentevent->ID, 'banner') .'</a> ';

    $output.='<div class="holdDots">';
    for($j=0;$j<count($recent_posts)+count($recent_events);$j++){
        if($j==$countEvents +count($recent_posts)){
            $output .= '<div class="activeDot"></div>';

        }
        else{
          $output .='<div class = "dot"></div>';
        }
    }
    $output .="</div>";
    $output.= '</div> ';
    
    $output.= '<div class = "description">';
    $output.= '<h1 class="slider">'.$recentevent->post_title.'</h1>';
    $output.= '<p class="slider">'.$recentevent->post_excerpt.'</p>';
    $output.= '</div></div>';
    $countEvents++;
  }

  $output .= "</div>";

  return $output;
}

function slider2_shortcode( $atts ){
  $output = '<div id="holdSlider">';
  $output.='<div id="slider">';
  $args = array( 'numberposts' => '3','meta_key' => '_thumbnail_id' );
  $recent_posts = wp_get_recent_posts( $args );

  $eventargs = array( 'numberposts'=>'3' );
  $recent_events = tribe_get_events( $eventargs );
  $countPosts = 0;
  foreach( $recent_posts as $recent ){
    $post = get_post($recent["ID"]);
    if($countPosts ==0){
      $output.= '<div class="active">';
    }
    else{

       $output.= '<div>';
    }

    $output.= '<div class = "description">';
    $output.= '<h1 class="slider">'.$post->post_title.'</h1>';
    $output.= '<p class="slider">'.$post->post_excerpt.'</p>';
    $output.= '</div>';

   
    $output.='<div class="holdDots">';

    for($i=0;$i<count($recent_posts)+count($recent_events);$i++){
      if($i==$countPosts){
          $output .= '<div class="activeDot"></div>';

      }
      else{
        $output .='<div class = "dot"></div>';
      }
    }
    $output .='</div>';


    $output.= '<div class="shadowWrapper"><a href="' . get_permalink($recent["ID"]). '">' . get_the_post_thumbnail($recent['ID'], 'banner') .'</a>';

    $output.= '</div> ';

    $output.='</div>';
    $countPosts++;
  }
  
  $countEvents=0;

  foreach( $recent_events as $recentevent ){
    $output.= '<div>';

    $output.= '<div class = "description">';
    $output.= '<h1 class="slider">'.$recentevent->post_title.'</h1>';
    $output.= '<p class="slider">'.$recentevent->post_excerpt.'</p>';
    $output.= '</div>';

    $output.='<div class="holdDots">';
    for($j=0;$j<count($recent_posts)+count($recent_events);$j++){
        if($j==$countEvents +count($recent_posts)){
            $output .= '<div class="activeDot"></div>';

        }
        else{
          $output .='<div class = "dot"></div>';
        }
    }
    $output .="</div>";
    
    $output.= '<div class="shadowWrapper"><a href="' . get_permalink($recentevent->ID) . '">' . get_the_post_thumbnail($recentevent->ID, 'banner') .'</a> </div>';
    $output.= '</div>';
    $countEvents++;
  }

  $output .= "</div>";

  $output .= '<div id="holdOptions">';
  $output .= '<div class="sliderOption" id="option1"> <div><a href="'.site_url( $atts['link1'], $scheme ).'">'.$atts['title1'].'</a></div></div>';
  $output .= '<div class="sliderOption" id="option2"> <div><a href="'.site_url( $atts['link2'], $scheme ).'">'.$atts['title2'].'</a></div></div>';
  $output .= '<div class="sliderOption" id="option3"> <div><a href="'.site_url( $atts['link3'], $scheme ).'">'.$atts['title3'].'</a></div></div>';
  $output .= '<div class="sliderOption" id="option4"> <div><a href="'.site_url( $atts['link4'], $scheme ).'">'.$atts['title4'].'</a></div></div>';
  $output .= '</div>';

  $output .= "</div>";
  return $output;
}

add_shortcode( 'slider_old', 'slider_shortcode' );
add_shortcode( 'slider', 'slider2_shortcode' );

function events_list_shortcode($atts){
$output="<div id='eventsBox' class='infoBox ".$atts['bgcolor']."'><h1>".$atts['title']."</h1><ul>";
$args = array( 'numberposts' => '5' );
 $recent_events = tribe_get_events( $eventargs );
  foreach( $recent_events as $recentevent ){
    $output.= '<li><a href="' . get_permalink($recentevent->ID) . '">'.tribe_get_start_date( $recentevent->ID, 'true', 'M j, g:ia' ).' • <strong>' . $recentevent->post_title .'</strong></a> </li> ';
  }
$output .= "</ul></div>";
return $output;
}
add_shortcode( 'events-list', 'events_list_shortcode' );

function donate_shortcode($atts, $content = null){
$output="<div id='donate' class='infoBox'><h1>".$atts["title"]."</h1>";
$output.="<p>".$content."</p></div>";
return $output;
}
add_shortcode( 'donate', 'donate_shortcode' );

function news_list_shortcode($atts){
  $output="<div id='newsBox' class='infoBox ".$atts['bgcolor']."'><h1>".$atts['title']."</h1><ul>";
  $args = array( 'numberposts' => '5' );
  $recent_posts = wp_get_recent_posts( $args );
  foreach( $recent_posts as $recent ){
    $output.= '<li><a href="' . get_permalink($recent["ID"]) . '">' .date( 'M j, g:ia', strtotime( $recent['post_date'] ) ).' • <strong>' .  $recent["post_title"].'</strong></a> </li> ';
  }

  $output .= "</ul></div>";

  return $output;

}

  add_shortcode( 'news-list', 'news_list_shortcode' );
  add_image_size( "banner",960, 320, true );

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



function loginLink(){

	if ( is_user_logged_in() ) {
		global $current_user;
		get_currentuserinfo();
		if (!current_user_can('administrator') && !is_admin()) {
			if( $current_user->user_firstname ){

				return '<div class="loginLinks"><a href="'.site_url( "account-info/", $scheme ).'">'. $current_user->user_firstname .'</a>' .'|<a href='.wp_logout_url( $redirect ).'>Sign Out</a></div>';
			}
			else{
				return '<div class="loginLinks"><a href="'.site_url( "account-info/", $scheme ).'">'. $current_user->user_login.'</a></div>';
			}
		}
		else{
			if( $current_user->user_firstname ){

				return '<div class="loginLinks"><a href="'.site_url( "wp-admin", $scheme ).'">'. $current_user->user_firstname .'</a>' .'|<a href='.wp_logout_url( $redirect ).'>Sign Out</a></div>';
			}
			else{
				return '<div class="loginLinks"><a href="'.site_url( "wp-admin", $scheme ).'">'. $current_user->user_login.'</a></div>';
			}

		}
	}
	else{
		return '<div class="loginLinks"><a href="'.site_url( "wp-login.php", $scheme ).'">Sign In</a> |'.  wp_register('', '',$echo) . '</div>';
;
	}
}

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

function register_my_menus() {
  register_nav_menus(array('top-menu'=> 'Main Navigation', 'side-menu'=>'Side Navigation') );

}

add_action( 'init', 'register_my_menus' );
add_action('after_setup_theme', 'remove_admin_bar');
add_theme_support( 'post-thumbnails' );

class MegaMenu extends walker_nav_menu {

	// Don't start the top level
    function start_lvl(&$output, $depth=0, $args=array()) {

    	// if( $depth == 1){
        
   		//  $output .= "<div class="navInfoColumn"><ul>";
   		// }
    }
 
    // Don't end the top level
    function end_lvl(&$output, $depth=0, $args=array()) {
    	// if($depth == 1){
      		 
   	 //   		$output .= "</ul>'</div>";
   		// }
    }

	 function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
 

	 global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    if($depth == 0){
    	$output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';


   // $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';

    $item_output .= '<div><div class="alignment">';

    

    $item_output .= '<div class="navLinksColumn"><p>';
      $item_output .=  apply_filters( 'the_description', $item->description, $item->ID ).'<p>';
      $item_output .='</div>';

   // $item_output .= $args->after;
    $output .= $item_output;
    // $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  	}
 
  	else if($depth == 1){
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
   		 $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
   		 $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
   		 $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
  

  		$item_output = $args->before;

  	//	if($item->title == "Actions"){
			
		
			$item_output .= '<div class="navInfoColumn">';
			$item_output .='<h1>'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after.'</h1><ul>';
			$item_output .= $args->after;
		  $item_output .= "<ul>";
  		
		 $output .= $item_output;
  	}
  	else if ($depth == 2){
  		 $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
   		 $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
   		 $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
   		 $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

  		$output .="<li>";

  		$output .= '<a'. $attributes .'>';
  		$output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
  		$output .= "</a>";
  	}

  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
  	if($depth == 0){
  		
    	$item_output .= '</div></div></li>';
    	$output .=$item_output;
	}
	else if($depth ==1){

		$output .="</ul></div>";
	}

	else if($depth==2){
		$output .= "</li>";

	}
  }

	
}

class SideMenu extends walker_nav_menu {

	 function walk( $elements, $max_depth) {

        $args = array_slice(func_get_args(), 2);
        $output = '';

        if ($max_depth < -1) //invalid parameter
            return $output;

        if (empty($elements)) //nothing to walk
            return $output;

        $id_field = $this->db_fields['id'];
        $parent_field = $this->db_fields['parent'];

        // flat display
        if ( -1 == $max_depth ) {
            $empty_array = array();
            foreach ( $elements as $e )
                $this->display_element( $e, $empty_array, 1, 0, $args, $output );
            return $output;
        }

        /*
         * need to display in hierarchical order
         * separate elements into two buckets: top level and children elements
         * children_elements is two dimensional array, eg.
         * children_elements[10][] contains all sub-elements whose parent is 10.
         */
        $top_level_elements = array();
        $children_elements  = array();
        foreach ( $elements as $e) {
            if ( 0 == $e->$parent_field )
                $top_level_elements[] = $e;
            else
                $children_elements[ $e->$parent_field ][] = $e;
        }

        /*
         * when none of the elements is top level
         * assume the first one must be root of the sub elements
         */
        if ( empty($top_level_elements) ) {

            $first = array_slice( $elements, 0, 1 );
            $root = $first[0];

            $top_level_elements = array();
            $children_elements  = array();
            foreach ( $elements as $e) {
                if ( $root->$parent_field == $e->$parent_field )
                    $top_level_elements[] = $e;
                else
                    $children_elements[ $e->$parent_field ][] = $e;
            }
        }

        $current_element_markers = array( 'current-menu-item', 'current-menu-parent', 'current-menu-ancestor' );  //added by continent7
        
        foreach ( $top_level_elements as $e ){  //changed by continent7
            // descend only on current tree
            $descend_test = array_intersect( $current_element_markers, $e->classes );
            if ( !empty( $descend_test ) ) {


                $this->display_element( $e, $children_elements, 4, 0, $args, $output );
              }
        }

        
         return $output;
    }

  function start_el( &$output, $item, $depth = 0, $args, $id = 0 ) {

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $item_output = $args->before;

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';


            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';

        
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );     

    }
}

add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );

function submenu_limit( $items, $args ) {
    if ( empty( $args->submenu )&& empty($args->highlight) ) {
        return $items;
    }

    //filter the object list by the title of the entry 
    $ids       = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
    $parent_id = array_pop( $ids );
    $children  = submenu_get_children_ids( $parent_id, $items );

    foreach ( $items as $key => $item ) {

        if ( ! in_array( $item->ID, $children) && $item->title !=$args->submenu) {
            unset( $items[$key] );
        }
        else if($item ->title == $args->highlight){

            array_push($item->classes,"current-menu-item"); 
        }
        
        
    }

    return $items;
}

function submenu_get_children_ids( $id, $items ) {

    $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );

    foreach ( $ids as $id ) {

        $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
    }

    return $ids;
}
?>
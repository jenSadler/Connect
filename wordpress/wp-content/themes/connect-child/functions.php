<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

add_filter('bbp_before_get_breadcrumb_parse_args', 'mycustom_breadcrumb_options');

function get_dynamic_roles($bbp_roles)
{
    /* Add a role called Community Contributor */
    $bbp_roles['bbp_basic_participant'] = array(
        'name' => 'Basic Participant',
        'capabilities' => get_caps_for_role('bbp_basic_participant')
    );

    return $bbp_roles;
}
add_filter('bbp_get_dynamic_roles', 'get_dynamic_roles', 1);

function get_caps_for_role_filter($caps, $role)
{
    /* Only filter for roles we are interested in! */
    if ($role == 'bbp_basic_participant')
        $caps = get_caps_for_role($role);

    return $caps;
}
add_filter('bbp_get_caps_for_role', 'get_caps_for_role_filter', 10, 2);

function get_caps_for_role($role)
{
    switch ($role) {
        /* Disable viewing of private forums by 'Participants' */
        
        /* Capabilities for 'Community Contributors' */
        case 'bbp_basic_participant':
            return array(
                
                // Primary caps
                'spectate' => true,
                'participate' => true,
                'moderate' => false,
                'throttle' => false,
                'view_trash' => false,
                
                // Forum caps
                'publish_forums' => false,
                'edit_forums' => false,
                'edit_others_forums' => false,
                'delete_forums' => false,
                'delete_others_forums' => false,
                'read_private_forums' => true,
                'read_hidden_forums' => false,
                
                // Topic caps
                'publish_topics' => false,
                'edit_topics' => false,
                'edit_others_topics' => false,
                'delete_topics' => false,
                'delete_others_topics' => false,
                'read_private_topics' => false,
                
                // Reply caps
                'publish_replies' => true,
                'edit_replies' => true,
                'edit_others_replies' => false,
                'delete_replies' => false,
                'delete_others_replies' => false,
                'read_private_replies' => false,
                
                // Topic tag caps
                'manage_topic_tags' => false,
                'edit_topic_tags' => false,
                'delete_topic_tags' => false,
                'assign_topic_tags' => false
            );
            break;
        default:
            return $role;
    }
}

function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function mycustom_breadcrumb_options() {
    // Home - default = true
    $args['include_home']    = false;
    // Forum root - default = true
    $args['include_root']    = false;
    // Current - default = true
    $args['include_current'] = true;
 
    return $args;
}


?>
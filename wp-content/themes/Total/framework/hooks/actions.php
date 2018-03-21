<?php
/**
 * All core theme actions.
 * DO NOT EDIT THIS FILE EVER!
 * You can remove any action via a child theme using remove_action()
 *
 * @package Total WordPress Theme
 * @subpackage Hooks
 * @version 4.2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Outer Wrap > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_outer_wrap_before', 'wpex_site_frame_border', 0 );
add_action( 'wpex_outer_wrap_before', 'wpex_skip_to_content_link' );
add_action( 'wpex_outer_wrap_before', 'wpex_ls_top' );
add_action( 'wpex_outer_wrap_before', 'wpex_toggle_bar_button' );
add_action( 'wpex_outer_wrap_before', 'wpex_toggle_bar' );
add_action( 'wpex_outer_wrap_before', 'wpex_mobile_menu_navbar' );
add_action( 'wpex_outer_wrap_before', 'wpex_mobile_menu_fixed_top' );

/* Wrap > Top
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_wrap_top', 'wpex_top_bar', 5 );
add_action( 'wpex_hook_wrap_top', 'wpex_header' );

/* Topbar > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_topbar_before', 'wpex_post_slider' );

/* Topbar > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_topbar_inner', 'wpex_tobar_content' );
add_action( 'wpex_hook_topbar_inner', 'wpex_topbar_social' );

/* Header > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_header_before', 'wpex_post_slider' );
add_action( 'wpex_hook_header_before', 'wpex_overlay_header_wrap_open', 9999 );

/* Header > Top
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_header_top', 'wpex_header_menu' );

/* Header > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_header_inner', 'wpex_header_logo' );
add_action( 'wpex_hook_header_inner', 'wpex_header_aside' );
add_action( 'wpex_hook_header_inner', 'wpex_header_menu' );
add_action( 'wpex_hook_header_inner', 'wpex_mobile_menu_icons' );
add_action( 'wpex_hook_header_inner', 'wpex_header_inner_search_dropdown' );
add_action( 'wpex_hook_header_inner', 'wpex_search_header_replace' );

/* Header > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_header_bottom', 'wpex_post_slider' );
add_action( 'wpex_hook_header_bottom', 'wpex_header_menu' );
add_action( 'wpex_hook_header_bottom', 'wpex_mobile_menu_navbar' );

/* Main > Top
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_main_top', 'wpex_page_header' );
add_action( 'wpex_hook_main_top', 'wpex_post_slider' );

/* Main > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_main_bottom', 'wpex_next_prev' );

/* Main > After
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_main_after', 'wpex_overlay_header_wrap_close', 9999 );

/* Primary > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_primary_before', 'wpex_blog_single_media_above' );

/* Primary > After
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_primary_after', 'wpex_get_sidebar_template' );

/* Content > Top
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_content_top', 'wpex_term_description' );

/* Content > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_content_bottom', 'wpex_post_edit' );

/* Page Header > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_page_header_before', 'wpex_post_slider' );

/* Page Header > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_page_header_inner', 'wpex_page_header_title_table_wrap_open', 0 );
add_action( 'wpex_hook_page_header_inner', 'wpex_page_header_title' );
add_action( 'wpex_hook_page_header_inner', 'wpex_page_header_subheading' );
add_action( 'wpex_hook_page_header_inner', 'wpex_display_breadcrumbs' );
add_action( 'wpex_hook_page_header_inner', 'wpex_page_header_title_table_wrap_close', 9999 );

/* Page Header > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_page_header_bottom', 'wpex_page_header_overlay' );

/* Sidebar > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_sidebar_inner', 'wpex_display_sidebar' );

/* Wrap > Bottom
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_wrap_bottom', 'wpex_footer' );

/* Footer > Before
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_footer_before', 'wpex_footer_reveal_open', 0 );
add_action( 'wpex_hook_footer_before', 'wpex_footer_callout' );

/* Footer > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_footer_inner', 'wpex_footer_widgets' );

/* Footer > After
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_footer_after', 'wpex_footer_bottom' );
add_action( 'wpex_hook_footer_after', 'wpex_footer_reveal_close', 99 );

/* Footer Bottom > Inner
-------------------------------------------------------------------------------*/
add_action( 'wpex_hook_footer_bottom_inner', 'wpex_footer_bottom_copyright' );
add_action( 'wpex_hook_footer_bottom_inner', 'wpex_footer_bottom_menu' );

/* WP_Footer
-------------------------------------------------------------------------------*/
add_action( 'wp_footer', 'wpex_mobile_menu_alt' );
add_action( 'wp_footer', 'wpex_mobile_searchform' );
add_action( 'wp_footer', 'wpex_scroll_top' );
add_action( 'wp_footer', 'wpex_search_overlay' );
add_action( 'wp_footer', 'wpex_sidr_close' );



/* REMOVE ACTIONS !!!
-------------------------------------------------------------------------------*/

// Helper function to remove all actions
function wpex_remove_actions() {
	$hooks = wpex_theme_hooks();
	foreach ( $hooks as $section => $array ) {
		if ( ! empty( $array['hooks'] ) && is_array( $array['hooks'] ) ) {
			foreach ( $array['hooks'] as $hook ) {
				remove_all_actions( $hook, false );
			}
		}
	}
}

// Remove actions for landing page
function wpex_landing_page_remove_actions() {
	if ( is_page_template( 'templates/landing-page.php' ) ) {
		wpex_remove_actions();
	}
}
add_action( 'wp_head', 'wpex_landing_page_remove_actions' );
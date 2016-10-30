<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */

 /**
 *
 * Add an editor stylesheet to the WordPress admin
 * See: https://developer.wordpress.org/reference/functions/add_editor_style/
 *
 **/

 function _s_add_editor_styles() {
 	add_editor_style( 'editor-style.css' );
 }
 add_action( 'admin_init', '_s_add_editor_styles' );

/**
*
* Filter Yoast SEO's settings, so it is below custom metaboxes.
* https://wordpress.org/support/topic/plugin-wordpress-seo-by-yoast-position-seo-meta-box-priority-above-custom-meta-boxes/
*
*/

add_filter( 'wpseo_metabox_prio', function() { return 'low';});


/**
* TypeKit Fonts
*
*/

// function _s_typekit() {
//     wp_enqueue_script( '_s_typekit', '//use.typekit.net/-----.js');
// }
// add_action( 'wp_enqueue_scripts', '_s_typekit' );

// function _s_typekit_inline() {
//   if ( wp_script_is( '_s_typekit', 'done' ) ) { ?>
  	 <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
// <?php }
// }
// add_action( 'wp_head', '_s_typekit_inline' );

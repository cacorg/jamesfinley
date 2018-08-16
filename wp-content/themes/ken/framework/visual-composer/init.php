<?php
if (!defined('THEME_FRAMEWORK')) exit('No direct script access allowed');

/**
 * Adds support to Visual Composer page builder. It also adds some features, elimniates some features from the plugin that plays not well with the theme.
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 4.0
 * @package     artbees
 */




// Do not proceed if Visual Composer plugin is not active
if (!class_exists('WPBakeryShortCode')) return false;



/**
 * backward compatibility for vc_add_shortcode_param function
 *
 * @param string $param_name
 * @param string $param_function
 */
function mk_add_shortcode_param($param_name, $param_function) {
    if(version_compare(WPB_VC_VERSION, '5.0', '>=')) {
        vc_add_shortcode_param($param_name, $param_function);
    } else {
        add_shortcode_param($param_name, $param_function);
    }
}


include_once (THEME_FRAMEWORK . "/visual-composer/fields/autocomplete.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/hidden_input.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/item_id.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/multiselect.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/range.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/theme_fonts.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/toggle.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/upload.php");
include_once (THEME_FRAMEWORK . "/visual-composer/fields/visual_selector.php");



/*
*
* Add global params that are used in other shortcodes.
* load vc_map locted in /shortcodes-options/SHORTCODE_NAME.php
* If child theme os active and vc_map exists in the same directory, the child theme will override the parent file
*
*/

if(!function_exists('mk_visual_composer_mapper')) {
	function mk_visual_composer_mapper() {

		include_once (THEME_FRAMEWORK . "/visual-composer/global-params.php");
	   
	    $shortcodes_dir = get_template_directory() . '/shortcode-options/*.php';
	    
	    $shortcodes = glob($shortcodes_dir);
	    
	    if(is_array($shortcodes) && !empty($shortcodes)) {
		    foreach ($shortcodes as $shortcode) {

		        $shortcode_name = array_reverse(explode('/', $shortcode));
		        $shortcode_name = $shortcode_name[0];

		        if(file_exists(get_stylesheet_directory() . '/shortcode-options/'.$shortcode_name)) {
		            include_once(get_stylesheet_directory() . '/shortcode-options/'.$shortcode_name);
		        } else {
		            include_once ($shortcode);
		        }

		    }
		}


	    // For custom post types added in child theme
	    $external_shortcodes_dir = get_stylesheet_directory() . '/shortcode-options/*.php';

	    $external_shortcodes = glob($external_shortcodes_dir);
	    
	    if(is_array($external_shortcodes) && !empty($external_shortcodes)) {
		    foreach ($external_shortcodes as $shortcode) {

		        $shortcode_name = array_reverse(explode('/', $shortcode));
		        $shortcode_name = $shortcode_name[0];
		        
		        include_once(get_stylesheet_directory() . '/shortcode-options/'.$shortcode_name);
		    }
		}
	}

	add_action('vc_mapper_init_before', 'mk_visual_composer_mapper');
}


/*
*
* Set Visual Composer to act as bundled with the theme
* Load theme built-in shortcodes template files located in components/shortcodes
* Disable Frontend of Visual Composer due to the incompatibilities 
*
*/

if(!function_exists('mk_set_visual_composer_as_bundled')) {
	function mk_set_visual_composer_as_bundled() {
	    

	    vc_set_as_theme();

	    
	    if (defined('MODIFIED_VC_ACTIVATED')) {
	        $child_dir = get_stylesheet_directory() . '/shortcodes';
	        $parent_dir = get_template_directory() . '/shortcodes';
	        
	        vc_set_shortcodes_parent_templates_dir($parent_dir);
	        vc_set_shortcodes_templates_dir($child_dir);
	    } 
	    else {
	        
	        $child_dir = get_template_directory() . '/shortcodes';
	        $parent_dir = get_template_directory() . '/shortcodes';
	        vc_set_shortcodes_templates_dir($parent_dir);
	        vc_set_shortcodes_templates_dir($child_dir);
	    }
	    
	    vc_disable_frontend();
	}

	add_action('vc_before_init', 'mk_set_visual_composer_as_bundled');
}


require_once (THEME_FRAMEWORK . "/visual-composer/page-section.php");


/* List of built-in shortcodes hooked into WordPress shorcodes class */
class WPBakeryShortCode_mk_table extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_icon_box extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_call_to_action extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_gallery extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_social_networks extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_portfolio extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_blog extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_moving_image extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_font_icons extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_blockquote extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_dropcaps extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_highlight extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_skill_meter extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_skill_meter_chart extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_chart extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_custom_list extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_message_box extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_divider extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_button extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_toggle extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_fancy_title extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_fancy_text extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_pricing_table extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_employees extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_clients extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_testimonials extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_image_slideshow extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_padding_divider extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_contact_form extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_contact_info extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_audio extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_countdown extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_gmaps extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_milestone extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_edge_slider extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_tab_slider extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_instagram extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_header extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_window_scroller extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_icon_text extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_image extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_image_box extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_tablet_slideshow extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_mobile_slideshow extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_edge_one_pager extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_animated_columns extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_blog_teaser extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_custom_sidebar extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_theatre_slider extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_process_steps extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_mk_step extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_vc_content_scroller extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_vc_content_scroller_item extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_mk_custom_box extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_mk_fade_txt_box extends WPBakeryShortCodesContainer{}
class WPBakeryShortCode_mk_fade_txt_item extends WPBakeryShortCode{}
class WPBakeryShortCode_mk_products extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_product_categories extends WPBakeryShortCode {}
class WPBakeryShortCode_mk_flipbox extends WPBakeryShortCode{}
class WPBakeryShortCode_mk_gradient_text extends WPBakeryShortCode{}
class WPBakeryShortCode_mk_subscribe extends WPBakeryShortCode{}
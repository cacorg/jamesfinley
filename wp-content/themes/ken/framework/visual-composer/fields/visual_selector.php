<?php
if (!defined('THEME_FRAMEWORK')) exit('No direct script access allowed');

/**
 * Add Visual Selector Option to Visual Composer Params
 *
 * @author      Bob Ulusoy
 * @copyright   Artbees LTD (c)
 * @link        http://artbees.net
 * @since       Version 4.0
 * @package     artbees
 */


/*
Add Visual Selector Option to Visual Composer Params
 */
if (function_exists('mk_add_shortcode_param')) {
    mk_add_shortcode_param('visual_selector', 'mk_visual_selector_param_field');
}
function mk_visual_selector_param_field($settings, $value) {
    $param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
    $border = isset($settings['border']) ? $settings['border'] : '';
    $type = isset($settings['type']) ? $settings['type'] : '';
    $options = isset($settings['value']) ? $settings['value'] : '';
    $output = '';
    $uniqeID = uniqid();

    $border_css = ($border == 'true') ? 'border:1px solid #ddd;' : '';

    $output .= '<div class="mk-visual-selector" id="visual-selector' . $uniqeID . '">';
    foreach ($options as $key => $option) {
        $output .= '<a style="margin:10px 10px 0 0;' . $border_css . '" href="#" rel="' . $option . '"><img  src="' . THEME_ADMIN_ASSETS_URI . '/images/' . $key . '" /></a>';
    }
    $output .= '<input name="' . $param_name . '" id="' . $param_name . '" class="wpb_vc_param_value ' . $param_name . ' ' . $type . '" type="hidden" value="' . $value . '"/>';
    $output .= '</div>';

    $output .= '<script type="text/javascript">

        mk_visual_selector();

    </script>';

    return $output;
}
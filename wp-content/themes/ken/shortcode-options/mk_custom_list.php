<?php
vc_map(array(
    "name"        => __("Custom List", "mk_framework"),
    "base"        => "mk_custom_list",
    "category"    => __('Typography', 'mk_framework'),
    'icon'        => 'icon-mk-custom-list vc_mk_element-icon',
    'description' => __('Powerful list styles with icons.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Add your unordered list into this textarea. Allowed Tags : [ul][li][strong][i][em][u][b][a][small]", "mk_framework"),
            "param_name"  => "content",
            "value"       => "<ul><li>List Item</li><li>List Item</li><li>List Item</li><li>List Item</li><li>List Item</li></ul>",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Character Code", "mk_framework"),
            "param_name"  => "style",
            "value"       => "f00c",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon Character code.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Icons Color", "mk_framework"),
            "param_name"  => "icon_color",
            "value"       => $skin_color,
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Margin Bottom", "mk_framework"),
            "param_name"  => "margin_bottom",
            "value"       => "30",
            "min"         => "-30",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Viewport Animation", "mk_framework"),
            "param_name"  => "animation",
            "value"       => $css_animations,
            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),
    ),
));
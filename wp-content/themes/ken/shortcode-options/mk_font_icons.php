<?php
vc_map(array(
    "name"        => __("Font icons", "mk_framework"),
    "base"        => "mk_font_icons",
    'icon'        => 'icon-mk-font-icon vc_mk_element-icon',
    "category"    => __('Typography', 'mk_framework'),
    'description' => __('Advanced font icon element', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Class Name", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                __("Fefault", "mk_framework")                      => "default",
                __("Filled", "mk_framework")                       => "filled",
                __("Generic (customise yourself)", "mk_framework") => "custom",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon Color", "mk_framework"),
            "param_name"  => "color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                    'filled',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Frame Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon Hover Color", "mk_framework"),
            "param_name"  => "hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Background Hover Color", "mk_framework"),
            "param_name"  => "bg_hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Frame Border Hover Color", "mk_framework"),
            "param_name"  => "border_hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Size", "mk_framework"),
            "param_name"  => "size",
            "value"       => array(
                "16px"  => "small",
                "32px"  => "medium",
                "48px"  => "large",
                "64px"  => "x-large",
                "128px" => "xx-large",
                "256px" => "xxx-large",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Remove Frame from icon?", "mk_framework"),
            "param_name"  => "remove_frame",
            "value"       => "false",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Frame Border Width", "mk_framework"),
            "param_name"  => "border_width",
            "value"       => "2",
            "min"         => "1",
            "max"         => "20",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                    'default',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Horizontal Padding", "mk_framework"),
            "param_name"  => "padding_horizental",
            "value"       => "4",
            "min"         => "0",
            "max"         => "200",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("You can give padding to the icon. this padding will be applied to left and right side of the icon", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Vertical Padding", "mk_framework"),
            "param_name"  => "padding_vertical",
            "value"       => "4",
            "min"         => "0",
            "max"         => "200",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("You can give padding to the icon. this padding will be applied to top and bottom of them icon", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Align", "mk_framework"),
            "param_name"  => "align",
            "width"       => 150,
            "value"       => array(
                __('- No Align - ', "mk_framework") => "none",
                __('Left', "mk_framework")          => "left",
                __('Right', "mk_framework")         => "right",
                __('Center', "mk_framework")        => "center",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Link", "mk_framework"),
            "param_name"  => "link",
            "value"       => "",
            "description" => __("You can optionally link your icon. please provide full URL including http://", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Link Target", "mk_framework"),
            "param_name"  => "target",
            "width"       => 200,
            "value"       => $target_arr,
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Infinite Animations", "mk_framework"),
            "param_name"  => "infinite_animation",
            "value"       => $infinite_animation,
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
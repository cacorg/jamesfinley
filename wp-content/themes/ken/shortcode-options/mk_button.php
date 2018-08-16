<?php
vc_map(array(
    "name"        => __("Button", "mk_framework"),
    "base"        => "mk_button",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-button vc_mk_element-icon',
    'description' => __('Powerful & versatile button shortcode', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textfield",
            "holder"      => "div",
            "heading"     => __("Button Text", "mk_framework"),
            "param_name"  => "content",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Flat"       => "flat",
                "3D"         => "three-dimension",
                "Outline"    => "outline",
                "Line"       => "line",
                "Fill"       => "fill",
                "Nudge"      => "nudge",
                "Radius"     => "radius",
                "Fancy Link" => "fancy_link",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Corner style", "mk_framework"),
            "param_name"  => "corner_style",
            "value"       => array(
                "Pointed"      => "pointed",
                "Rounded"      => "rounded",
                "Full Rounded" => "full_rounded",
            ),
            "description" => __("How will your button corners look like?", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'flat',
                    'three-dimension',
                    'outline',
                    'fill',
                    'nudge',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Size", "mk_framework"),
            "param_name"  => "size",
            "value"       => array(
                "Small"    => "small",
                "Medium"   => "medium",
                "Large"    => "large",
                "X Large"  => "xlarge",
                "XX Large" => "xxlarge",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "#444444",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'flat',
                    'three-dimension',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Text Color", "mk_framework"),
            "param_name"  => "txt_color",
            "value"       => "#ddd",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'flat',
                    'three-dimension',
                    'fancy_link',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Underline Color", "mk_framework"),
            "param_name"  => "underline_color",
            "value"       => "#ddd",
            "description" => __("This option is for outline style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'fancy_link',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Outline Button Skin", "mk_framework"),
            "param_name"  => "outline_skin",
            "value"       => "#444444",
            "description" => __("This option is for outline style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'outline',
                    'line',
                    'fill',
                    'radius',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Outline Button Hover Text", "mk_framework"),
            "param_name"  => "outline_hover_skin",
            "value"       => "#fff",
            "description" => __("This option is for outline style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'outline',
                    'line',
                    'fill',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Outline Button Border Width", "mk_framework"),
            "param_name"  => "outline_border_width",
            "value"       => "2",
            "min"         => "1",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'outline',
                    'fill',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Nudge Button Skin", "mk_framework"),
            "param_name"  => "nudge_skin",
            "value"       => "#444444",
            "description" => __("This option is for outline style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'nudge',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Class Name", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
            "dependency"  => array(
                "element" => "style",
                "value"   => array(
                    'flat',
                    'three-dimension',
                    'outline',
                    'line',
                    'fill',
                    'nudge',
                    'radius',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Button URL", "mk_framework"),
            "param_name"  => "url",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Target", "mk_framework"),
            "param_name"  => "target",
            "width"       => 200,
            "value"       => $target_arr,
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Align", "mk_framework"),
            "param_name"  => "align",
            "width"       => 150,
            "value"       => array(
                __('Left', "mk_framework")   => "left",
                __('Right', "mk_framework")  => "right",
                __('Center', "mk_framework") => "center",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Button ID", "mk_framework"),
            "param_name"  => "id",
            "value"       => "",
            "description" => __("If your want to use id for this button to refer it in your custom JS, fill this textbox.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Margin Bottom", "mk_framework"),
            "param_name"  => "margin_bottom",
            "value"       => "15",
            "min"         => "-30",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Infinite Animations", "mk_framework"),
            "param_name"  => "infinite_animation",
            "value"       => $infinite_animation,
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                "element" => "style",
                "value"   => array(
                    'flat',
                    'three-dimension',
                    'outline',
                    'line',
                    'fill',
                    'nudge',
                    'radius',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Viewport Animation", "mk_framework"),
            "param_name"  => "animation",
            "value"       => $css_animations,
            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework"),
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),

    ),
));
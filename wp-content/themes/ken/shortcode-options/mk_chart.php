<?php
vc_map(array(
    "name"        => __("Chart", "mk_framework"),
    "base"        => "mk_chart",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-chart vc_mk_element-icon',
    'description' => __('Powerful & versatile Chart element.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "range",
            "heading"     => __("Percent", "mk_framework"),
            "param_name"  => "percent",
            "value"       => "50",
            "min"         => "0",
            "max"         => "100",
            "step"        => "1",
            "unit"        => '%',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Bar Color", "mk_framework"),
            "param_name"  => "bar_color",
            "value"       => $skin_color,
            "description" => __("The color of the circular bar.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Track Color", "mk_framework"),
            "param_name"  => "track_color",
            "value"       => "#fafafa",
            "description" => __("The color of the track for the bar.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Line Width", "mk_framework"),
            "param_name"  => "line_width",
            "value"       => "15",
            "min"         => "1",
            "max"         => "20",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Width of the bar line.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Bar Size", "mk_framework"),
            "param_name"  => "bar_size",
            "value"       => "170",
            "min"         => "1",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("The Diameter of the bar.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Content", "mk_framework"),
            "param_name"  => "content_type",
            "width"       => 200,
            "value"       => array(
                "Percent"     => "percent",
                "Icon"        => "icon",
                "Custom Text" => "custom_text",
            ),
            "description" => __("The content inside the bar. If you choose icon, you should select your icon from below list. if you have selected custom text, then you should fill out the 'custom text' option below.", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Size", "mk_framework"),
            "param_name"  => "icon_size",
            "width"       => 200,
            "value"       => array(
                "Small (16px)"    => "16px",
                "Medium (32px)"   => "32px",
                "Large (64px)"    => "64px",
                "X Large (128px)" => "128px",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "content_type",
                'value'   => array(
                    'icon',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Font Size?", "mk_framework"),
            "param_name"  => "font_size",
            "value"       => "18",
            "min"         => "15",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "content_type",
                'value'   => array(
                    'custom_text',
                    'percent',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Font Weight", "mk_framework"),
            "param_name"  => "font_weight",
            "width"       => 150,
            "value"       => array(
                __('Default', "mk_framework")   => "inherit",
                __('Bolder (900)', "mk_framework")    => "900",
                __('Bolder (800)', "mk_framework")    => "bolder",
                __('Bold (700)', "mk_framework")      => "bold",
                __('Semi Bold (600)', "mk_framework") => "600",
                __('Medium (500)', "mk_framework")    => "500",
                __('Normal (400)', "mk_framework")    => "normal",
                __('Light (300)', "mk_framework")     => "300",
                __('Lighter (200)', "mk_framework")     => "200",
                __('Lighter (100)', "mk_framework")     => "100",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "content_type",
                'value'   => array(
                    'custom_text',
                    'percent',
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
                'element' => "content_type",
                'value'   => array(
                    'icon',
                ),
            ),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Custom Text", "mk_framework"),
            "param_name"  => "custom_text",
            "value"       => "",
            "description" => __("Description will appear below each chart.", "mk_framework"),
            "dependency"  => array(
                'element' => "content_type",
                'value'   => array(
                    'custom_text',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Description", "mk_framework"),
            "param_name"  => "desc",
            "value"       => "",
            "description" => __("Description will appear below each chart.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Description Color", "mk_framework"),
            "param_name"  => "desc_color",
            "value"       => "",
            "description" => __("The color of the description.", "mk_framework"),
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
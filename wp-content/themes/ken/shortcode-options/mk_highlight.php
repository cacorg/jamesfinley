<?php

vc_map(array(
    "name"        => __("Highlight Text", "mk_framework"),
    "base"        => "mk_highlight",
    'icon'        => 'icon-mk-highlight vc_mk_element-icon',
    "category"    => __('Typography', 'mk_framework'),
    'description' => __('adds highlight to an inline text.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textfield",
            "heading"     => __("Highlight Text", "mk_framework"),
            "param_name"  => "text",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "width"       => 150,
            "value"       => array(
                __('Default Color', "mk_framework") => "default",
                __('Custom Color', "mk_framework")  => "custom",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Fill Color", "mk_framework"),
            "param_name"  => "fill_color",
            "value"       => $skin_color,
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
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
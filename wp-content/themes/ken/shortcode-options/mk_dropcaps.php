<?php
vc_map(array(
    "name"        => __("Dropcaps", "mk_framework"),
    "base"        => "mk_dropcaps",
    'icon'        => 'icon-mk-dropcaps vc_mk_element-icon',
    "category"    => __('Typography', 'mk_framework'),
    'description' => __('Dropcaps element shortcode.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textfield",
            "heading"     => __("Dropcaps Character", "mk_framework"),
            "param_name"  => "char",
            "value"       => __("", "mk_framework"),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "width"       => 150,
            "value"       => array(
                __('Square Default Color', "mk_framework") => "square-default",
                __('Circle default Color', "mk_framework") => "circle-default",
                __('Square Custom Color', "mk_framework")  => "square-custom",
                __('Circle Custom Color', "mk_framework")  => "circle-custom",
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
                    'square-custom',
                    'circle-custom',
                ),
            ),
        ),
        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Paragraph", "mk_framework"),
            "param_name"  => "content",
            "value"       => __("", "mk_framework"),
            "description" => __("Enter your content.", "mk_framework"),
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
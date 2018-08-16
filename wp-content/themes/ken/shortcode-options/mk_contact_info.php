<?php
vc_map(array(
    "base"        => "mk_contact_info",
    "name"        => __("Contact Info", "mk_framework"),
    'icon'        => 'icon-mk-contact-info vc_mk_element-icon',
    "category"    => __('Social', 'mk_framework'),
    'description' => __('Adds Contact info details.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "dropdown",
            "heading"     => __("Skin", "mk_framework"),
            "param_name"  => "skin",
            "value"       => array(
                __("Dark", "mk_framework")   => "dark",
                __("Light", "mk_framework")  => "light",
                __("Custom", "mk_framework") => "custom",
            ),
            "description" => __("Choose your contact form style", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Text & Icon Color", "mk_framework"),
            "param_name"  => "text_icon_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Name", "mk_framework"),
            "param_name" => "name",
            "value"      => "",
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Cellphone", "mk_framework"),
            "param_name" => "cellphone",
            "value"      => "",
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Phone", "mk_framework"),
            "param_name" => "phone",
            "value"      => "",
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Address", "mk_framework"),
            "param_name" => "address",
            "value"      => "",
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Website", "mk_framework"),
            "param_name" => "website",
            "value"      => "",
        ),
        array(
            "type"       => "textfield",
            "heading"    => __("Email", "mk_framework"),
            "param_name" => "email",
            "value"      => "",
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
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
    ),
));
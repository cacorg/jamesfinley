<?php
vc_map(array(
    "name"          => __("Text block", "mk_framework"),
    "base"          => "vc_column_text",
    "wrapper_class" => "clearfix",
    "category"      => __('Typography', 'mk_framework'),
    'icon'          => 'icon-mk-text-block vc_mk_element-icon',
    'description'   => __('A block of text with WYSIWYG editor', 'mk_framework'),
    "params"        => array(

        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Text", "mk_framework"),
            "param_name"  => "content",
            "value"       => __("", "mk_framework"),
            "description" => __("Enter your content.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Tablet & Mobile Align.", "mk_framework"),
            "param_name"  => "responsive_align",
            "value"       => array(
                __('Center', "mk_framework") => "center",
                __('Left', "mk_framework")   => "left",
                __('Right', "mk_framework")  => "right",
            ),
            "description" => __("In some cases your text align for text may not look good in tablet and mobile devices. you can control align for tablet portrait and all mobile devices using this option. It will be center align by default!", "mk_framework"),
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
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
    ),
));

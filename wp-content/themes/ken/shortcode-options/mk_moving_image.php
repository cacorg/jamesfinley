<?php
vc_map(array(
    "name"        => __("Moving Image", "mk_framework"),
    "base"        => "mk_moving_image",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-moving-image vc_mk_element-icon',
    'description' => __('Images powered by CSS3 moving animations.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "upload",
            "heading"     => __("Upload Your image", "mk_framework"),
            "param_name"  => "src",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => $infinite_animation,
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
            "heading"     => __("Title & Alt", "mk_framework"),
            "param_name"  => "title",
            "value"       => "",
            "description" => __("For SEO purposes you may need to fill out the title and alt property for this image", "mk_framework"),
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
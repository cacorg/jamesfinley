<?php
vc_map(array(
    "name"        => __("Tablet Slideshow", "mk_framework"),
    "base"        => "mk_tablet_slideshow",
    'icon'        => 'icon-mk-image-slideshow vc_mk_element-icon',
    "category"    => __('Slideshows', 'mk_framework'),
    'description' => __('Slideshow inside a tablet.', 'mk_framework'),
    "params"      => array(
        array(
            "heading"     => __("Tablet Color", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "tablet_color",
            "value"       => array(
                __("Black", 'mk_framework') => "black",
                __("White", 'mk_framework') => "white",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "attach_images",
            "heading"     => __("Add Images", "mk_framework"),
            "param_name"  => "images",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Animation Speed", "mk_framework"),
            "param_name"  => "animation_speed",
            "value"       => "700",
            "min"         => "100",
            "max"         => "3000",
            "step"        => "1",
            "unit"        => 'ms',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Slideshow Speed", "mk_framework"),
            "param_name"  => "slideshow_speed",
            "value"       => "7000",
            "min"         => "1000",
            "max"         => "20000",
            "step"        => "1",
            "unit"        => 'ms',
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Pause on Hover", "mk_framework"),
            "param_name"  => "pause_on_hover",
            "value"       => "false",
            "description" => __("Pause the slideshow when hovering over slider, then resume when no longer hovering", "mk_framework"),
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
)
);
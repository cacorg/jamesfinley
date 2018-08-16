<?php
vc_map(array(
    "name"        => __("Video player", "mk_framework"),
    "base"        => "vc_video",
    'icon'        => 'icon-mk-video-player vc_mk_element-icon',
    'description' => __('Youtube, Vimeo,..', 'mk_framework'),
    "category"    => __('Social', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Widget Title", "mk_framework"),
            "param_name"  => "title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Video link", "mk_framework"),
            "param_name"  => "link",
            "value"       => "",
            "description" => __('Link to the video. More about supported formats at <a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">WordPress codex page</a>.', "mk_framework"),
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
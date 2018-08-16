<?php

vc_map(array(
    "name"        => __("Skill Meter", "mk_framework"),
    "base"        => "mk_skill_meter",
    'icon'        => 'icon-mk-skill-meter vc_mk_element-icon',
    'description' => __('Show skills in bars by percent.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textfield",
            "heading"     => __("Title", "mk_framework"),
            "param_name"  => "title",
            "value"       => "",
            "description" => __("What skill are you demonstrating?", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Percent", "mk_framework"),
            "param_name"  => "percent",
            "value"       => "50",
            "min"         => "0",
            "max"         => "100",
            "step"        => "1",
            "unit"        => '%',
            "description" => __("How many percent would you like to show from this skill?", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Progress Bar Height?", "mk_framework"),
            "param_name"  => "height",
            "value"       => "17",
            "min"         => "5",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Title Color", "mk_framework"),
            "param_name"  => "title_color",
            "value"       => '#777',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Progress Bar Background Color", "mk_framework"),
            "param_name"  => "progress_bar_color",
            "value"       => $skin_color,
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Track Bar Background Color", "mk_framework"),
            "param_name"  => "track_bar_color",
            "value"       => '#eee',
            "description" => __("", "mk_framework"),
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
<?php
vc_map(array(
    "name"        => __("Milestones", "mk_framework"),
    "base"        => "mk_milestone",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-milestone vc_mk_element-icon',
    'description' => __('Milestone numbers to show statistics.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Milestones Style?", "mk_framework"),
            "param_name"  => "style",
            "width"       => 200,
            "value"       => array(
                "Classic" => "classic",
                "Modern"  => "modern",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Number Start at", "mk_framework"),
            "param_name"  => "start",
            "value"       => "0",
            "min"         => "0",
            "max"         => "100000",
            "step"        => "1",
            "unit"        => '',
            "description" => __("Please choose in which number it should start.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Number Stop at", "mk_framework"),
            "param_name"  => "stop",
            "value"       => "100",
            "min"         => "0",
            "max"         => "100000",
            "step"        => "1",
            "unit"        => '',
            "description" => __("Please choose in which number it should Stop.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Speed", "mk_framework"),
            "param_name"  => "speed",
            "value"       => "2000",
            "min"         => "0",
            "max"         => "10000",
            "step"        => "1",
            "unit"        => 'ms',
            "description" => __("Speed of the animation from start to stop in milliseconds.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Number Text Size", "mk_framework"),
            "param_name"  => "number_size",
            "value"       => "46",
            "min"         => "10",
            "max"         => "60",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Content Below Numbers?", "mk_framework"),
            "param_name"  => "type",
            "width"       => 200,
            "value"       => array(
                "Icon"       => "icon",
                "Text"       => "text",
                "No Content" => "none",
            ),
            "description" => __("Using icon or text would you prefer to represent this milestone?", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Class Name", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'icon',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Size?", "mk_framework"),
            "param_name"  => "icon_size",
            "width"       => 200,
            "value"       => array(
                __('16px', "mk_framework")  => "16",
                __('32px', "mk_framework")  => "32",
                __('48px', "mk_framework")  => "48",
                __('64px', "mk_framework")  => "64",
                __('128px', "mk_framework") => "128",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'icon',
                ),
            ),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Text Below Numbers", "mk_framework"),
            "param_name"  => "text",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'text',
                ),
            ),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Number Suffix", "mk_framework"),
            "param_name"  => "text_suffix",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'modern',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Number Suffix Text Size", "mk_framework"),
            "param_name"  => "number_suffix_text_size",
            "value"       => "12",
            "min"         => "10",
            "max"         => "60",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'modern',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Text Size", "mk_framework"),
            "param_name"  => "text_size",
            "value"       => "12",
            "min"         => "10",
            "max"         => "60",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'text',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Skin color", "mk_framework"),
            "param_name"  => "color",
            "value"       => "#919191",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Bottom color", "mk_framework"),
            "param_name"  => "border_bottom",
            "value"       => "#eee",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Text/Icon Color", "mk_framework"),
            "param_name"  => "text_icon_color",
            "value"       => "",
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
<?php
vc_map(array(
    "name"        => __("Message Box", "mk_framework"),
    "base"        => "mk_message_box",
    'icon'        => 'icon-mk-message-box vc_mk_element-icon',
    "category"    => __('General', 'mk_framework'),
    'description' => __('Message Box with multiple types.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "dropdown",
            "heading"     => __("Type", "mk_framework"),
            "param_name"  => "type",
            "value"       => array(
                "Love Box"          => "love",
                "Hint Box"          => "hint",
                "Solution Box"      => "solution",
                "Alert Box"         => "alert",
                "Confirm Box"       => "confirm",
                "Warning Box"       => "warning",
                "Star Box"          => "star",
                "Built It Yourself" => "generic",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Pointed Style" => "pointed",
                "Rounded Style" => "rounded",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Add Box Icon Class Name", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'generic',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Color", "mk_framework"),
            "param_name"  => "box_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'generic',
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
                'element' => "type",
                'value'   => array(
                    'generic',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Content Color", "mk_framework"),
            "param_name"  => "content_color",
            "value"       => "",
            "description" => __("This option affects icon, vertical separator and text color.", "mk_framework"),
            "dependency"  => array(
                'element' => "type",
                'value'   => array(
                    'generic',
                ),
            ),
        ),

        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Write your message in this textarea.", "mk_framework"),
            "param_name"  => "content",
            "value"       => __("", "mk_framework"),
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
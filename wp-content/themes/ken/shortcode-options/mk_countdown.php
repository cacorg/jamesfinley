<?php

vc_map(array(
    "name"        => __("Event Countdown", "mk_framework"),
    "base"        => "mk_countdown",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-event-countdown vc_mk_element-icon',
    'description' => __('Countdown module for your events.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Upcoming Event Date", "mk_framework"),
            "param_name"  => "date",
            "value"       => "",
            "description" => __("Please fill this field with expect date. eg : 12/24/2016 12:00:00 => month/day/year hour:minute:second", "mk_framework"),
        ),

        array(
            "heading"    => __("UTC Timezone", "mk_framework"),
            "param_name" => "offset",
            "value"      => array(
                "-12" => "-12",
                "-11" => "-11",
                "-10" => "-10",
                "-9"  => "-9",
                "-8"  => "-8",
                "-7"  => "-7",
                "-6"  => "-6",
                "-5"  => "-5",
                "-4"  => "-4",
                "-3"  => "-3",
                "-2"  => "-2",
                "-1"  => "-1",
                "0"   => "0",
                "+1"  => "+1",
                "+2"  => "+2",
                "+3"  => "+3",
                "+4"  => "+4",
                "+5"  => "+5",
                "+6"  => "+6",
                "+7"  => "+7",
                "+8"  => "+8",
                "+9"  => "+9",
                "+10" => "+10",
                "+12" => "+12",
            ),
            "type"       => "dropdown",
        ),

        array(
            "heading"    => __("Skin", "mk_framework"),
            "param_name" => "skin",
            "value"      => array(
                __("Dark", "mk_framework")         => 'dark',
                __("Light", "mk_framework")        => 'light',
                __("Accent Color", "mk_framework") => 'accent',
                __("Custom", "mk_framework")       => 'custom',
            ),
            "type"       => "dropdown",
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Custom Color?", "mk_framework"),
            "param_name"  => "custom_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
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
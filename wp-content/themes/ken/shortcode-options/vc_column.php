<?php
vc_map(array(
    "name"            => __("Column", "mk_framework"),
    "base"            => "vc_column",
    "is_container"    => true,
    "content_element" => false,
    "params"          => array(
        array(
            "type"        => "colorpicker",
            "heading"     => __("Column Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("You can optionally add border color to columns.", "mk_framework"),
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
        array(
            'type'       => 'css_editor',
            'heading'    => __('Css', 'mk_framework'),
            'param_name' => 'css',
            'group'      => __('Design options', 'mk_framework'),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => __('Width', 'mk_framework'),
            'param_name'  => 'width',
            'value'       => $column_width_list,
            'group'       => __('Width & Responsiveness', 'mk_framework'),
            'description' => __('Select column width.', 'mk_framework'),
            'std'         => '1/1',
        ),
        array(
            'type'        => 'column_offset',
            'heading'     => __('Responsiveness', 'mk_framework'),
            'param_name'  => 'offset',
            'group'       => __('Width & Responsiveness', 'mk_framework'),
            'description' => __('Adjust column for different screen sizes. Control width, offset and visibility settings.', 'mk_framework'),
        ),
    ),
    "js_view"         => 'VcColumnView',
));

<?php

vc_map(array(
    "name"                      => __("Column", "mk_framework"),
    "base"                      => "vc_column_inner",
    "class"                     => "",
    "icon"                      => "",
    "wrapper_class"             => "",
    "controls"                  => "full",
    "allowed_container_element" => false,
    "content_element"           => false,
    "is_container"              => true,
    "params"                    => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
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
    ),
    "js_view"                   => 'VcColumnView',
));

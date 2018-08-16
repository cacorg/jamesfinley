<?php

vc_map(array(
    "name" => __("Row", "mk_framework"),
    "base" => "vc_row_inner",
    "content_element" => false,
    "is_container" => true,
    "show_settings_on_create" => false,
    'icon' => 'icon-mk-row vc_mk_element-icon',
    'description' => __( 'Place content elements inside the row', 'mk_framework' ),
    "params" => array(
        $add_device_visibility,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework")
        )
    ),
    "js_view" => 'VcRowView'
));
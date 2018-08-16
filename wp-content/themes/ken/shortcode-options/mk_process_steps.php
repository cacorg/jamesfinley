<?php
vc_map(array(
    "name"            => __("Process Steps", "mk_framework"),
    "base"            => "mk_process_steps",
    "as_parent"       => array('only' => 'mk_step'),
    "content_element" => true,
    'icon'            => 'icon-mk-process-builder vc_mk_element-icon',
    'description'     => __('Adds process steps element.', 'mk_framework'),
    "category"        => __('Content', 'mk_framework'),
    "params"          => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Orientation", "mk_framework"),
            "param_name"  => "orientation",
            "value"       => array(
                "Vertical"   => "vertical",
                "Horizontal" => "horizontal",

            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Skin", "mk_framework"),
            "param_name"  => "skin",
            "value"       => array(
                "dark"   => "dark",
                "Light"  => "light",
                "Custom" => "custom",

            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Background Color?", "mk_framework"),
            "param_name"  => "background_color",
            "value"       => "#fff",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Color?", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon Color?", "mk_framework"),
            "param_name"  => "icon_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon Hover Color?", "mk_framework"),
            "param_name"  => "icon_hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Title Color?", "mk_framework"),
            "param_name"  => "title_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "skin",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Description Color?", "mk_framework"),
            "param_name"  => "description_color",
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
    "js_view"         => 'VcColumnView',
));
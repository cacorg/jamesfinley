<?php
vc_map(array(
    "name"        => __("Call to Action", "mk_framework"),
    "base"        => "mk_call_to_action",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-mini-callout-box vc_mk_element-icon',
    'description' => __('Callout box for important infos.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Box Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Default" => "default",
                "Custom"  => "custom",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Layout Style", "mk_framework"),
            "param_name"  => "layout_style",
            "value"       => array(
                "Expended" => "expended",
                "Centered" => "centered",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Box Border Width", "mk_framework"),
            "param_name"  => "box_border_width",
            "value"       => "2",
            "min"         => "1",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Button Border Width", "mk_framework"),
            "param_name"  => "button_border_width",
            "value"       => "2",
            "min"         => "1",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Text Color", "mk_framework"),
            "param_name"  => "text_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Font Size", "mk_framework"),
            "param_name"  => "text_size",
            "value"       => "18",
            "min"         => "12",
            "max"         => "70",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Font Weight", "mk_framework"),
            "param_name"  => "font_weight",
            "width"       => 150,
            "value"       => array(
                __('Default', "mk_framework")   => "inherit",
                __('Bolder (900)', "mk_framework")    => "900",
                __('Bolder (800)', "mk_framework")    => "bolder",
                __('Bold (700)', "mk_framework")      => "bold",
                __('Semi Bold (600)', "mk_framework") => "600",
                __('Medium (500)', "mk_framework")    => "500",
                __('Normal (400)', "mk_framework")    => "normal",
                __('Light (300)', "mk_framework")     => "300",
                __('Lighter (200)', "mk_framework")     => "200",
                __('Lighter (100)', "mk_framework")     => "100",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Text Transform", "mk_framework"),
            "param_name"  => "text_transform",
            "width"       => 150,
            "value"       => array(
                __('Default', "mk_framework")    => "",
                __('None', "mk_framework")       => "none",
                __('Uppercase', "mk_framework")  => "uppercase",
                __('Lowercase', "mk_framework")  => "lowercase",
                __('Capitalize', "mk_framework") => "capitalize",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Content Text", "mk_framework"),
            "param_name"  => "text",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Button Text", "mk_framework"),
            "param_name"  => "button_text",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Button Style", "mk_framework"),
            "param_name"  => "button_style",
            "value"       => array(
                "Outline" => "outline",
                "Flat"    => "flat",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Button URL", "mk_framework"),
            "param_name"  => "button_url",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Skin", "mk_framework"),
            "param_name"  => "outline_skin",
            "value"       => "#444",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Hover State Skin", "mk_framework"),
            "param_name"  => "outline_hover_skin",
            "value"       => "#fff",
            "description" => __("This option is for Text and icon colors.", "mk_framework"),
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
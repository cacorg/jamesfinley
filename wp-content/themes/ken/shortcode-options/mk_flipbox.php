<?php
vc_map(array(
    "name"        => __("Flip Box", "mk_framework"),
    "base"        => "mk_flipbox",
    'icon'        => 'icon-mk-tab-slider vc_mk_element-icon',
    "category"    => __('General', 'mk_framework'),
    'description' => __('Flip based boxes.', 'mk_framework'),
    'params'      => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Flip Direction", "mk_framework"),
            "param_name"  => "flip_direction",
            "width"       => 300,
            "value"       => array(
                __('Horizontal', "mk_framework") => "horizontal",
                __('Vertical', "mk_framework")   => "vertical",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Front Background Color", "mk_framework"),
            "param_name"  => "front_background_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Back Background Color", "mk_framework"),
            "param_name"  => "back_background_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Front Side Opacity?", "mk_framework"),
            "param_name"  => "front_opacity",
            "value"       => "1",
            "min"         => "0.1",
            "max"         => "1",
            "step"        => "0.1",
            "unit"        => 'alpha',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Back Side Opacity?", "mk_framework"),
            "param_name"  => "back_opacity",
            "value"       => "1",
            "min"         => "0.1",
            "max"         => "1",
            "step"        => "0.1",
            "unit"        => 'alpha',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Front Aligment", "mk_framework"),
            "param_name"  => "front_align",
            "width"       => 200,
            "value"       => array(
                __('Left', "mk_framework")   => "left",
                __('Center', "mk_framework") => "center",
                __('Right', "mk_framework")  => "right",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Back Aligment", "mk_framework"),
            "param_name"  => "back_align",
            "width"       => 200,
            "value"       => array(
                __('Left', "mk_framework")   => "left",
                __('Center', "mk_framework") => "center",
                __('Right', "mk_framework")  => "right",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Front Vertical Aligment", "mk_framework"),
            "param_name"  => "front_vertical_align",
            "width"       => 200,
            "value"       => array(
                __('Middle', "mk_framework") => "middle",
                __('Top', "mk_framework")    => "top",
                __('Bottom', "mk_framework") => "bottom",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Back Vertical Aligment", "mk_framework"),
            "param_name"  => "back_vertical_align",
            "width"       => 200,
            "value"       => array(
                __('Middle', "mk_framework") => "middle",
                __('Top', "mk_framework")    => "top",
                __('Bottom', "mk_framework") => "bottom",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "heading"     => __("Minimum Height", "mk_framework"),
            "param_name"  => "min_height",
            "value"       => "300",
            "min"         => "250",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "heading"     => __("Max Width", "mk_framework"),
            "param_name"  => "max_width",
            "value"       => "500",
            "min"         => "250",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "heading"     => __("Left / Right Padding", "mk_framework"),
            "param_name"  => "box_padding",
            "value"       => "20",
            "min"         => "10",
            "max"         => "100",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "toggle",
            "heading"     => __('Border Radius?', 'mk_framework'),
            "description" => __("", "mk_framework"),
            "param_name"  => "box_radius",
            "value"       => "false",
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Front Title", "mk_framework"),
            "param_name"  => "front_title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Front Title Font Size", "mk_framework"),
            "param_name"  => "front_title_size",
            "value"       => "20",
            "min"         => "15",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Front Title Font Weight", "mk_framework"),
            "param_name"  => "front_title_font_weight",
            "width"       => 200,
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
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Front Title Font Color", "mk_framework"),
            "param_name"  => "front_title_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textarea",
            "heading"     => __("Front Description", "mk_framework"),
            "param_name"  => "front_desc",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Front Description Font Size", "mk_framework"),
            "param_name"  => "front_desc_size",
            "value"       => "20",
            "min"         => "15",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "heading"     => __("Front Description Line Height", "mk_framework"),
            "param_name"  => "front_desc_line_height",
            "value"       => "26",
            "min"         => "15",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Front Description Font Color", "mk_framework"),
            "param_name"  => "front_desc_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Back Title", "mk_framework"),
            "param_name"  => "back_title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Back Title Font Size", "mk_framework"),
            "param_name"  => "back_title_size",
            "value"       => "20",
            "min"         => "15",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Back Title Font Color", "mk_framework"),
            "param_name"  => "back_title_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Back Title Font Weight", "mk_framework"),
            "param_name"  => "back_title_font_weight",
            "width"       => 200,
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
        ),

        array(
            "type"        => "textarea",
            "heading"     => __("Back Description", "mk_framework"),
            "param_name"  => "back_desc",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Back Description Font Size", "mk_framework"),
            "param_name"  => "back_desc_size",
            "value"       => "20",
            "min"         => "15",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "heading"     => __("Back Description Line Height", "mk_framework"),
            "param_name"  => "back_desc_line_height",
            "value"       => "26",
            "min"         => "15",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Back Description Font Color", "mk_framework"),
            "param_name"  => "back_desc_color",
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
            "type"        => "textfield",
            "heading"     => __("Button Url", "mk_framework"),
            "param_name"  => "button_url",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Button Size", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "button_size",
            "value"       => array(
                __("Medium", 'mk_framework') => "medium",
                __("Small", 'mk_framework')  => "small",
                __("Large", 'mk_framework')  => "large",
            ),
            "type"        => "dropdown",
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Button Corner Style", "mk_framework"),
            "param_name"  => "button_corner_style",
            "value"       => array(
                "Pointed"      => "pointed",
                "Rounded"      => "rounded",
                "Full Rounded" => "full_rounded",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Skin Color", "mk_framework"),
            "param_name"  => "btn_skin_1",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Hover Color", "mk_framework"),
            "param_name"  => "btn_skin_2",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Button Alignment", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "btn_alignment",
            "value"       => array(
                __("Left", 'mk_framework')   => "left",
                __("Center", 'mk_framework') => "center",
                __("Right", 'mk_framework')  => "right",
            ),
            "type"        => "dropdown",
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),
    ),
));
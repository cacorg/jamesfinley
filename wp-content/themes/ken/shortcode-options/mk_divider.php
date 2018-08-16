<?php
vc_map(array(
    "name"        => __("Divider", "mk_framework"),
    "base"        => "mk_divider",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-divider vc_mk_element-icon',
    'description' => __('Dividers with many styles & options.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "dropdown",
            "heading"     => __("Divider Orientation", "mk_framework"),
            "param_name"  => "orientation",
            "value"       => array(
                "Horizontal" => 'horizontal',
                "Vertical" => 'vertical'
            ),
            "description" => __("Please choose the divider orientation.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Line"   => 'single',
                "Dotted" => 'dotted',
                "Dashed" => 'dashed',
                "Thick"  => 'thick',
            ),
            "description" => __("Please Choose the style of the line of divider.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Divider Color (optional)", "mk_framework"),
            "param_name"  => "divider_color",
            "value"       => '',
            "description" => __("This option will not affect fancy divider border color. default color : #e4e4e4", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Divider Width", "mk_framework"),
            "param_name"  => "divider_width",
            "value"       => array(
                "Full Width"   => "full_width",
                "One Half"     => "one_half",
                "One Third"    => "one_third",
                "One Fourth"   => "one_fourth",
                "Custom Width" => "custom_width",
            ),
            "description" => __("There are 5 widths you can define for each of your divider styles.", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'horizontal',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Divider Height", "mk_framework"),
            "param_name"  => "divider_height",
            "value"       => "50",
            "min"         => "0",
            "max"         => "5000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'vertical',
                )
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Divider Custom Width", "mk_framework"),
            "param_name"  => "custom_width",
            "value"       => "10",
            "min"         => "1",
            "max"         => "900",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Choose any custom width for divider", "mk_framework"),
            "dependency"  => array(
                'element' => "divider_width",
                'value'   => array(
                    'custom_width',
                ),
            ),
        ),
        array(
            "type"       => "dropdown",
            "heading"    => __("Divider Align", "mk_framework"),
            "param_name" => "vertical_align",
            "value"      => array(
                "Center" => "center",
                "Left"   => "left",
                "Right"  => "right",
            ),
            "dependency" => array(
                'element' => "orientation",
                'value'   => array(
                    'vertical',
                ),
            ),
        ),
        array(
            "type"       => "dropdown",
            "heading"    => __("Divider Align", "mk_framework"),
            "param_name" => "align",
            "value"      => array(
                "Center" => "center",
                "Left"   => "left",
                "Right"  => "right",
            ),
            "dependency" => array(
                'element' => "divider_width",
                'value'   => array(
                    'custom_width',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Divider Thickness", "mk_framework"),
            "param_name"  => "thickness",
            "value"       => "2",
            "min"         => "1",
            "max"         => "20",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'single',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Padding Top", "mk_framework"),
            "param_name"  => "margin_top",
            "value"       => "20",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("How much space would you like to have before divider? this value will be applied to top.", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'horizontal',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Padding Bottom", "mk_framework"),
            "param_name"  => "margin_bottom",
            "value"       => "20",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("How much space would you like to have after divider? this value will be applied to bottom.", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'horizontal',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Padding Left", "mk_framework"),
            "param_name"  => "padding_left",
            "value"       => "0",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("How much space would you like to have before divider? this value will be applied to left.", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'vertical',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Padding Right", "mk_framework"),
            "param_name"  => "padding_right",
            "value"       => "0",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("How much space would you like to have after divider? this value will be applied to right.", "mk_framework"),
            "dependency"  => array(
                'element' => "orientation",
                'value'   => array(
                    'vertical',
                ),
            ),
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
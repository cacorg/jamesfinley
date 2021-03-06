<?php
vc_map(array(
    "name"        => __("Animated Columns", "mk_framework"),
    "base"        => "mk_animated_columns",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-animated-columns vc_mk_element-icon',
    'description' => __('Columns with cool animations.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "range",
            "heading"     => __("Column Height", "mk_framework"),
            "param_name"  => "column_height",
            "value"       => "500",
            "min"         => "100",
            "max"         => "1200",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Set the columns height", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("How many Columns in One Row?", "mk_framework"),
            "param_name"  => "column_number",
            "value"       => "4",
            "min"         => "1",
            "max"         => "8",
            "step"        => "1",
            "unit"        => 'columns',
            "description" => __("How many columns would you like to show in one row?", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Item Spacing", "mk_framework"),
            "param_name"  => "item_spacing",
            "value"       => "0",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Space between items.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Margin Bottom", "mk_framework"),
            "param_name"  => "item_margin_bottom",
            "value"       => "0",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Animated Columns', 'mk_framework' ),
            'param_name'  => 'columns',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'mk_framework' ),
        ),

        array(
            "heading"     => __("Order", 'mk_framework'),
            "description" => __("Designates the ascending or descending order of the 'orderby' parameter.", 'mk_framework'),
            "param_name"  => "order",
            "value"       => array(
                __("DESC (descending order)", 'mk_framework') => "DESC",
                __("ASC (ascending order)", 'mk_framework')   => "ASC",
            ),
            "type"        => "dropdown",
        ),
        array(
            "heading"     => __("Orderby", 'mk_framework'),
            "description" => __("Sort retrieved pricing items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
            "type"        => "dropdown",
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Column Styles", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Simple Icon (Icon+Title)" => "simple",
                "Simple Text (Text+Title)" => "simple_text",
                "Full Featured (All)"      => "full",
            ),
            "description" => __("Please choose your columns styles. In each style the feeding content and hover scenarios will be different.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Cover Whole with Link?", "mk_framework"),
            "param_name"  => "cover_link",
            "value"       => "false",
            "description" => __("If you wish the whole area to be covered with a link, enable this option.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Columns Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "#ccc",
            "description" => __("The column box color.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Columns Hover Border Color", "mk_framework"),
            "param_name"  => "border_hover_color",
            "value"       => "#ccc",
            "description" => __("The column box color.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Columns background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "#fff",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Columns background Hover Color", "mk_framework"),
            "param_name"  => "bg_hover_color",
            "value"       => "#333333",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Size", "mk_framework"),
            "param_name"  => "icon_size",
            "value"       => array(
                __('16px', "mk_framework")  => "16",
                __('32px', "mk_framework")  => "32",
                __('48px', "mk_framework")  => "48",
                __('64px', "mk_framework")  => "64",
                __('128px', "mk_framework") => "128",
            ),
            "description" => __("Choose the icon sizes.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon / Text Color", "mk_framework"),
            "param_name"  => "icon_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon / Text Hover Color", "mk_framework"),
            "param_name"  => "icon_hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Text Color (Active)", "mk_framework"),
            "param_name"  => "txt_color",
            "value"       => "#444",
            "description" => __("This color will be used for title and description normal color. Description will have 70% opacity.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Text Color (Hover)", "mk_framework"),
            "param_name"  => "txt_hover_color",
            "value"       => "#fff",
            "description" => __("This color will be used for title and description hover color.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Color (Active)", "mk_framework"),
            "param_name"  => "btn_color",
            "value"       => "#444",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Color (Hover)", "mk_framework"),
            "param_name"  => "btn_hover_color",
            "value"       => "#fff",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Viewport Animation", "mk_framework"),
            "param_name"  => "animation",
            "value"       => $css_animations,
            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework"),
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
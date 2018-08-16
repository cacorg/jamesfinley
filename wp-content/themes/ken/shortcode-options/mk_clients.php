<?php

vc_map(array(
    "name"        => __("Clients", "mk_framework"),
    "base"        => "mk_clients",
    'icon'        => 'icon-mk-clients vc_mk_element-icon',
    "category"    => __('Loops', 'mk_framework'),
    'description' => __('Shows Clients posts in multiple styles.', 'mk_framework'),
    "params"      => array(

        array(
            "heading"     => __("Style", 'mk_framework'),
            "description" => __("Choose clients loop style", 'mk_framework'),
            "param_name"  => "style",
            "value"       => array(
                __("Column", 'mk_framework') => "column",
                __("Grid", 'mk_framework')   => "grid",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "range",
            "heading"     => __("How many Columns?", "mk_framework"),
            "param_name"  => "column",
            "value"       => "3",
            "min"         => "1",
            "max"         => "6",
            "step"        => "1",
            "unit"        => 'columns',
            "description" => __("This option defines how many columns will be set in one row. This option only works for column style", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Client Item height", "mk_framework"),
            "param_name"  => "item_height",
            "value"       => "180",
            "min"         => "100",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Defines the client item height. please note that this option only works for column style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Count", "mk_framework"),
            "param_name"  => "count",
            "value"       => "10",
            "min"         => "-1",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'clients',
            "description" => __("How many Clients you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework"),
        ),
        array(
            "heading"     => __("Scroller", 'mk_framework'),
            "description" => __("If you enable this option grids will be horizontally scroller and you can swipe through items.", 'mk_framework'),
            "param_name"  => "scroll",
            "value"       => array(
                __("Enable", 'mk_framework')  => "true",
                __("Disable", 'mk_framework') => "false",
            ),
            "type"        => "dropdown",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Clients', 'mk_framework' ),
            'param_name'  => 'clients',
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
            "description" => __("Sort retrieved client items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
            "type"        => "dropdown",
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("Please note that this option only works for Column style as well as grid style (when scroller is enabled).", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Box Border Width", "mk_framework"),
            "param_name"  => "border_width",
            "value"       => "2",
            "min"         => "0",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Logo Box Dimension", "mk_framework"),
            "param_name"  => "dimension",
            "value"       => "180",
            "min"         => "50",
            "max"         => "600",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("This value will be applied to logo box width & height.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Fit to Background", "mk_framework"),
            "description" => __("Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area", "mk_framework"),
            "param_name"  => "cover",
            "value"       => "false",
        ),
        array(
            "type"       => "toggle",
            "heading"    => __("Hover State Company Details.", "mk_framework"),
            "param_name" => "hover_state",
            "value"      => "true",
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Target", "mk_framework"),
            "param_name"  => "target",
            "width"       => 200,
            "value"       => $target_arr,
            "description" => __("Target for the links.", "mk_framework"),
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
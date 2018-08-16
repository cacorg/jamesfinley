<?php

vc_map(array(
    "name"        => __("Employees", "mk_framework"),
    "base"        => "mk_employees",
    'icon'        => 'icon-mk-employees vc_mk_element-icon',
    "category"    => __('Loops', 'mk_framework'),
    'description' => __('Shows Employees posts in multiple styles.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "width"       => 300,
            "value"       => array(
                __('Column Based (Rounded)', "mk_framework") => "column_rounded",
                __('Column based (shadowed)', "mk_framework")           => "column_shadowed",
                __('Column Based', "mk_framework")           => "column",
                __('grid', "mk_framework")                   => "grid",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Column", "mk_framework"),
            "param_name"  => "column",
            "value"       => "3",
            "min"         => "1",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'columns',
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_rounded',
                    'column',
                    'column_shadowed'
                ),
            ),
            "description" => __("Defines how many column to be in one row.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Image Dimension", "mk_framework"),
            "param_name"  => "dimension",
            "value"       => "250",
            "min"         => "100",
            "max"         => "600",
            "step"        => "1",
            "unit"        => 'px',
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
            "description" => __("This value wil be applied to employee image width & height. Be infomed social network icons will not be displayed in image size less than 200px.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Scroller", "mk_framework"),
            "param_name"  => "scroll",
            "value"       => "true",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
            "description" => __("If you enable this option grids will be horizontally scrolled.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Count", "mk_framework"),
            "param_name"  => "count",
            "value"       => "10",
            "min"         => "-1",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'employee',
            "description" => __("How many Employees you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework"),
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Employees', 'mk_framework' ),
            'param_name'  => 'employees',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'mk_framework' ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Offset", "mk_framework"),
            "param_name"  => "offset",
            "value"       => "0",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'posts',
            "description" => __("Number of post to displace or pass over, it means based on your order of the loop, this number will define how many posts to pass over and start from the nth number of the offset.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Description", "mk_framework"),
            "param_name"  => "description",
            "value"       => "true",
            "description" => __("If you dont want to show Employees description disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Social Networks", "mk_framework"),
            "param_name"  => "social_networks",
            "value"       => "true",
            "description" => __("If you dont want to show Employees description disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"       => "dropdown",
            "heading"    => __("Social Media Icons Type", "mk_framework"),
            "param_name" => "social_networks_style",
            "value"      => array(
                "Rectangle" => "rectangle",
                "Circle" => "circle",
                "Rounded" => "rounded",
            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Name Font Color", "mk_framework"),
            "param_name"  => "name_color",
            "value"       => "#211f21",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Position Font Color", "mk_framework"),
            "param_name"  => "position_color",
            "value"       => "#1770ff",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Description Font Color", "mk_framework"),
            "param_name"  => "desc_color",
            "value"       => "#b0b0b0",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Social Media Icons Color", "mk_framework"),
            "param_name"  => "social_networks_color",
            "value"       => "#2540e4",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Drop Shadow Color", "mk_framework"),
            "param_name"  => "shadow_color",
            "value"       => "rgba(60,60,60,0.16)",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Container Color", "mk_framework"),
            "param_name"  => "container_color",
            "value"       => "#fff",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Drop Shadow Size", "mk_framework"),
            "param_name"  => "shadow_size",
            "value"       => "40",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'column_shadowed',
                ),
            ),
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
            "description" => __("Sort retrieved employee items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
            "type"        => "dropdown",
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Employee Image Stretchability", "mk_framework"),
            "param_name"  => "full_width_image",
            "value"       => "false",
            "description" => __("Enabling this option will set employee image cover the whole grid area.", "mk_framework"),
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
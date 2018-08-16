<?php
vc_map(array(
    "name"        => __("Product Categories Loops", "mk_framework"),
    "base"        => "mk_product_categories",
    "icon"        => 'icon-mk-blog vc_mk_element-icon',
    "category"    => __('Loops', 'mk_framework'),
    'description' => __('Product categories loops are here.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "range",
            "heading"     => __("Number of Product?", "mk_framework"),
            "param_name"  => "number_per_page",
            "value"       => "12",
            "min"         => "1",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'product',
            "description" => __("How many product would you like to view?", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Number of Product on Row?", "mk_framework"),
            "param_name"  => "columns",
            "value"       => "4",
            "min"         => "1",
            "max"         => "4",
            "step"        => "1",
            "unit"        => 'product',
            "description" => __("How many product would you like to one row?", "mk_framework"),
        ),

        array(
            "heading"     => __("Orderby", 'mk_framework'),
            "description" => __("Sort retrieved pricing items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_product_categories_orderby,
            "type"        => "dropdown",
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
    ),
));
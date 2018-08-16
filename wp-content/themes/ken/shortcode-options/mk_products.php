<?php
if (function_exists('is_woocommerce')) {
    vc_map(array(
        "name"        => __("Product Loops", "mk_framework"),
        "base"        => "mk_products",
        "icon"        => 'icon-mk-blog vc_mk_element-icon',
        "category"    => __('Loops', 'mk_framework'),
        'description' => __('Product loops are here.', 'mk_framework'),
        "params"      => array(

            array(
                "heading"     => __("Style", 'mk_framework'),
                "description" => __("please select which woocommerce loop style you would like to use.", 'mk_framework'),
                "param_name"  => "style",
                "value"       => array(
                    __("Classic", 'mk_framework') => "classic",
                    __("Modern", 'mk_framework')  => "modern",
                ),
                "type"        => "dropdown",
            ),

            array(
                "heading"     => __("Display", 'mk_framework'),
                "description" => __("", 'mk_framework'),
                "param_name"  => "display",
                "value"       => array(
                    __("Recent Products", 'mk_framework')        => "recent",
                    __("Featured Products", 'mk_framework')      => "featured",
                    __("Top Rated Products", 'mk_framework')     => "top_rated",
                    __("Product Category", 'mk_framework')       => "product_category",
                    __("Products on Sale", 'mk_framework')       => "products_on_sale",
                    __("Best Sellings Products", 'mk_framework') => "best_sellings",
                ),
                "type"        => "dropdown",
            ),

            array(
                'type'        => 'autocomplete',
                'heading'     => __( 'Select specific Categories', 'mk_framework' ),
                'param_name'  => 'category',
                'settings' => array(
                                    'multiple' => true,
                                    'sortable' => true,
                                    'unique_values' => true,
                                ),
                'description' => __( 'Search for category name to get autocomplete suggestions', 'mk_framework' ),
            ),

            array(
                "heading"     => __("Orderby", 'mk_framework'),
                "description" => __("Sort retrieved Blog items by parameter.", 'mk_framework'),
                "param_name"  => "orderby",
                "value"       => $mk_product_orderby,
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

            array(
                "type"        => "range",
                "heading"     => __("How many Columns?", "mk_framework"),
                "param_name"  => "column",
                "value"       => "3",
                "min"         => "1",
                "max"         => "4",
                "step"        => "1",
                "unit"        => 'columns',
                "description" => __("This option defines how many columns will be set in one row.", "mk_framework"),
            ),
            array(
                "type"        => "range",
                "heading"     => __("How many Product?", "mk_framework"),
                "param_name"  => "product_per_page",
                "value"       => "12",
                "min"         => "4",
                "max"         => "30",
                "step"        => "1",
                "unit"        => 'product',
                "description" => __("This option defines how many producr will be set in a page.", "mk_framework"),
            ),
            array(
                "type"        => "toggle",
                "heading"     => __("Pagination", "mk_framework"),
                "description" => __("", "mk_framework"),
                "param_name"  => "pagination",
                "value"       => "true",
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
}
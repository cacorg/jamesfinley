<?php
vc_map(array(
    "name"        => __("Portfolio", "mk_framework"),
    "base"        => "mk_portfolio",
    'icon'        => 'icon-mk-portfolio vc_mk_element-icon',
    "category"    => __('Loops', 'mk_framework'),
    'description' => __('Portfolio loops are here.', 'mk_framework'),
    "params"      => array(
        array(
            "heading"     => __("Style", 'mk_framework'),
            "description" => __("please select which Portfolio loop style you would like to use.", 'mk_framework'),
            "param_name"  => "style",
            "value"       => array(
                __("Grid", 'mk_framework')     => "grid",
                __("Masonry", 'mk_framework')  => "masonry",
                __("Flip", 'mk_framework')     => "flip",
                __("Standard", 'mk_framework') => "standard",
                __("Scroller", 'mk_framework') => "scroller",
                __("Nudge", 'mk_framework') => "nudge",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"       => "dropdown",
            "heading"    => __("How many row in one side?", "mk_framework"),
            "param_name" => "item_row",
            "value"      => array(
                __("One row in one slide", 'mk_framework') => "1",
                __("Two row in one slide", 'mk_framework') => "2",
            ),
            "dependency" => array(
                'element' => "style",
                'value'   => array(
                    'scroller',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("How many Posts in a page?", "mk_framework"),
            "param_name"  => "count",
            "value"       => "10",
            "min"         => "-1",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'posts',
            "description" => __("How many Posts you would like to show? -1 will means whatever you have chosen in wordpress => reading => posts per page option.", "mk_framework"),
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
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Categories', 'mk_framework' ),
            'param_name'  => 'categories',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                            ),
            'description' => __( 'Search for category name to get autocomplete suggestions', 'mk_framework' ),
        ),
         array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Posts', 'mk_framework' ),
            'param_name'  => 'posts',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'mk_framework' ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("How many Columns?", "mk_framework"),
            "param_name"  => "column",
            "value"       => "3",
            "min"         => "1",
            "max"         => "5",
            "step"        => "1",
            "unit"        => 'columns',
            "description" => __("How many columns you would like to have in one row?", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'standard',
                    'flip',
                    'nudge'
                ),
            ),
        ),
        array(
            "heading" => __("Grid Spacing", 'mk_framework'),
            "description" => __("Space between portfolio items. If value is set to \"-1\" the default values will be used.", 'mk_framework'),
            "param_name" => "grid_spacing",
            "group" => __('Styles & Colors', 'mk_framework') ,
            "value" => "-1",
            "min" => "-1",
            "max" => "100",
            "step" => "1",
            "unit" => 'px',
            "type" => "range",
        ),
        array(
            "heading"     => __("Hover Scenarios", 'mk_framework'),
            "description" => __("This is what happens when user hovers over a portfolio item. Different animations and styles will be showed up on each scenario.", 'mk_framework'),
            "param_name"  => "hover_style",
            "group" => __('Styles & Colors', 'mk_framework') ,
            "value"       => array(
                __("Classic", 'mk_framework')  => "classic",
                __("Gradient", 'mk_framework') => "gradient",
                __("Zoom In", 'mk_framework')  => "zoom-in",
                __("Zoom Out", 'mk_framework') => "zoom-out",
                __("Stroke", 'mk_framework')   => "stroke",
                __("Parallax", 'mk_framework') => "parallax",
            ),
            "type"        => "dropdown",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'masonry',
                    'standard',
                    'scroller',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Hover Background Color", "mk_framework"),
            "param_name"  => "hove_bg_color",
            "group" => __('Styles & Colors', 'mk_framework') ,
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "hover_style",
                'value'   => array(
                    'gradient',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Shows Posts Using Ajax?", "mk_framework"),
            "param_name"  => "ajax",
            "value"       => "false",
            "description" => __("If you enable this option the portfolio posts items will be viewed in the same page above the loop.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip',
                ),
            ),

        ),

        array(
            "heading"     => __("Image Size", 'mk_framework'),
            "description" => __("Please note that this option will not work for Masonry option.", 'mk_framework'),
            "param_name"  => "image_size",
            "value"       => array(
                __("Resize & Crop", 'mk_framework') => "crop",
                __("Original Size", 'mk_framework') => "full",
                __("Large Size", 'mk_framework')    => "large",
                __("Medium Size", 'mk_framework')   => "medium",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "range",
            "heading"     => __("Image Width", "mk_framework"),
            "param_name"  => "width",
            "value"       => "400",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'scroller',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Image Height", "mk_framework"),
            "param_name"  => "height",
            "value"       => "400",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'scroller',
                    'grid',
                    'standard',
                    'flip',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Increase Quality of Image", "mk_framework"),
            "param_name"  => "image_quality",
            "value"       => array(
                __("No Actions", 'mk_framework')                                       => "1",
                __("Images 2 times bigger (retina compatible)", 'mk_framework')        => "2",
                __("Images 3 times bigger (fullwidth row compatible)", 'mk_framework') => "3",
            ),
            "description" => __("If you want portfolio images be retina compatible or you just want to use it in fullwidth row, you may consider increasing the image size. This option will help you define the image quality yourself.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'masonry',
                    'grid',
                    'standard',
                    'flip',
                ),
            ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Sortable?", "mk_framework"),
            "param_name"  => "sortable",
            "value"       => "true",
            "description" => __("If you dont want sortable filter navigation disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip',
                    'nudge'
                ),
            ),
        ),
        array(
            "type"       => "dropdown",
            "heading"    => __("Sortable Align?", "mk_framework"),
            "param_name" => "sortable_align",
            "value"      => array(
                __("Center", 'mk_framework') => "center",
                __("Left", 'mk_framework')   => "left",
                __("Right", 'mk_framework')  => "right",
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Pagination?", "mk_framework"),
            "param_name"  => "pagination",
            "value"       => "true",
            "description" => __("If you dont want to have pagination for this loop disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip',
                    'nudge'
                ),
            ),
        ),

        array(
            "heading"     => __("Pagination Style", 'mk_framework'),
            "description" => __("please select which pagination style you would like to use on this loop.", 'mk_framework'),
            "param_name"  => "pagination_style",
            "value"       => array(
                __("Classic Pagination Navigation", 'mk_framework') => "1",
                __("Load more button", 'mk_framework')              => "2",
            ),
            "type"        => "dropdown",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                    'masonry',
                    'standard',
                    'flip',
                    'nudge'
                ),
            ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Lightbox Plus Icon", "mk_framework"),
            "param_name"  => "plus_icon",
            "value"       => "true",
            "description" => __("If you don't want to have lightbox feature on this portfolio loop, disable this option. This option will remove plus icon from image hover.", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Permalink Arrow Icon", "mk_framework"),
            "param_name"  => "permalink_icon",
            "value"       => "true",
            "description" => __("If you don't need permalink button from this loop image hover, disable this option.", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Portfolio Overlay Logo", "mk_framework"),
            "param_name"  => "show_logo",
            "value"       => "true",
            "description" => __("If you do not want to show portfolio item logo that appears over images then turn off this option.", "mk_framework"),
        ),

        array(
            "type" => "range",
            "heading" => __("Title Font Size", "mk_framework") ,
            "param_name" => "font_size",
            "group" => __('Styles & Colors', 'mk_framework') ,
            "value" => "0",
            "min" => "0",
            "max" => "50",
            "step" => "1",
            "unit" => 'px',
            "description" => __("Using this option you may change portfolio post title, Set this option to zero if you prefer not to change the theme built-in font size.", "mk_framework")
        ) ,
        array(
            "type"        => "colorpicker",
            "heading"     => __("Item Border color", "mk_framework"),
            "param_name"  => "border_color",
            "group" => __('Styles & Colors', 'mk_framework') ,
            "value"       => "#eeeeee",
            "description" => __("Using this option you can change portfolio item border color.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'standard',
                    ),
                ),
            ),
        array(
            "type"        => "toggle",
            "heading"     => __("Show Post Category", "mk_framework"),
            "param_name"  => "show_category",
            "value"       => "true",
            "description" => __("Turn off this option if you don't wish to show portfolio category in the post loop.", "mk_framework"),
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
            "description" => __("Sort retrieved Portfolio items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
            "type"        => "dropdown",
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),
        $add_device_visibility,
        array(
            'type'       => 'item_id',
            'heading'    => __('Item ID', 'mk_framework'),
            'param_name' => "item_id",
        ),
    ),
));
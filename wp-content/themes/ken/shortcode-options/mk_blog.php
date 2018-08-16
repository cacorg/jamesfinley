<?php
vc_map(array(
    "name"        => __("Blog", "mk_framework"),
    "base"        => "mk_blog",
    'icon'        => 'icon-mk-blog vc_mk_element-icon',
    "category"    => __('Loops', 'mk_framework'),
    'description' => __('Blog loops are here.', 'mk_framework'),
    "params"      => array(

        array(
            "heading"     => __("Style", 'mk_framework'),
            "description" => __("please select which blog loop style you would like to use.", 'mk_framework'),
            "param_name"  => "style",
            "value"       => array(
                __("Classic", 'mk_framework')   => "classic",
                __("Modern", 'mk_framework')    => "modern",
                __("Masonry", 'mk_framework')   => "masonry",
                __("Tile", 'mk_framework')      => "tile",
                __("Magazine", 'mk_framework')  => "magazine",
                __("Thumbnail", 'mk_framework') => "thumb",
                __("List", 'mk_framework')      => "list",
                __("Scroller", 'mk_framework')  => "scroller",
                __("Slideshow", 'mk_framework') => "slideshow",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Loop Structure (Magazine Style Only)", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "magazine_strcutre",
            "value"       => array(
                __("One Column", 'mk_framework')                                => 1,
                __("Two Columns (Featured post on left side)", 'mk_framework')  => 2,
                __("Two Columns (Featured post on right side)", 'mk_framework') => 3,

            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'magazine',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Author Thumbnail (Only for Tile Style)", "mk_framework"),
            "param_name"  => "author",
            "value"       => "true",
            "description" => __("Using this option you can disable/enable author avatar from blog loop tile style.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'tile',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Slideshow Layout (Slideshow Style Only)", 'mk_framework'),
            "description" => __("This option will let you control the slideshow layout to be full or with sidebar layout. If you are using it in a page section to have it fullwidth but the page layout is with sidebar, then you can use this option to override the functionality.", 'mk_framework'),
            "param_name"  => "slideshow_layout",
            "value"       => array(
                __("Default", 'mk_framework')      => 'default',
                __("Full Layout", 'mk_framework')  => 'full',
                __("With Sidebar", 'mk_framework') => 'sidebar',

            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'slideshow',
                ),
            ),
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
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'masonry',
                    'tile',
                ),
            ),
        ),
        array(
            "type"       => "range",
            "heading"    => __("Images Width (Scroller Style Only)", "mk_framework"),
            "param_name" => "image_width",
            "value"      => "220",
            "min"        => "100",
            "max"        => "1000",
            "step"       => "1",
            "unit"       => 'px',
            "dependency" => array(
                'element' => "style",
                'value'   => array(
                    'scroller',
                ),
            ),
        ),
        array(
            "type"       => "range",
            "heading"    => __("Images Height", "mk_framework"),
            "param_name" => "image_height",
            "value"      => "350",
            "min"        => "100",
            "max"        => "1000",
            "step"       => "1",
            "unit"       => 'px',
            "dependency" => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'scroller',
                    'slideshow',
                    'modern',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Image Cropping.", "mk_framework"),
            "description" => __("If you have this option enabled the image will be cropped based on the image height option above and the width we dynamically calculate for the layout and column you choose. if you want to show the full size featured image disable this option.", "mk_framework"),
            "param_name"  => "cropping",
            "value"       => "true",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'modern',
                    'magazine',
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
            "description" => __("How many Posts you would like to show? (-1 means unlimited, please note that unlimited will be overrided the limit you defined at : Wordpress Sidebar > Settings > Reading > Blog pages show at most.)", "mk_framework"),
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
            'param_name'  => 'cat',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                                // In UI show results except selected. NB! You should manually check values in backend
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
                                // In UI show results except selected. NB! You should manually check values in backend
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'mk_framework' ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Post Meta", "mk_framework"),
            "param_name"  => "disable_meta",
            "value"       => "true",
            "description" => __("If you dont want to show post meta (author and categories) disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'scroller',
                    'slideshow',
                    'modern',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Content Type (Classic Style Only)", 'mk_framework'),
            "description" => __("You can show blog full content in classic style loop.", 'mk_framework'),
            "param_name"  => "classic_excerpt",
            "value"       => array(
                __("Summry (Excerpt)", 'mk_framework') => "excerpt",
                __("Full content", 'mk_framework')     => "content",
            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                ),
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
                    'classic',
                    'masonry',
                    'tile',
                    'thumb',
                    'list',
                    'modern',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Pagination Style", 'mk_framework'),
            "description" => __("please select which pagination style you would like to use on this loop.", 'mk_framework'),
            "param_name"  => "pagination_style",
            "value"       => array(
                __("Classic Pagination Navigation", 'mk_framework') => "1",
                __("Load more button", 'mk_framework')              => "2",
            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'thumb',
                    'list',
                    'modern',

                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Post Excerpt Length", "mk_framework"),
            "description" => __("Define the length of the length of the excerpt in number of characters. Zero will disable excerpt.", 'mk_framework'),
            "param_name"  => "excerpt_length",
            "value"       => "200",
            "min"         => "0",
            "max"         => "2000",
            "step"        => "1",
            "unit"        => 'characters',
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'list',
                    'magazine',
                ),
            ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Sortable?", "mk_framework"),
            "param_name"  => "sortable",
            "value"       => "false",
            "description" => __("If you dont want sortable filter navigation disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                    'masonry',
                    'tile',
                    'list',
                    'thumb',
                    'modern',
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
            "description" => __("Sort retrieved Blog items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
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
        array(
            'type'       => 'item_id',
            'heading'    => __('Item ID', 'mk_framework'),
            'param_name' => "item_id",
        ),

    ),
));
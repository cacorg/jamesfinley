<?php
vc_map(array(
    "name"        => __("Testimonials", "mk_framework"),
    "base"        => "mk_testimonials",
    'icon'        => 'icon-mk-testimonial-slideshow vc_mk_element-icon',
    "category"    => __('Slideshows', 'mk_framework'),
    'description' => __('Shows Testimonials in multiple styles.', 'mk_framework'),
    "params"      => array(

        array(
            "heading"     => __("Style", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "style",
            "value"       => array(
                __("Boxed Style", 'mk_framework')     => "boxed",
                __("Quotation Style", 'mk_framework') => "quote",
                __("Modern Style", 'mk_framework')    => "modern",
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "range",
            "heading"     => __("Count", "mk_framework"),
            "param_name"  => "count",
            "value"       => "4",
            "min"         => "-1",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'testimonial',
            "description" => __("How many testimonial you would like to show? (-1 means unlimited)", "mk_framework"),
        ),
        array(
            'type'        => 'autocomplete',
            'heading'     => __( 'Select specific Testimonials', 'mk_framework' ),
            'param_name'  => 'testimonials',
            'settings' => array(
                                'multiple' => true,
                                'sortable' => true,
                                'unique_values' => true,
                            ),
            'description' => __( 'Search for post ID or post title to get autocomplete suggestions', 'mk_framework' ),
        ),
        array(
            "type"        => "theme_fonts",
            "heading"     => __("Font Family", "mk_framework"),
            "param_name"  => "font_family",
            "value"       => "",
            "description" => __("You can choose a font for this shortcode, however using non-safe fonts can affect page load and performance.", "mk_framework"),
        ),
        array(
            "type"        => "hidden_input",
            "param_name"  => "font_type",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Quote Text Size?", "mk_framework"),
            "param_name"  => "font_size",
            "value"       => "14",
            "min"         => "10",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Quote Text Color?", "mk_framework"),
            "param_name"  => "font_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Author Text Size?", "mk_framework"),
            "param_name"  => "author_font_size",
            "value"       => "12",
            "min"         => "10",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Author Text Color?", "mk_framework"),
            "param_name"  => "author_font_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Company Name Text Size?", "mk_framework"),
            "param_name"  => "company_font_size",
            "value"       => "12",
            "min"         => "10",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Company Name Text Color?", "mk_framework"),
            "param_name"  => "company_font_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "heading"     => __("Skin", 'mk_framework'),
            "description" => __("Please note that this option will only work in \"Quotation Style\"", 'mk_framework'),
            "param_name"  => "skin",
            "value"       => array(
                __("Dark", 'mk_framework')  => "dark",
                __("Light", 'mk_framework') => "light",
            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'quote',
                ),
            ),
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
            "heading"     => __("Orderby", 'mk_framework'),
            "description" => __("Sort retrieved client items by parameter.", 'mk_framework'),
            "param_name"  => "orderby",
            "value"       => $mk_orderby,
            "type"        => "dropdown",
        ),

        array(
            "heading"     => __("Slides animation", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "animation_effect",
            "value"       => array(
                __("Slide", 'mk_framework') => "slide",
                __("Fade", 'mk_framework')  => "fade",
            ),
            "type"        => "dropdown",
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
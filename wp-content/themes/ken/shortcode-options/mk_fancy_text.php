<?php
vc_map(array(
    "name"        => __("Fancy Text", "mk_framework"),
    "base"        => "mk_fancy_text",
    "category"    => __('Typography', 'mk_framework'),
    'icon'        => 'icon-mk-title-box vc_mk_element-icon',
    'description' => __('Adds title text into a highlight box.', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textarea_html",
            "rows"        => 2,
            "holder"      => "div",
            "heading"     => __("Content.", "mk_framework"),
            "param_name"  => "content",
            "value"       => __("", "mk_framework"),
            "description" => __("Allowed Tags [em] [del] [i] [b] [strong] [u] [span] [small] [large] [sub] [sup]. Please note that [p] tags will be striped out.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Text Color", "mk_framework"),
            "param_name"  => "color",
            "value"       => "#393836",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Hightlight Background Color", "mk_framework"),
            "param_name"  => "highlight_color",
            "value"       => "#000",
            "description" => __("The Hightlight Background color. you can change color opacity from below option.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Hightlight Color Opacity", "mk_framework"),
            "param_name"  => "highlight_opacity",
            "value"       => "0.3",
            "min"         => "0",
            "max"         => "1",
            "step"        => "0.01",
            "unit"        => 'px',
            "description" => __("The Opacity of the hightlight background", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Font Size", "mk_framework"),
            "param_name"  => "size",
            "value"       => "18",
            "min"         => "12",
            "max"         => "70",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Line Height (Important)", "mk_framework"),
            "param_name"  => "line_height",
            "value"       => "34",
            "min"         => "12",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("Since every font family with differnt sizes need different line heights to get a nice looking highlighted titles you should set them manually. as a hint generally (font-size * 2) - 2 works in many cases, but you may need to give more space in between, so we opened your hands with this option. :) ", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Font Weight", "mk_framework"),
            "param_name"  => "font_weight",
            "width"       => 150,
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
            "type"        => "range",
            "heading"     => __("Margin Top", "mk_framework"),
            "param_name"  => "margin_top",
            "value"       => "0",
            "min"         => "-40",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("In some ocasions you may on need to define a top margin for this title.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Margin Buttom", "mk_framework"),
            "param_name"  => "margin_bottom",
            "value"       => "20",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
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
            "type"        => "dropdown",
            "heading"     => __("Align", "mk_framework"),
            "param_name"  => "align",
            "width"       => 150,
            "value"       => array(
                __('Left', "mk_framework")    => "left",
                __('Right', "mk_framework")   => "right",
                __('Center', "mk_framework")  => "center",
                __('Justify', "mk_framework") => "justify",
            ),
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
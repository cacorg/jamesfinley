<?php
vc_map(array(
    "name" => __("Blockquote", "mk_framework") ,
    "base" => "mk_blockquote",
    "category" => __('Typography', 'mk_framework') ,
    'icon' => 'icon-mk-blockquote vc_mk_element-icon',
    'description' => __('Blockquote modules', 'mk_framework') ,
    "params" => array(
        
        array(
            "type" => "textarea_html",
            "holder" => "div",
            "heading" => __("Blockquote Message", "mk_framework") ,
            "param_name" => "content",
            "value" => __("", "mk_framework") ,
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Style", "mk_framework") ,
            "param_name" => "style",
            "width" => 150,
            "value" => array(
                __('Classic', "mk_framework") => "classic",
                __('Modern', "mk_framework") => "modern"
            ) ,
            "description" => __("", "mk_framework")
        ) ,
        array(
                "type" => "range",
                "heading" => __("Text Size", "mk_framework") ,
                "param_name" => "text_size",
                "value" => "14",
                "min" => "12",
                "max" => "50",
                "step" => "1",
                "unit" => 'px',
                "description" => __("You can set blockquote text size from the above option.", "mk_framework")
            ) ,
        array(
            "type" => "toggle",
            "heading" => __("Force Responsive Font Size?", "mk_framework") ,
            "param_name" => "force_font_size",
            "value" => "false",
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "range",
            "heading" => __("Font Size for Small Desktops", "mk_framework") ,
            "param_name" => "size_smallscreen",
            "value" => "0",
            "min" => "0",
            "max" => "70",
            "step" => "1",
            "unit" => 'px',
            "description" => __("For screens smaller than 1280px. If value is zero the font size not going to be affected.", "mk_framework"),
            "dependency" => array(
                'element' => "force_font_size",
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            "type" => "range",
            "heading" => __("Font Size for Tablet", "mk_framework") ,
            "param_name" => "size_tablet",
            "value" => "0",
            "min" => "0",
            "max" => "70",
            "step" => "1",
            "unit" => 'px',
            "description" => __("For screens between 768 and 1024px. If value is zero the font size not going to be affected.", "mk_framework"),
            "dependency" => array(
                'element' => "force_font_size",
                'value' => array(
                    'true'
                )
            )
        ),
        array(
            "type" => "range",
            "heading" => __("Font Size for Mobile", "mk_framework") , 
            "param_name" => "size_phone",
            "value" => "0",
            "min" => "0",
            "max" => "70",
            "step" => "1",
            "unit" => 'px',
            "description" => __("For screens smaller than 768px. If value is zero the font size not going to be affected.", "mk_framework"),
            "dependency" => array(
                'element' => "force_font_size",
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Align", "mk_framework") ,
            "param_name" => "align",
            "width" => 150,
            "value" => array(
                __('Left', "mk_framework") => "left",
                __('Right', "mk_framework") => "right",
                __('Center', "mk_framework") => "center"
            ) ,
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Viewport Animation", "mk_framework") ,
            "param_name" => "animation",
            "value" => $css_animations,
            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework")
        ) ,
        $add_device_visibility,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework") ,
            "param_name" => "el_class",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
        )
    )
));
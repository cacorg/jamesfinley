<?php
vc_map(array(
    "name" => __("Fancy Title", "mk_framework") ,
    "base" => "mk_fancy_title",
    'icon' => 'icon-mk-fancy-title vc_mk_element-icon',
    "category" => __('Typography', 'mk_framework') ,
    'description' => __('Advanced headings with cool styles.', 'mk_framework') ,
    "params" => array(
        
        array(
            "type" => "textarea_html",
            "holder" => "div",
            "heading" => __("Content.", "mk_framework") ,
            "param_name" => "content",
            "value" => __("", "mk_framework") ,
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Style", "mk_framework") ,
            "param_name" => "style",
            "value" => array(
                "Simple Title" => "simple",
                "Stroke" => "stroke",
                "Standard" => "standard",
                "Avantgarde" => "avantgarde",
                "Alternative" => "alt",
                "Underline" => "underline"
            ) ,
            "description" => __("Please note that Alternative style will work only in page content and page sections with solid backgrounds.", "mk_framework")
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Corner style", "mk_framework") ,
            "param_name" => "corner_style",
            "value" => array(
                "Pointed" => "pointed",
                "Rounded" => "rounded",
                "Full Rounded" => "full_rounded"
            ) ,
            "description" => __("How will your button corners look like?", "mk_framework") ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'stroke'
                )
            )
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Tag Name", "mk_framework") ,
            "param_name" => "tag_name",
            "value" => array(
                "h3" => "h3",
                "h2" => "h2",
                "h4" => "h4",
                "h5" => "h5",
                "h6" => "h6",
                "h1" => "h1",
                "span" => "span",
                "div"   => "div"
            ) ,
            "description" => __("For SEO reasons you might need to define your titles tag names according to priority. Please note that H1 can only be used once in a page due to the SEO reasons. So try to use lower than H2 to meet SEO best practices.", "mk_framework")
        ) ,
        array(
            "type" => "range",
            "heading" => __("Stroke Style Border Width", "mk_framework") ,
            "param_name" => "border_width",
            "value" => "3",
            "min" => "1",
            "max" => "5",
            "step" => "1",
            "unit" => 'px',
            "description" => __("Changes border thickness. Please note that this option only works for Stroke style.", "mk_framework") ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'stroke',
                    'standard',
                    'avantgarde',
                    'alt',
                    'underline'
                )
            ) ,
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Stroke Style Border Color", "mk_framework") ,
            "param_name" => "border_color",
            "value" => "",
            "description" => __("If left blank given text color will be applied to border color. Please note that this option only works for Stroke style.", "mk_framework") ,
            "dependency" => array(
                'element' => "style",
                'value' => array(
                    'stroke'
                )
            ) ,
        ) ,
        array(
            "type" => "range",
            "heading" => __("Font Size", "mk_framework") ,
            "param_name" => "size",
            "value" => "14",
            "min" => "12",
            "max" => "100",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", "mk_framework")
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
            "type" => "range",
            "heading" => __("Text Line Height", "mk_framework") ,
            "param_name" => "line_height",
            "value" => "24",
            "min" => "12",
            "max" => "100",
            "step" => "1",
            "unit" => 'px',
            "description" => __("Please note that this value should be more than font size. if less than font size line height value will be 100% to prevent reading issues.", "mk_framework")
        ) ,










        array(
            "type" => "dropdown",
            "heading" => __("Text Color Type", "mk_framework") ,
            "param_name" => "color_style",
            "default" => "single_color",
            "value" => array(
                __('Single Color', "mk_framework") => "single_color",
                __('Gradient Color', "mk_framework") => "gradient_color"
            ) ,
            "description" => __("Gradients work properly only in Webkit browsers.", "mk_framework")
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text Color", "mk_framework") ,
            "param_name" => "color",
            "value" => "#393836",
            "description" => __("", "mk_framework"),
            "dependency" => array(
                'element' => "color_style",
                'value' => array(
                    'single_color'
                )
            )
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("From", "mk_framework") ,
            "param_name" => "grandient_color_from",
            "edit_field_class" => "vc_col-sm-3 vc_column",
            "value" => "",
            "description" => __("", "mk_framework") ,
            "dependency" => array(
                'element' => "color_style",
                'value' => array(
                    'gradient_color'
                )
            ) ,
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("To", "mk_framework") ,
            "param_name" => "grandient_color_to",
            "edit_field_class" => "vc_col-sm-3 vc_column",
            "value" => "",
            "description" => __("", "mk_framework") ,
            "dependency" => array(
                'element' => "color_style",
                'value' => array(
                    'gradient_color'
                )
            ) ,
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Style", "mk_framework") ,
            "param_name" => "grandient_color_style",
            "edit_field_class" => "vc_col-sm-3 vc_column",
            "value" => array(
                __('Linear', "mk_framework") => "linear",
                __('Radial', "mk_framework") => "radial"
            ) ,
            "description" => __("", "mk_framework"),
            "dependency" => array(
                'element' => "color_style",
                'value' => array(
                    'gradient_color'
                )
            ) ,
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Angle", "mk_framework") ,
            "param_name" => "grandient_color_angle",
            "edit_field_class" => "vc_col-sm-3 vc_column",
            "value" => array(
                __('Vertical ↓', "mk_framework") => "vertical",
                __('Horizontal →', "mk_framework") => "horizontal",
                __('Diagonal ↘', "mk_framework") => "diagonal_left_bottom",
                __('Diagonal ↗', "mk_framework") => "diagonal_left_top",
            ) ,
            "description" => __("", "mk_framework"),
            "dependency" => array(
                'element' => "grandient_color_style",
                'value' => array(
                    'linear'
                )
            ) ,
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Gradient Fallback Color", "mk_framework") ,
            "param_name" => "grandient_color_fallback",
            //"edit_field_class" => "vc_col-sm-3",
            "value" => "",
            "description" => __("", "mk_framework") ,
            "dependency" => array(
                'element' => "color_style",
                'value' => array(
                    'gradient_color'
                )
            ) ,
        ),








        
        array(
            "type" => "dropdown",
            "heading" => __("Font Weight", "mk_framework") ,
            "param_name" => "font_weight",
            "width" => 150,
            "value" => array(
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
            ) ,
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Text Transform", "mk_framework") ,
            "param_name" => "text_transform",
            "width" => 150,
            "value" => array(
                __('Default', "mk_framework") => "",
                __('None', "mk_framework") => "none",
                __('Uppercase', "mk_framework") => "uppercase",
                __('Lowercase', "mk_framework") => "lowercase",
                __('Capitalize', "mk_framework") => "capitalize"
            ) ,
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "range",
            "heading" => __("Letter Spacing", "mk_framework") ,
            "param_name" => "letter_spacing",
            "value" => "0",
            "min" => "0",
            "max" => "10",
            "step" => "1",
            "unit" => 'px',
            "description" => __("Space between each character.", "mk_framework")
        ) ,
        
        array(
            "type" => "theme_fonts",
            "heading" => __("Font Family", "mk_framework") ,
            "param_name" => "font_family",
            "value" => "",
            "description" => __("You can choose a font for this shortcode, however using non-safe fonts can affect page load and performance.", "mk_framework")
        ) ,
        array(
            "type" => "hidden_input",
            "param_name" => "font_type",
            "value" => "",
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "range",
            "heading" => __("Margin Top", "mk_framework") ,
            "param_name" => "margin_top",
            "value" => "10",
            "min" => "0",
            "max" => "500",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "range",
            "heading" => __("Margin Bottom", "mk_framework") ,
            "param_name" => "margin_bottom",
            "value" => "10",
            "min" => "0",
            "max" => "500",
            "step" => "1",
            "unit" => 'px',
            "description" => __("", "mk_framework")
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
            "heading" => __("Tablet & Mobile Align.", "mk_framework") ,
            "param_name" => "responsive_align",
            "value" => array(
                __('Center', "mk_framework") => "center",
                __('Left', "mk_framework") => "left",
                __('Right', "mk_framework") => "right",
            ) ,
            "description" => __("In some cases your text align for text may not look good in tablet and mobile devices. you can control align for tablet portrait and all mobile devices using this option. It will be center align by default!", "mk_framework")
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

<?php
vc_map(array(
    "name"     => __("Secondary Header", "mk_framework"),
    "base"     => "mk_header",
    "category" => __('General', 'mk_framework'),
    "params"   => array(

        array(
            "type"        => "dropdown",
            "heading"     => __("Menu Location", "mk_framework"),
            "param_name"  => "menu_location",
            "width"       => 150,
            "value"       => array(
                __('Primary Navigation', "mk_framework") => "primary-menu",
                __('Second Navigation', "mk_framework")  => "second-menu",
                __('Third Navigation', "mk_framework")   => "third-menu",
                __('Fourth Navigation', "mk_framework")  => "fourth-menu",
                __('Fifth Navigation', "mk_framework")   => "fifth-menu",
                __('Sixth Navigation', "mk_framework")   => "sixth-menu",
                __('Seventh Navigation', "mk_framework") => "seventh-menu",
            ),

            "description" => __("Please choose which menu location you would like to assign to this header.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Squeeze Header?", "mk_framework"),
            "param_name"  => "squeeze",
            "value"       => "true",
            "description" => __("If you disable this option header height will be in normal height rather than being in sticky state.", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Header Logo?", "mk_framework"),
            "param_name"  => "show_logo",
            "value"       => "true",
            "description" => __("If you dont want to show logo in secondary header, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Header Search Icon?", "mk_framework"),
            "param_name"  => "show_search",
            "value"       => "true",
            "description" => __("If you dont want to show search icon in secondary header, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Header Cart?", "mk_framework"),
            "param_name"  => "show_cart",
            "value"       => "true",
            "description" => __("If you dont want to show cart section in secondary header, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Header Wpml?", "mk_framework"),
            "param_name"  => "show_wpml",
            "value"       => "true",
            "description" => __("If you dont want to show wpml section in secondary header, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Header Border Top?", "mk_framework"),
            "param_name"  => "show_border",
            "value"       => "true",
            "description" => __("If you dont want to show border top in secondary header, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Header Dashboard Trigger Icon?", "mk_framework"),
            "param_name"  => "show_dashboard_trigger",
            "value"       => "true",
            "description" => __("If you dont want to show dashboard trigger icon, disable this option.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Header Align", "mk_framework"),
            "param_name"  => "align",
            "value"       => array(
                __('Left', "mk_framework")   => "left",
                __('Center', "mk_framework") => "center",
                __('Right', "mk_framework")  => "right",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Header Wideness", "mk_framework"),
            "param_name"  => "wideness",
            "value"       => array(
                __('Boxed Layout', "mk_framework")     => "boxed",
                __('Screen Wide Full', "mk_framework") => "full",
            ),

            "description" => __("", "mk_framework"),
        ),
        array(
            "heading"     => __("Header Custom Height", "mk_framework"),
            "param_name"  => "custom_header_height",
            "value"       => "0",
            "min"         => "0",
            "max"         => "300",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("If you want to inherit from default value you have for regular menu set the option value to zero. Its recommended to use this option when you disable logo for this header.", "mk_framework"),
            'type'        => 'range',
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Background Color?", "mk_framework"),
            "param_name"  => "background_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "group"       => "Styling Settings",
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Link Color?", "mk_framework"),
            "param_name"  => "link_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "group"       => "Styling Settings",
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Link Hover Color?", "mk_framework"),
            "param_name"  => "link_hover_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "group"       => "Styling Settings",
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Top Color?", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "group"       => "Styling Settings",
        ),
        array(
            "heading"     => __("Main Navigation Top Level Font Size", "mk_framework"),
            "param_name"  => "top_level_item_size",
            "value"       => "0",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("If you want to inherit from default value you set it for main header set the value to zero.", "mk_framework"),
            'type'        => 'range',
            "group"       => "Styling Settings",
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),

    ),
));

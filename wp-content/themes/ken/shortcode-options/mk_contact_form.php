<?php
vc_map(array(
    "base"        => "mk_contact_form",
    "name"        => __("Contact Form", "mk_framework"),
    'icon'        => 'icon-mk-contact-form vc_mk_element-icon',
    'description' => __('Adds Contact form element.', 'mk_framework'),
    "category"    => __('Social', 'mk_framework'),
    "params"      => array(

        array(
            "type"        => "textfield",
            "heading"     => __("Email", "mk_framework"),
            "param_name"  => "email",
            "value"       => get_bloginfo('admin_email'),
            "description" => sprintf(__('Which email would you like the contacts to be sent, if left empty emails will be sent to admin email : "%s"', "mk_framework"), get_bloginfo('admin_email')),

        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                __("Classic", "mk_framework") => "classic",
                __("Modern", "mk_framework")  => "modern",
            ),
            "description" => __("Choose your contact form style", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Skin", "mk_framework"),
            "param_name"  => "skin",
            "value"       => array(
                __("Dark", "mk_framework")  => "dark",
                __("Light", "mk_framework") => "light",
            ),
            "description" => __("Choose your contact form style", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'classic',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Skin Color", "mk_framework"),
            "param_name"  => "skin_color",
            "value"       => "#000",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'modern',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Text Color", "mk_framework"),
            "param_name"  => "btn_text_color",
            "value"       => "#000",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'modern',
                ),
            ),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Hover Text Color", "mk_framework"),
            "param_name"  => "btn_hover_text_color",
            "value"       => "#fff",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'modern',
                ),
            ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Show Phone Number Field?", "mk_framework"),
            "param_name"  => "phone",
            "value"       => "false",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Show Captcha?", "mk_framework"),
            "param_name"  => "captcha",
            "value"       => "true",
            "description" => __("", "mk_framework"),
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
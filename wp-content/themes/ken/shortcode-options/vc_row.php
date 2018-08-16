<?php

vc_map(array(
    "name" => __("Row", "mk_framework"),
    'base' => 'vc_row',
    'is_container' => true,
    'icon' => 'icon-mk-row vc_mk_element-icon',
    'show_settings_on_create' => false,
    "category" => __('General', 'mk_framework'),
    'description' => __( 'Place content elements inside the row', 'mk_framework' ),
    "params" => array(
        array(
            "type" => "toggle",
            "heading" => __("Fullwidth Row?.", "mk_framework"),
            "param_name" => "fullwidth",
            "value" => "false",
            "description" => __("If you enable this option, this row will no longer follow the main grid width and will stretch 100% to screen width.", "mk_framework")
        ),
        array(
            "type" => "toggle",
            "heading" => __("Full Width Content?", "mk_framework") ,
            "param_name" => "fullwidth_content",
            "value" => "true",
            "description" => __("This option works if \"Full Width Row\" is enabled and it gives you the power to choose whether inside the row follows global grid width or be totally full width.", "mk_framework"),
            "dependency" => array(
                'element' => "fullwidth",
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Attached Colums", "mk_framework"),
            "param_name" => "attached",
            "value" => "false",
            "description" => __("This option will attach child column to each other. In other words columns inside this row will be stick to each other.", "mk_framework")
        ),
        array(
            "type" => "range",
            "heading" => __("Column Paddings", "mk_framework"),
            "param_name" => "padding",
            "value" => "0",
            "min" => "0",
            "max" => "5",
            "step" => "1",
            "unit" => '%',
            "description" => __("This option will create padding space inside columns to allow. mostly useful when 'Attached Colums' option is enabled. Please note that padding unit is by percent and will be applied to all directions.", "mk_framework")
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Equal height', 'js_composer' ),
            'param_name' => 'equal_height',
            'description' => __( 'If checked columns will be set to equal height.', 'js_composer' ),
            'value' => array( __( 'Yes', 'js_composer' ) => 'yes' )
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Content position', 'js_composer' ),
            'param_name' => 'content_placement',
            'value' => array(
                __( 'Default', 'js_composer' ) => '',
                __( 'Top', 'js_composer' ) => 'top',
                __( 'Middle', 'js_composer' ) => 'middle',
                __( 'Bottom', 'js_composer' ) => 'bottom',
            ),
            'description' => __( 'Select content position within columns.', 'js_composer' ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Row ID", "mk_framework"),
            "param_name" => "id",
            "description" => __("This ID is useful when you are going to make a single page website.", "mk_framework")
        ),
        array(
            'type' => 'toggle',
            'heading' => __( 'Use video background?', 'mk_framework' ),
            'param_name' => 'video_bg',
            'description' => __( 'If checked, video will be used as row background.', 'mk_framework' ),
            'value' => 'false',
        ) ,
        array(
            'type' => 'textfield',
            'heading' => __( 'YouTube link', 'mk_framework' ),
            'param_name' => 'video_bg_url',
            'value' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
            'description' => __( 'Add YouTube link.', 'mk_framework' ),
            'dependency' => array(
                'element' => 'video_bg',
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            'type' => 'dropdown',
            'heading' => __( 'Parallax', 'mk_framework' ),
            'param_name' => 'video_bg_parallax',
            'value' => array(
                __( 'None', 'mk_framework' ) => '',
                __( 'Simple', 'mk_framework' ) => 'content-moving',
                __( 'With fade', 'mk_framework' ) => 'content-moving-fade',
            ),
            'description' => __( 'Add parallax type background for row.', 'mk_framework' ),
            'dependency' => array(
                'element' => 'video_bg',
                'value' => array(
                    'true'
                )
            )
        ) ,
        array(
            'type' => 'textfield',
            'heading' => __( 'Parallax speed', 'mk_framework' ),
            'param_name' => 'parallax_speed_video',
            'value' => '1.5',
            'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'mk_framework' ),
            'dependency' => array(
                'element' => 'video_bg_parallax',
                'not_empty' => true,
            )
        ) ,
        array(
            'type' => 'dropdown',
            'heading' => __( 'Parallax', 'mk_framework' ),
            'param_name' => 'parallax',
            'value' => array(
                __( 'None', 'mk_framework' ) => '',
                __( 'Simple', 'mk_framework' ) => 'content-moving',
                __( 'With fade', 'mk_framework' ) => 'content-moving-fade',
            ),
            'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options).', 'mk_framework' ),
            'dependency' => array(
                'element' => 'video_bg',
                'value' => array(
                    'false'
                )
            )
        ) ,
        array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'mk_framework' ),
            'param_name' => 'parallax_image',
            'value' => '',
            'description' => __( 'Select image from media library.', 'mk_framework' ),
            'dependency' => array(
                'element' => 'parallax',
                'not_empty' => true,
            )
        ) ,
        array(
            'type' => 'textfield',
            'heading' => __( 'Parallax speed', 'mk_framework' ),
            'param_name' => 'parallax_speed_bg',
            'value' => '1.5',
            'description' => __( 'Enter parallax speed ratio (Note: Default value is 1.5, min value is 1)', 'mk_framework' ),
            'dependency' => array(
                'element' => 'parallax',
                'not_empty' => true,
            )
        ) ,
        $add_device_visibility,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework")
        ),
        array(
            'type' => 'css_editor',
            'heading' => __( 'CSS box', 'js_composer' ),
            'param_name' => 'css',
            'group' => __( 'Design Options', 'js_composer' ),
        ),
    ),
    "js_view" => 'VcRowView'
));
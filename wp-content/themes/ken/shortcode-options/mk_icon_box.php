<?php
vc_map(array(
    "name"        => __("Icon Box", "mk_framework"),
    "base"        => "mk_icon_box",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-icon-box vc_mk_element-icon',
    'description' => __('Powerful & versatile Icon Boxes.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Box Style", "mk_framework"),
            "param_name"  => "style",
            "width"       => 300,
            "value"       => array(
                __('Style 1', "mk_framework")       => "style1",
                __('Style 2', "mk_framework")       => "style2",
                __('Style 3', "mk_framework")       => "style3",
                __('Style 4', "mk_framework")       => "style4",
                __('Style 5', "mk_framework")       => "style5",
                __('Style 6', "mk_framework")       => "style6",
                __('Style 7 (new)', "mk_framework") => "style7",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Type", "mk_framework"),
            "param_name"  => "icon_type",
            "value"       => array(
                __('Icon', "mk_framework")  => "icon",
                __('Image', "mk_framework") => "image",
            ),
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Class Name", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
            "dependency"  => array(
                'element' => "icon_type",
                'value'   => array(
                    'icon',
                ),
            ),
        ),

        array(
            "type"        => "upload",
            "heading"     => __("Icon Image", "mk_framework"),
            "param_name"  => "icon_image",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "icon_type",
                'value'   => array(
                    'image',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Icon Container Circle?", "mk_framework"),
            "param_name"  => "rounded",
            "value"       => "true",
            "description" => __("If you disable this option the icon container will not be rounded.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Icon Container Frame?", "mk_framework"),
            "param_name"  => "icon_frame",
            "value"       => "true",
            "description" => __("If disabed, icon frame will be removed and box background color will be given to icon color. This option only works for Style 7.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'style7',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Align", "mk_framework"),
            "param_name"  => "icon_align",
            "width"       => 300,
            "value"       => array(
                __('Left', "mk_framework")         => "left",
                __('Right', "mk_framework")        => "right",
                __('Top (Style7)', "mk_framework") => "top",
            ),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'style2',
                    'style7',
                ),
            ),
            "description" => __("Please note that this option only works with Style 2 and 7. Top option only works for style 7.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Icon Size (Style 7 only)", "mk_framework"),
            "param_name"  => "icon_size",
            "value"       => array(
                __('Large (64px)', "mk_framework")  => "large",
                __('Medium (48px)', "mk_framework") => "medium",
                __('Small (32px)', "mk_framework")  => "small",
            ),
            "description" => __("Please note that this option will not work for image type icon.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'style7',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Title", "mk_framework"),
            "param_name"  => "title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textarea_html",
            "holder"      => "div",
            "heading"     => __("Description", "mk_framework"),
            "param_name"  => "content",
            "value"       => __("", "mk_framework"),
            "description" => __("Enter your content.", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Read More Text", "mk_framework"),
            "param_name"  => "read_more_txt",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Read More URL", "mk_framework"),
            "param_name"  => "read_more_url",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Link Target", "mk_framework"),
            "param_name"  => "url_target",
            "width"       => 200,
            "value"       => $target_arr,
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Icon Skin", "mk_framework"),
            "param_name"  => "icon_color",
            "value"       => "",
            "description" => __("Icon color for style 1, style 2, style 3, style 5 means the icon color. For style 4, style 6 and style 7 icon frame fill color.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Title Color", "mk_framework"),
            "param_name"  => "title_color",
            "value"       => "",
            "description" => __("Optionally you can modify Title color inside this shortcode.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Paragraph Color", "mk_framework"),
            "param_name"  => "txt_color",
            "value"       => "",
            "description" => __("Optionally you can modify text color inside this shortcode.", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Skin Color", "mk_framework"),
            "param_name"  => "btn_skin",
            "value"       => "",
            "description" => __("This option is for outline style.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Button Hover Text Color", "mk_framework"),
            "param_name"  => "btn_hover_skin",
            "value"       => "",
            "description" => __("This option is for outline style.", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Title Text Size", "mk_framework"),
            "param_name"  => "title_text_size",
            "value"       => "16",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Paragraph Text size", "mk_framework"),
            "param_name"  => "p_text_size",
            "value"       => "14",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Viewport Animation", "mk_framework"),
            "param_name"  => "animation",
            "value"       => $css_animations,
            "description" => __("Viewport animation will be triggered when this element is being viewed when you scroll page down. you only need to choose the animation style from this option. please note that this only works in moderns. We have disabled this feature in touch devices to increase browsing speed.", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
    ),
));
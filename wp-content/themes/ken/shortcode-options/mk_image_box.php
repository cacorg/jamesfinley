<?php
vc_map(array(
    "name"        => __("Image Box", "mk_framework"),
    "base"        => "mk_image_box",
    "category"    => __('General', 'mk_framework'),
    'description' => __('A custom box with image and content.', 'mk_framework'),
    'icon'        => 'icon-mk-content-box vc_mk_element-icon',
    "params"      => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Box Title", "mk_framework"),
            "param_name"  => "title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textarea",
            "heading"     => __("Box Description", "mk_framework"),
            "param_name"  => "content",
            "holder"      => "div",
            "value"       => "",
            "description" => __("This field accepts HTML tags.", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Media Type", "mk_framework"),
            "param_name"  => "media_type",
            "width"       => 150,
            "value"       => array(
                __('Image', "mk_framework") => "image",
                __('Video', "mk_framework") => "video",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Autoplay?", "mk_framework"),
            "param_name"  => "autoplay",
            "value"       => "false",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "media_type",
                'value'   => array(
                    'video',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Video Host?", "mk_framework"),
            "param_name"  => "video_host",
            "width"       => 150,
            "value"       => array(
                __('Self Hosted', "mk_framework")   => "self_hosted",
                __('Social Hosted', "mk_framework") => "social_hosted",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "media_type",
                'value'   => array(
                    'video',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Video Host?", "mk_framework"),
            "param_name"  => "video_host_social",
            "width"       => 150,
            "value"       => array(
                __('Youtube', "mk_framework") => "social_hosted_youtube",
                __('Vimeo', "mk_framework")   => "social_hosted_vimeo",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host",
                'value'   => array(
                    'social_hosted',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Video ID?", "mk_framework"),
            "param_name"  => "social_youtube_id",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host_social",
                'value'   => array(
                    'social_hosted_youtube',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Video ID?", "mk_framework"),
            "param_name"  => "social_vimeo_id",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host_social",
                'value'   => array(
                    'social_hosted_vimeo',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Background Video (.MP4)", "mk_framework"),
            "param_name"  => "mp4",
            "value"       => "",
            "description" => __("Upload your video with .MP4 extension. (Compatibility for Safari and IE9)", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host",
                'value'   => array(
                    'self_hosted',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Background Video (.WebM)", "mk_framework"),
            "param_name"  => "webm",
            "value"       => "",
            "description" => __("Upload your video with .WebM extension. (Compatibility for Firefox4, Opera, and Chrome)", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host",
                'value'   => array(
                    'self_hosted',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Background Video (.OGV)", "mk_framework"),
            "param_name"  => "ogv",
            "value"       => "",
            "description" => __("Upload preview image for mobile devices", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host",
                'value'   => array(
                    'self_hosted',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Preview Image", "mk_framework"),
            "param_name"  => "preview_image",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "video_host",
                'value'   => array(
                    'self_hosted',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Upload Your image", "mk_framework"),
            "param_name"  => "src",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "media_type",
                'value'   => array(
                    'image',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Box Width", "mk_framework"),
            "param_name"  => "media_width",
            "value"       => "500",
            "min"         => "10",
            "max"         => "2600",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            // "dependency" => array(
            //     "element" => "media_type",
            //     "value" => array(
            //         "image"
            //     )
            // )
        ),
        array(
            "type"        => "range",
            "heading"     => __("Image Height", "mk_framework"),
            "param_name"  => "media_height",
            "value"       => "350",
            "min"         => "10",
            "max"         => "5000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                "element" => "media_type",
                "value"   => array(
                    "image",
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Image Cropping?", "mk_framework"),
            "param_name"  => "crop",
            "value"       => "true",
            "description" => __("If you dont want to crop your image based on the dimensions you defined above disable this option. Only wdith will be used to give the image container max-width property.", "mk_framework"),
            "dependency"  => array(
                "element" => "media_type",
                "value"   => array(
                    "image",
                ),
            ),

        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Image Link?", "mk_framework"),
            "param_name"  => "image_link",
            "width"       => 200,
            "value"       => array(
                __('Lightbox', "mk_framework") => "lightbox",
                __('Url', "mk_framework")      => "url",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                "element" => "media_type",
                "value"   => array(
                    "image",
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Link (optional)", "mk_framework"),
            "param_name"  => "url",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "image_link",
                'value'   => array(
                    'url',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("URL Target", "mk_framework"),
            "param_name"  => "target",
            "width"       => 200,
            "value"       => $target_arr,
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "image_link",
                'value'   => array(
                    'url',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Align", "mk_framework"),
            "param_name"  => "align",
            "width"       => 150,
            "value"       => array(
                __('Left', "mk_framework")   => "left",
                __('Right', "mk_framework")  => "right",
                __('Center', "mk_framework") => "center",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("If left blank no border will be added.", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Text Color", "mk_framework"),
            "param_name"  => "text_color",
            "value"       => "",
            "description" => __("This option will apply to title and description", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Title Color", "mk_framework"),
            "param_name"  => "title_color",
            "value"       => "",
            "description" => __("This option will apply to title and description", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Title Text Transform", "mk_framework"),
            "param_name"  => "title_text_transform",
            "width"       => 150,
            "value"       => array(
                __('Default', "mk_framework")    => "",
                __('None', "mk_framework")       => "none",
                __('Uppercase', "mk_framework")  => "uppercase",
                __('Lowercase', "mk_framework")  => "lowercase",
                __('Capitalize', "mk_framework") => "capitalize",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Title Font Weight", "mk_framework"),
            "param_name"  => "title_font_weight",
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
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'custom',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Rounded Corners?", "mk_framework"),
            "param_name"  => "rounded_corner",
            "value"       => "false",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "media_type",
                'value'   => array(
                    'image',
                ),
            ),
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
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),

    ),
));
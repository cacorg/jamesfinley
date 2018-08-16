<?php
vc_map(array(
    "name"                    => __("Page Section", "mk_framework"),
    "base"                    => "mk_page_section",
    "category"                => __('General', 'mk_framework'),
    "as_parent"               => array('only' => 'vc_row'),
    'icon'                    => 'icon-mk-page-section vc_mk_element-icon',
    "content_element"         => true,
    "show_settings_on_create" => true,
    "is_container"            => true,
    'description'             => __('Customisable full width page section.', 'mk_framework'),
    "params"                  => array(

         array(
            "type"        => "dropdown",
            "heading"     => __("Section Structure", "mk_framework"),
            "param_name"  => "layout_structure",
            "width"       => 300,
            "value"       => array(
                __('Full Layout', "mk_framework")                                            => "full",
                __('One Half (Background Image on Left & Content in Right)', "mk_framework") => "half_left",
                __('One Half (Background Image on Right & Content in Left)', "mk_framework") => "half_right",
            ),
            "description" => __("If chosen One Half layouts, uploaded background image will be displyed in one half of the screen width. the shortcodes placed in this section will occupy the rest of the half(not screen wide, rather it will follow half of the main grid width).", "mk_framework"),
        ),
        array(
            "type" => "toggle",
            "heading" => __("Has Top Shape Divider", "mk_framework"),
            "param_name" => "has_top_shape_divider",
            "value" => "false",
            "description" => __("", "mk_framework"),
            "group" => __('Shape Divider ', 'mk_framework') ,
        ),

        // array(
        //     "heading" => __("Choose a Shape Pattern", 'mk_framework') ,
        //     "description" => __("", 'mk_framework') ,
        //     "param_name" => "top_shape_style",
        //     "class" => 'shape-selector',
        //     "group" => __('Shape Divider ', 'mk_framework') ,
        //     "value" => array(
        //         'shape/diagonal-top.png' => "diagonal-top",
        //         'shape/jagged-top.png' => "jagged-top",
        //         'shape/jagged-rounded-top.png' => "jagged-rounded-top",
        //         'shape/folded-top.png' => "folded-top",
        //         'shape/curve-top.png' => "curve-top",
        //         'shape/speech-top.png' => "speech-top",
        //     ) ,
        //     "type" => "visual_selector"
        // ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Shape Size", "mk_framework") ,
            "param_name" => "top_shape_size",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => array(
                "Big" => "big",
                "Small" => "small"
            )
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Shape Color", "mk_framework") ,
            "param_name" => "top_shape_color",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => '#fff',
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", "mk_framework") ,
            "param_name" => "top_shape_bg_color",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => '',
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework") ,
            "param_name" => "top_shape_el_class",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
        ) ,


        array(
            "type" => "toggle",
            "heading" => __("Has Bottom Shape Divider", "mk_framework"),
            "param_name" => "has_bottom_shape_divider",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => "false",
            "description" => __("", "mk_framework"),
        ),

        array(
            "heading" => __("Choose a Shape Pattern", 'mk_framework') ,
            "description" => __("", 'mk_framework') ,
            "type" => "visual_selector",
            "param_name" => "bottom_shape_style",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "class" => 'shape-selector',
            "value" => array(
                'shape/diagonal-bottom.png' => "diagonal-bottom",
                'shape/jagged-bottom.png' => "jagged-bottom",
                'shape/jagged-rounded-bottom.png' => "jagged-rounded-bottom",
                'shape/folded-bottom.png' => "folded-bottom",
                'shape/curve-bottom.png' => "curve-bottom",
                'shape/speech-bottom.png' => "speech-bottom",
            ) 
            
        ) ,
        array(
            "type" => "dropdown",
            "heading" => __("Shape Size", "mk_framework") ,
            "param_name" => "bottom_shape_size",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => array(
                "Big" => "big",
                "Small" => "small"
            )
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Shape Color", "mk_framework") ,
            "param_name" => "bottom_shape_color",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => '#fff',
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", "mk_framework") ,
            "param_name" => "bottom_shape_bg_color",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => '',
            "description" => __("", "mk_framework")
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "mk_framework") ,
            "param_name" => "bottom_shape_el_class",
            "group" => __('Shape Divider ', 'mk_framework') ,
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework")
        ) ,
        
        array(
            "type"        => "colorpicker",
            "heading"     => __("Box Background Color", "mk_framework"),
            "param_name"  => "bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Background Image", "mk_framework"),
            "param_name"  => "bg_image",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Border Top and Bottom Color", "mk_framework"),
            "param_name"  => "border_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Background Attachment", "mk_framework"),
            "param_name"  => "attachment",
            "width"       => 150,
            "value"       => array(
                __('Scroll', "mk_framework") => "scroll",
                __('Fixed', "mk_framework")  => "fixed",
            ),
            "description" => __("The background-attachment property sets whether a background image is fixed or scrolls with the rest of the page. <a href='http://www.w3schools.com/CSSref/pr_background-attachment.asp'>Read More</a>", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Background Position", "mk_framework"),
            "param_name"  => "bg_position",
            "width"       => 300,
            "value"       => array(
                __('Left Top', "mk_framework")      => "left top",
                __('Center Top', "mk_framework")    => "center top",
                __('Right Top', "mk_framework")     => "right top",
                __('Left Center', "mk_framework")   => "left center",
                __('Center Center', "mk_framework") => "center center",
                __('Right Center', "mk_framework")  => "right center",
                __('Left Bottom', "mk_framework")   => "left bottom",
                __('Center Bottom', "mk_framework") => "center bottom",
                __('Right Bottom', "mk_framework")  => "right bottom",
            ),
            "description" => __("First value defines horizontal position and second vertical positioning.", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Background Repeat", "mk_framework"),
            "param_name"  => "bg_repeat",
            "width"       => 300,
            "value"       => array(
                __('Repeat', "mk_framework")              => "repeat",
                __('No Repeat', "mk_framework")           => "no-repeat",
                __('Horizontally repeat', "mk_framework") => "repeat-x",
                __('Vertically Repeat', "mk_framework")   => "repeat-y",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __('Cover whole background', 'mk_framework'),
            "description" => __("Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.", "mk_framework"),
            "param_name"  => "bg_stretch",
            "value"       => "false",
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Enable Parallax background", "mk_framework"),
            "param_name"  => "parallax",
            "description" => __("Please not that parallax works better with Background Attachement set to scroll. Background Attachement fixed is also possible but make sure to choose repeating background as well.", "mk_framework"),
            "value"       => "false",
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Parallax Direction", "mk_framework"),
            "param_name"  => "parallax_direction",
            "width"       => 300,
            "value"       => array(
                __('Vertical trigger on page scroll', "mk_framework")             => "vertical",
                __('Vertical trigger on mouse move', "mk_framework")              => "vertical_mouse",
                __('Horizontal trigger on page scroll', "mk_framework")           => "horizontal",
                __('Horizontal trigger on mouse move', "mk_framework")            => "horizontal_mouse",
                __('Horizontal & Vertical trigger on mouse move', "mk_framework") => "both_axis_mouse",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Background Video?", "mk_framework"),
            "param_name"  => "bg_video",
            "width"       => 300,
            "value"       => array(
                __('No', "mk_framework")  => "no",
                __('Yes', "mk_framework") => "yes",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Video Source", "mk_framework") ,
            "param_name" => "video_source",
            "width" => 300,
            "value" => array(
                __('Self Hosted', "mk_framework") => "self",
                __('Social Hosted', "mk_framework") => "social"
            ) ,
            "description" => __("", "mk_framework") ,
            "dependency" => array(
                'element' => "bg_video",
                'value' => array(
                    'yes'
                )
            )
        ) ,
        array(
            "heading" => __("Stream Host Website", 'mk_framework') ,
            "description" => __("", 'mk_framework') ,
            "param_name" => "stream_host_website",
            "value" => array(
                __("Youtube", 'mk_framework') => "youtube",
                __("Vimeo", 'mk_framework') => "vimeo"
            ) ,
            "type" => "dropdown",
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            ) ,
        ) ,
        array(
            "type" => "textfield",
            "heading" => __("Video ID", "mk_framework") ,
            "param_name" => "stream_video_id",
            "value" => "",
            "description" => __("Since the streaming video will always be shown in 16/9 ratio, Please make sure your video has a 16/9 ratio,, otherwise it would not get fully covered in the background.", "mk_framework") ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            )
        ) ,
        array(
            "type" => "toggle",
            "heading" => __("Video Sound", "mk_framework") ,
            "param_name" => "stream_sound",
            "value" => "false",
            "description" => __("You can turn on/off the sound of the video for streaming videos", "mk_framework") ,
            "dependency" => array(
                'element' => "video_source",
                'value' => array(
                    'social'
                )
            )
        ) ,
        array(
            "type"        => "upload",
            "heading"     => __("MP4 Format", "mk_framework"),
            "param_name"  => "mp4",
            "value"       => "",
            "description" => __("Compatibility for Safari, IE9", "mk_framework"),
            "dependency"  => array(
                'element' => "video_source",
                'value'   => array(
                    'self',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("WebM Format", "mk_framework"),
            "param_name"  => "webm",
            "value"       => "",
            "description" => __("Compatibility for Firefox4, Opera, and Chrome", "mk_framework"),
            "dependency"  => array(
                'element' => "video_source",
                'value'   => array(
                    'self',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("OGV Format", "mk_framework"),
            "param_name"  => "ogv",
            "value"       => "",
            "description" => __("Compatibility for older Firefox and Opera versions", "mk_framework"),
            "dependency"  => array(
                'element' => "video_source",
                'value'   => array(
                    'self',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Background Video Preview image (and fallback image)", "mk_framework"),
            "param_name"  => "poster_image",
            "value"       => "",
            "description" => __("This Image will shown until video load. in case of video is not supported or did not load the image will remain as fallback.", "mk_framework"),
            "dependency"  => array(
                'element' => "bg_video",
                'value'   => array(
                    'yes',
                ),
            ),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("Mask Pattern? (optional)", "mk_framework"),
            "param_name"  => "mask",
            "description" => __("If you enable this option a pattern will overlay the section.", "mk_framework"),
            "value"       => "false",
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color Mask (optional)", "mk_framework"),
            "param_name"  => "color_mask",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Color Mask Opacity", "mk_framework"),
            "param_name"  => "mask_opacity",
            "value"       => "0.6",
            "min"         => "0",
            "max"         => "1",
            "step"        => "0.1",
            "unit"        => 'alpha',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type" => "dropdown",
            "heading" => __("Gradient Overlay Orientation", "mk_framework") ,
            "param_name" => "bg_gradient",
            "width" => 150,
            "value" => array(
                __('-- No Gradient ', "mk_framework") => "false",
                __('Vertical ↓', "mk_framework") => "vertical",
                __('Horizontal →', "mk_framework") => "horizontal",
                __('Diagonal ↘', "mk_framework") => "left_top",
                __('Diagonal ↗', "mk_framework") => "left_bottom",
                __('Radial ○', "mk_framework") => "radial",
            ) ,
            "description" => __("Choose the orientation of gradient overlay", "mk_framework")
        ) ,

        array(
            "type" => "colorpicker",
            "heading" => __("Overlay Color", "mk_framework") ,
            "param_name" => "video_color_mask",
            "value" => "",
            "description" => __("Primary overlay color. Start color if used with gradient option selected.", "mk_framework")
        ) ,

        array(
            "type" => "colorpicker",
            "heading" => __("Overlay Color End", "mk_framework") ,
            "param_name" => "gr_end",
            "value" => "",
            "description" => __("The ending color for gradient fill overlay. Use only with gradient option selected.", "mk_framework") ,
            "dependency" => array(
                'element' => "bg_gradient",
                'value' => array(
                    "vertical",
                    "horizontal",
                    "left_top",
                    "left_bottom",
                    "radial"
                )
            )
        ) ,

        array(
            "type" => "range",
            "heading" => __("Overlay Color Mask Opacity", "mk_framework") ,
            "param_name" => "video_opacity",
            "value" => "0.6",
            "min" => "0",
            "max" => "1",
            "step" => "0.1",
            "unit" => 'alpha',
            "description" => __("The opacity of overlay layer which you set above. ", "mk_framework")
        ) ,
        array(
            "type"        => "dropdown",
            "heading"     => __("Expandable Page Section", "mk_framework"),
            "param_name"  => "expandable",
            "width"       => 300,
            "value"       => array(
                __('No', "mk_framework")  => "false",
                __('Yes', "mk_framework") => "true",
            ),
            "description" => __("If you want to have your page section content in a toggle that can be clicked to expand/collapse, Choose Yes and customize below options. This option will not work if \"Full Height\" option is enabled.", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Expandable Page Section Text", "mk_framework"),
            "param_name"  => "expandable_txt",
            "value"       => "",
            "description" => __("e.g. Click here to see more.", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'true',
                ),
            ),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Expandable Page Section Hover Image", "mk_framework"),
            "param_name"  => "expandable_image",
            "value"       => "",
            "description" => __("If this option left blank font icon option (below) will be used instead. So if you would like to use font icon library simply leave this option empty.", "mk_framework"),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Expandable Page Section Hover Icon", "mk_framework"),
            "param_name"  => "expandable_icon",
            "value"       => "mk-theme-icon-plus",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Expandable Page Section Icon Size", "mk_framework"),
            "param_name"  => "expandable_icon_size",
            "value"       => "16",
            "min"         => "16",
            "max"         => "300",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'true',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Expandable Page Section Text Align", "mk_framework"),
            "param_name"  => "expandable_txt_align",
            "width"       => 300,
            "value"       => array(
                __('Center', "mk_framework") => "center",
                __('Left', "mk_framework")   => "left",
                __('Right', "mk_framework")  => "right",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'true',
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Expandable Page Section Text & Arrow Color", "mk_framework"),
            "param_name"  => "expandable_txt_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'true',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Expandable Page Section Text Size", "mk_framework"),
            "param_name"  => "expandable_txt_size",
            "value"       => "16",
            "min"         => "12",
            "max"         => "100",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'true',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Padding Top & Bottom", "mk_framework"),
            "param_name"  => "padding",
            "value"       => "20",
            "min"         => "0",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("This option defines how much top & bottom distance you need to have inside this section", "mk_framework"),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Page Section Minimum Height", "mk_framework"),
            "param_name"  => "min_height",
            "value"       => "100",
            "min"         => "0",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Full Height?", "mk_framework"),
            "param_name"  => "full_height",
            "description" => __("Using this option you can make this page section full height and it's height will follow screen height that is visible in browser. Please note that if the content is larger than the window height, the full height feature will be disabled. Full height is browser resize sensetive and completely resposnive. This option will not work if you have enabled \"Expandable Page Section\" option above.", "mk_framework"),
            "value"       => "false",
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'false',
                ),
            ),
        ),
        array(
            "type" => "toggle",
            "heading" => __("Center Vertically", "mk_framework") ,
            "param_name" => "vertical_centered",
            "value" => "false",
            "dependency" => array(
                'element' => "full_height",
                'value' => array(
                    'false'
                )
            )
        ) ,
        array(
            "type"        => "toggle",
            "heading"     => __("Color Transition?", "mk_framework"),
            "param_name"  => "color_transition",
            "value"       => "false",
            "description" => __("Your page section background color will change with the colors and time intervals you set.", "mk_framework")
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color 1", "mk_framework"),
            "param_name"  => "color_transition_1",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color 2", "mk_framework"),
            "param_name"  => "color_transition_2",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color 3", "mk_framework"),
            "param_name"  => "color_transition_3",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color 4", "mk_framework"),
            "param_name"  => "color_transition_4",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Color 5", "mk_framework"),
            "param_name"  => "color_transition_5",
            "value"       => "",
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
        ),


        array(
            "type"        => "range",
            "heading"     => __("Color change intervals", "mk_framework"),
            "param_name"  => "color_transition_interval",
            "value"       => "7",
            "min"         => "1",
            "max"         => "100",
            "step"        => "1",
            "unit"        => 'second',
            "dependency"  => array(
                'element' => "color_transition",
                'value'   => array(
                    'true'
                ),
            ),
            "description" => __("How long should it take to change one color to the other.", "mk_framework"),
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Full Width?", "mk_framework"),
            "param_name"  => "full_width",
            "value"       => "false",
            "description" => __("If you want to make this section's content 100% full width enable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "layout_structure",
                'value'   => array(
                    'full',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Page Section Intro Effect", "mk_framework"),
            "param_name"  => "intro_effect",
            "value"       => array(
                __('None', "mk_framework")     => "false",
                __('Shuffle', "mk_framework")  => "shuffle",
                __('Zoom Out', "mk_framework") => "zoom_out",
                __('Fade In', "mk_framework")  => "fade",
            ),
            "description" => __("Note that this page section must be the first element in the page with full height enabled above.", "mk_framework"),
            "dependency"  => array(
                'element' => "expandable",
                'value'   => array(
                    'false',
                ),
            ),
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Section ID", "mk_framework"),
            "param_name"  => "section_id",
            "value"       => "",
            "description" => __("You can user this field to give your page section a unique ID. please note that this should be used only once in a page.", "mk_framework"),
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
    "js_view"                 => 'VcRowView',
));
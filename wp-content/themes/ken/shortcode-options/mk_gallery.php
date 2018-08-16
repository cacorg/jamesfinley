<?php
vc_map(array(
    "name"        => __("Image Gallery", "mk_framework"),
    "base"        => "mk_gallery",
    'icon'        => 'icon-mk-image-gallery vc_mk_element-icon',
    'description' => __('Adds images in grids in many styles.', 'mk_framework'),
    "category"    => __('General', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "attach_images",
            "heading"     => __("Add Images", "mk_framework"),
            "param_name"  => "images",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "value"       => array(
                "Grid"                   => "grid",
                "Slider with Thumbnails" => "thumb",
                "Masonry"                => "masonry",

            ),
            "description" => __("Please choose how would you like to show you gallery images?", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Structure", "mk_framework"),
            "param_name"  => "structure",
            "value"       => array(
                "Column Base" => "column",
                "scroller"    => "scroller",
            ),
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Masonry Style", "mk_framework"),
            "param_name"  => "masonry_style",
            "value"       => array(
                "Style 1" => "style1",
                "Style 2" => "style2",
                "Style 3" => "style3",
                "Style 4" => "style4",
            ),
            "description" => __("Mansory Styles Structure see below image :</br><img src='" . THEME_ADMIN_ASSETS_URI . "/img/gallery-mansory-styles.png' /><br>", 'mk_framework'),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'masonry',
                ),
            ),
        ),
        array(
            "heading"     => __("Image Size", 'mk_framework'),
            "description" => __("", 'mk_framework'),
            "param_name"  => "image_size",
            "value"       => array(
                __("Resize & Crop", 'mk_framework') => "crop",
                __("Original Size", 'mk_framework') => "full",
                __("Large Size", 'mk_framework')    => "large",
                __("Medium Size", 'mk_framework')   => "medium",
            ),
            "type"        => "dropdown",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),
        array(
            "heading"     => __("Item Spacing", 'mk_framework'),
            "description" => __("Space between items.", 'mk_framework'),
            "param_name"  => "item_spacing",
            "value"       => "8",
            "min"         => "0",
            "max"         => "50",
            "step"        => "1",
            "unit"        => 'px',
            "type"        => "range",
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'masonry',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("How many Columns?", "mk_framework"),
            "param_name"  => "column",
            "value"       => "4",
            "min"         => "1",
            "max"         => "6",
            "step"        => "1",
            "unit"        => 'column',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "structure",
                'value'   => array(
                    'column',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Image Dimension", "mk_framework"),
            "param_name"  => "scroller_dimension",
            "value"       => "400",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("This width will be applied to both height and width.", "mk_framework"),
            "dependency"  => array(
                'element' => "structure",
                'value'   => array(
                    'scroller',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Preview Image Width", "mk_framework"),
            "param_name"  => "thumb_style_width",
            "value"       => "700",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'thumb',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Preview Image Height", "mk_framework"),
            "param_name"  => "thumb_style_height",
            "value"       => "380",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'thumb',
                ),
            ),
        ),
        array(
            "heading"     => __("Hover Scenarios", 'mk_framework'),
            "description" => __("This is what happens when user hovers over a gallery item.", 'mk_framework'),
            "param_name"  => "hover_scenarios",
            "value"       => array(
                __("Overlay Layer", 'mk_framework')  => "overlay",
                __("Gradient Layer", 'mk_framework') => 'gradient',
                __("None", 'mk_framework') => 'none',
            ),
            "type"        => "dropdown",
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Show Zoom Icon", "mk_framework"),
            "param_name"  => "show_zoom_icon",
            "value"       => "true",
            "description" => __("Using this option you can remove zoom icon that appears on hover.", "mk_framework")
        ),
        array(
            "type"        => "toggle",
            "heading"     => __("Image Title", "mk_framework"),
            "param_name"  => "enable_title",
            "value"       => "true",
            "description" => __("If you dont want to show image title disable this option.", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Image Height", "mk_framework"),
            "param_name"  => "height",
            "value"       => "500",
            "min"         => "100",
            "max"         => "1000",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("You can define you gallery image's height from this option. It only works for column structure", "mk_framework"),
            "dependency"  => array(
                'element' => "structure",
                'value'   => array(
                    'column',
                ),
            ),
        ),
        array(
            "type"        => "dropdown",
            "heading"     => __("Increase Quality of Image", "mk_framework"),
            "param_name"  => "image_quality",
            "value"       => array(
                __("No Actions", 'mk_framework')                                       => "1",
                __("Images 2 times bigger (retina compatible)", 'mk_framework')        => "2",
                __("Images 3 times bigger (fullwidth row compatible)", 'mk_framework') => "3",
            ),
            "description" => __("If you want Gallery images be retina compatible or you just want to use it in fullwidth row, you may consider increasing the image size. This option basically amplifies the image size to not let the browser scale it to fit the column (which is a quality loss).", "mk_framework"),
            "dependency"  => array(
                'element' => "style",
                'value'   => array(
                    'grid',
                ),
            ),
        ),
        array(
            "type"        => "range",
            "heading"     => __("Margin Bottom", "mk_framework"),
            "param_name"  => "margin_bottom",
            "value"       => "20",
            "min"         => "0",
            "max"         => "300",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("", "mk_framework"),
        ),
        $add_device_visibility,
        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),
        array(
            'type'       => 'item_id',
            'heading'    => __('Item ID', 'mk_framework'),
            'param_name' => "item_id",
        ),

    ),
));
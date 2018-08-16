<?php

$target_arr = array(
    __("Same window", "mk_framework") => "_self",
    __("New window", "mk_framework")  => "_blank",
);

$add_device_visibility = array(
    "type"        => "dropdown",
    "heading"     => __("Visibility For devices", "mk_framework"),
    "param_name"  => "visibility",
    "value"       => array(
        "All"                 => '',
        "Hidden on Phones (Screens smaller than 765px of width)" => "hidden-sm",
        "Hidden on Tablets (Screens in the range of 768px and 1024px)" => "hidden-tl",
        "Hidden on Mega Tablets (Screens in the range of 768px and 1280px)" => "hidden-tl-v2",
        "Hidden on Netbooks (Screens smaller than 1024px of width)" => "hidden-nb",
        "Hidden on Desktops (Screens wider than 1224px of width)" => "hidden-dt",
        "Hidden on Mega Desktops (Screens wider than 1290px of width)" => "hidden-dt-v2",
        "Visible on Phones (Screens smaller than 765px of width)" => "visible-sm",
        "Visible on Tablets (Screens in the range of 768px and 1024px)" => "visible-tl",
        "Visible on Mega Tablets (Screens in the range of 768px and 1280px)" => "visible-tl-v2",
        "Visible on Netbooks (Screens smaller than 1024px of width)" => "visible-nb",
        "Visible on Desktops (Screens wider than 1224px of width)" => "visible-dt",
        "Visible on Mega Desktops (Screens wider than 1290px of width)" => "visible-dt-v2"

    ),
    "description" => __("You can make this element invisible for a particular device (screen resolution) or set it to All to be visible for all devices.", "mk_framework"),
);

$infinite_animation = array(
    "None"               => '',
    "Float Vertically"   => "float-vertical",
    "Float Horizontally" => "float-horizontal",
    "Pulse"              => "pulse",
    "Tossing"            => "tossing",
    "Spin"               => 'spin',
    'Flip Horizontally'  => 'flip-horizontal',
);

$css_animations = array(
    "None"              => '',
    "Fade In"           => "fade-in",
    "Scale Up"          => "scale-up",
    "Scale Down"        => "scale-down",
    "Right to Left"     => "right-to-left",
    "Left to Right"     => "left-to-right",
    "Bottom to Top"     => "bottom-to-top",
    "Top to Bottom"     => "top-to-bottom",
    "Flip Horizontally" => "flip-x",
    "Flip Vertically"   => "flip-y",
    "Rotate"            => "forthy-five-rotate",
);

$mk_orderby = array(
    __("Date", 'mk_framework')                               => "date",
    __("Posts In (manually selected posts)", 'mk_framework') => "post__in",
    __('Menu Order', 'mk_framework')                         => 'menu_order',
    __("post id", 'mk_framework')                            => "id",
    __("title", 'mk_framework')                              => "title",
    __("Comment Count", 'mk_framework')                      => "comment_count",
    __("Random", 'mk_framework')                             => "rand",
    __("Author", 'mk_framework')                             => "author",
    __("No order", 'mk_framework')                           => "none",
);

$mk_product_orderby = array(
    __("Date", 'mk_framework')       => "date",
    __("Title", 'mk_framework')      => "title",
    __("Product ID", 'mk_framework') => "product_id",
    __("Name", 'mk_framework')       => "name",
    __("Price", 'mk_framework')      => "price",
    __("Sales", 'mk_framework')      => "sales",
    __("Random", 'mk_framework')     => "random",
);
$mk_product_categories_orderby = array(
    __("ID", 'mk_framework')    => "id",
    __("Count", 'mk_framework') => "count",
    __("Name", 'mk_framework')  => "name",
    __("Slug", 'mk_framework')  => "slug",
    __("None", 'mk_framework')  => "none",
);

$column_width_list = array(
    __('1 column - 1/12', 'mk_framework')    => '1/12',
    __('2 columns - 1/6', 'mk_framework')    => '1/6',
    __('3 columns - 1/4', 'mk_framework')    => '1/4',
    __('4 columns - 1/3', 'mk_framework')    => '1/3',
    __('5 columns - 5/12', 'mk_framework')   => '5/12',
    __('6 columns - 1/2', 'mk_framework')    => '1/2',
    __('7 columns - 7/12', 'mk_framework')   => '7/12',
    __('8 columns - 2/3', 'mk_framework')    => '2/3',
    __('9 columns - 3/4', 'mk_framework')    => '3/4',
    __('10 columns - 5/6', 'mk_framework')   => '5/6',
    __('11 columns - 11/12', 'mk_framework') => '11/12',
    __('12 columns - 1/1', 'mk_framework')   => '1/1',
);

global $mk_settings;
$skin_color = $mk_settings['accent-color'];

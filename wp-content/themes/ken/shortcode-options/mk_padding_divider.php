<?php
vc_map(array(
    "name"        => __("Padding Divider", "mk_framework"),
    "base"        => "mk_padding_divider",
    'icon'        => 'icon-mk-padding-space vc_mk_element-icon',
    "category"    => __('General', 'mk_framework'),
    'description' => __('Adds space between elements', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "range",
            "heading"     => __("Padding Size (Px)", "mk_framework"),
            "param_name"  => "size",
            "value"       => "40",
            "min"         => "0",
            "max"         => "500",
            "step"        => "1",
            "unit"        => 'px',
            "description" => __("How much space would you like to drop in this specific padding shortcode?", "mk_framework"),
        ),
        $add_device_visibility,
    ),
));
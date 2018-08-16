<?php
vc_map(array(
    "name"            => __("Content Scroller Item", "mk_framework"),
    "base"            => "vc_content_scroller_item",
    'icon'            => 'icon-mk-image-slideshow vc_mk_element-icon',
    "content_element" => true,
    "as_child"        => array('only' => 'vc_content_scroller'),
    "is_container"    => true,

    "params"          => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Title", "mk_framework"),
            "param_name"  => "title",
            "description" => __("Content Scroller section title.", "mk_framework"),
        ),
    ),
    "js_view"         => 'VcColumnView',
));
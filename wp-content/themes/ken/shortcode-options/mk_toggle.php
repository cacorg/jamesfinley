<?php
vc_map(array(
    "name"          => __("Toggle", "mk_framework"),
    "base"          => "mk_toggle",
    "wrapper_class" => "clearfix",
    'icon'          => 'icon-mk-toggle vc_mk_element-icon',
    "category"      => __('Typography', 'mk_framework'),
    'description'   => __('Expandable toggle element', 'mk_framework'),
    "params"        => array(

        array(
            "type"       => "textfield",
            "heading"    => __("Toggle Title", "mk_framework"),
            "param_name" => "title",
            "value"      => "",
        ),
        array(
            "type"        => "textfield",
            "heading"     => __("Add Icon Class Name (Icon For title)", "mk_framework"),
            "param_name"  => "icon",
            "value"       => "",
            "description" => __("<a target='_blank' href='" . admin_url('admin.php?page=icon-library') . "'>Click here</a> to get the icon class name (or any other font icons library that you have installed in the theme)", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Custom Icon Color", "mk_framework"),
            "param_name"  => "icon_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"       => "textarea_html",
            "holder"     => "div",
            "heading"    => __("Toggle Content.", "mk_framework"),
            "param_name" => "content",
            "value"      => __("", "mk_framework"),
        ),

        array(
            "type"        => "colorpicker",
            "heading"     => __("Pane Background Color", "mk_framework"),
            "param_name"  => "pane_bg",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "value"       => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in Custom CSS Shortcode or Masterkey Custom CSS option.", "mk_framework"),
        ),
    ),
));
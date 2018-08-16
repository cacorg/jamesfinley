<?php
vc_map(array(
    "name"        => __("Audio Player", "mk_framework"),
    "base"        => "mk_audio",
    "category"    => __('General', 'mk_framework'),
    'icon'        => 'icon-mk-audio-player vc_mk_element-icon',
    'description' => __('Adds player to your audio files.', 'mk_framework'),
    "params"      => array(
        array(
            "type"        => "textfield",
            "heading"     => __("Audio Title", "mk_framework"),
            "param_name"  => "file_title",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Upload MP3 file format", "mk_framework"),
            "param_name"  => "mp3_file",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "upload",
            "heading"     => __("Upload OGG file format", "mk_framework"),
            "param_name"  => "ogg_file",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "toggle",
            "heading"     => __("For small container?", "mk_framework"),
            "param_name"  => "small_version",
            "value"       => "false",
            "description" => __("If you want to use this player in a small container enable this option. This option will force player controls to below progress bar.", "mk_framework"),
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
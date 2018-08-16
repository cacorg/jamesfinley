<?php
vc_map(array(
    "name"                    => __("Accordion", "mk_framework"),
    "base"                    => "vc_accordions",
    "show_settings_on_create" => false,
    "is_container"            => true,
    'icon'                    => 'icon-mk-accordion vc_mk_element-icon',
    'description'             => __('Collapsible content panels', 'mk_framework'),
    "category"                => __('Content', 'mk_framework'),
    "params"                  => array(
        array(
            "type"        => "dropdown",
            "heading"     => __("Style", "mk_framework"),
            "param_name"  => "style",
            "width"       => 150,
            "value"       => array(
                __('Simple', "mk_framework") => "simple",
                __('Boxed', "mk_framework")  => "boxed",
            ),
            "description" => __("", "mk_framework"),
        ),
        array(
            "type"        => "colorpicker",
            "heading"     => __("Container Background Color", "mk_framework"),
            "param_name"  => "container_bg_color",
            "value"       => "",
            "description" => __("", "mk_framework"),
        ),

        array(
            "type"        => "range",
            "heading"     => __("Initial Open Item", "mk_framework"),
            "param_name"  => "open_toggle",
            "value"       => "0",
            "min"         => "-1",
            "max"         => "30",
            "step"        => "1",
            "unit"        => 'index',
            "description" => __("Specify which item to be open by default when The page loads. please note that this value is zero based therefore zero is the first item. -1 will close all accordions on page load.", "mk_framework"),
        ),

        array(
            "type"        => "dropdown",
            "heading"     => __("Mobile Friendly Accordions?", "mk_framework"),
            "description" => __("If enabled accordion functionality will removed in mobile devices, each toggle and its content will be inserted below each other.", "mk_framework"),
            "param_name"  => "responsive",
            "value"       => array(
                "Yes please!" => "true",
                "No!"         => "false",
            ),
        ),

        array(
            "type"        => "textfield",
            "heading"     => __("Extra class name", "mk_framework"),
            "param_name"  => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "mk_framework"),
        ),
    ),
    "custom_markup"           => '
  <div class="wpb_accordion_holder wpb_holder clearfix vc_container_for_children">
  %content%
  </div>
  <div class="tab_controls">
  <a class="add_tab" title="' . __('Add section', 'mk_framework') . '"><span class="vc_icon"></span> <span class="tab-label">' . __('Add section', 'mk_framework') . '</span></a>
  </div>
  ',
    'default_content'         => '
  [vc_accordion_tab title="' . __('Section 1', "mk_framework") . '"][/vc_accordion_tab]
  [vc_accordion_tab title="' . __('Section 2', "mk_framework") . '"][/vc_accordion_tab]
  ',
    'js_view'                 => 'VcAccordionView',
));
<?php

global $mk_settings;

$widget_font_family = (isset($mk_settings['widget-title']['font-family']) && !empty($mk_settings['widget-title']['font-family'])) ? ('font-family:' . $mk_settings['widget-title']['font-family'] . ';') : '';
$widget_font_size = (isset($mk_settings['widget-title']['font-size']) && !empty($mk_settings['widget-title']['font-size'])) ? ('font-size:' . $mk_settings['widget-title']['font-size'] . ';') : '';
$widget_font_weight = (isset($mk_settings['widget-title']['font-weight']) && !empty($mk_settings['widget-title']['font-weight'])) ? ('font-weight:' . $mk_settings['widget-title']['font-weight'] . ';') : '';
$widget_title_divider = (isset($mk_settings['widget-title-divider']) && $mk_settings['widget-title-divider'] == 1) ? '' : 'display: none;'; 


$footer_widget_title_size = (isset($mk_settings['footer-widget-title']['font-size'])) ? 'font-size: '.$mk_settings['footer-widget-title']['font-size'].';' : ''; 
$footer_text_size = (isset($mk_settings['footer-text-size'])) ? 'font-size: '.$mk_settings['footer-text-size'].'px;' : ''; 
$footer_widget_title_wight = (isset($mk_settings['footer-widget-title']['font-weight'])) ? 'font-weight: '.$mk_settings['footer-widget-title']['font-weight'].';' : '';
$footer_widget_title_letter = (isset($mk_settings['footer-widget-title']['letter-spacing'])) ? 'letter-spacing: '.$mk_settings['footer-widget-title']['letter-spacing'].';' : '';
$subfooter_size = (isset($mk_settings['subfooter-text-size'])) ? 'font-size:'.$mk_settings['subfooter-text-size'].'px;' : '';
$subfooter_letter_spacing =(isset($mk_settings['subfooter-letter-spacing'])) ? 'letter-spacing: '.$mk_settings['subfooter-letter-spacing'].'px;' : '';

Mk_Static_Files::addGlobalStyle("

	.widgettitle {
		{$widget_font_family}
		{$widget_font_size}
		{$widget_font_weight}
	}

	.widgettitle:after{
		{$widget_title_divider}
	}

	.mk-side-dashboard .widgettitle,
	.mk-side-dashboard .widgettitle a
	{
		color: {$mk_settings['dashboard-title-color']};
	}


	.mk-side-dashboard,
	.mk-side-dashboard p
	{
		color: {$mk_settings['dashboard-txt-color']};
	}

	.mk-side-dashboard a
	{
		color: {$mk_settings['dashboard-link-color']['regular']};
	}

	.mk-side-dashboard a:hover
	{
		color: {$mk_settings['dashboard-link-color']['hover']};
	}

	#mk-sidebar .widgettitle,
	#mk-sidebar .widgettitle  a
	{
		color: {$mk_settings['sidebar-title-color']};
	}


	#mk-sidebar,
	#mk-sidebar p
	{
		color: {$mk_settings['sidebar-txt-color']};
	}

	#mk-sidebar a
	{
		color: {$mk_settings['sidebar-link-color']['regular']};
	}

	#mk-sidebar a:hover
	{
		color: {$mk_settings['sidebar-link-color']['hover']};
	}


	#mk-footer .widgettitle,
	#mk-footer .widgettitle a
	{
		color: {$mk_settings['footer-title-color']};
	}

	#mk-footer,
	#mk-footer p
	{
		color: {$mk_settings['footer-txt-color']};
	}

	#mk-footer a
	{
		color: {$mk_settings['footer-link-color']['regular']};
	}

	#mk-footer a:hover
	{
		color: {$mk_settings['footer-link-color']['hover']};
	}

	.mk-footer-copyright,
	.mk-footer-copyright a {
		color: {$mk_settings['footer-socket-color']} !important;
	}

	.mk-footer-social a {
		color: {$mk_settings['footer-social-color']['regular']} !important;
	}

	.mk-footer-social a:hover {
		color: {$mk_settings['footer-social-color']['hover']}!important;
	}

	#mk-footer .widgettitle	{
		{$footer_widget_title_size}
		{$footer_widget_title_wight}
		{$footer_widget_title_letter}
	}

	#mk-footer, 
	#mk-footer p {
		{$footer_text_size}
	}

	#mk-footer #sub-footer,
	#sub-footer .mk-footer-copyright{
		{$subfooter_size}
		{$subfooter_letter_spacing}
	}

");
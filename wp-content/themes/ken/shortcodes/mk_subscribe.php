<?php

global $mk_settings;
extract( shortcode_atts( array(
	'placeholder_text' => 'Your e-mail',
	'button_text' => 'SEND',
	'list_id' => '',
	'optin' => '',
	'el_class' => '',
	'animation' => '',
	'corner_radius' => 0,
	'space_between' => 0,
	'subscribe_size' => 'large',
	'btn_bg_color' => '',
	'btn_text_color' => '#eee',
	'btn_border_style' => 'solid',
	'btn_border_width' => '1',
	'btn_border_color' => '#eee',
	'input_bg_color' => '',
	'input_placeholder_color' => '#eee',
	'input_border_style' => 'solid',
	'input_border_width' => '1',
	'input_border_color' => '#eee',
	'btn_hover_bg_color' => '',
	'btn_hover_text_color' => '',
	'btn_hover_border_color' => '',
	'input_focus_bg_color' => '',
	'input_focus_placeholder_color' => '',
), $atts ) );


$mailchimp_api_key = isset($mk_settings['mailchimp_api_key']) ? trim( $mk_settings['mailchimp_api_key'] ) : '';

if( empty( $mailchimp_api_key ) )  {
	printf( __( 'Please add MailChimp API Key in <a href="%s" target="_blank">Theme Settings > Third Party API > MailChimp API Key</a>', 'mk_framework' ), admin_url('admin.php?page=theme_settings') );
}
$output = '';

$id = Mk_Static_Files::shortcode_id();

$animation_css = ($animation != '') ? ' mk-animate-element ' . $animation . ' ' : '';

$output .= '<div id="mk-subscribe-'.$id.'"  class="mk-subscribe _ width-full '.$subscribe_size.'-size '. $el_class .' '.$animation_css.'">';
	$output .= '<div id="mk-subscribe--message" class="mk-subscribe--message _ block width-full"></div>';
	$output .= '<form action="mk_ajax_subscribe" method="post" class="mk-subscribe--form _ table width-full">';
		$output .= '<div class="mk-subscribe--form-column _ table-cell">';
			$output .= '<input type="text" name="mk-subscribe--email" class="mk-subscribe--email" placeholder="'.$placeholder_text.'">';
			$output .= '<input type="hidden" name="mk-subscribe--list-id" class="mk-subscribe--list-id" value="'.$list_id.'">';
			$output .= '<input type="hidden" name="mk-subscribe--optin" class="mk-subscribe--optin" value="'.$optin.'">';
		$output .= '</div>';
		$output .= '<div class="mk-subscribe--form-column _ table-cell">';
			$output .= '<button id="mk-subscribe--button" class="mk-subscribe--button _ font-weight-b">'; 
				$output .= '<span>'.$button_text.'</span>';
			$output .= '</button>';
		$output .= '</div>';
	$output .= '</form>';
$output .= '</div>';


/**
 * Custom CSS Output
 * ==================================================================================*/
Mk_Static_Files::addCSS('
	#mk-subscribe-'.$id.' .mk-subscribe--email,
	#mk-subscribe-'.$id.' .mk-subscribe--button {
		border-radius: '.$corner_radius.'px;
	}
	#mk-subscribe-'.$id.' .mk-subscribe--form-column {
		padding-right: '.$space_between.'px;
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email {
		background-color: '.$input_bg_color.';
		color: '.$input_placeholder_color.';
		border: '.$input_border_width.'px '.$input_border_style.' '.$input_border_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email::-webkit-input-placeholder {
		color: '.$input_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:-ms-input-placeholder {
		color: '.$input_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email::-ms-input-placeholder {
		color: '.$input_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email::-moz-placeholder {
		color: '.$input_placeholder_color.';
		opacity: 1;
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:focus {
		background-color: '.$input_focus_bg_color.';
		border: '.$input_border_width.'px '.$input_border_style.' '.$input_border_color.';
		color: '.$input_focus_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:focus::-webkit-input-placeholder {
		color: '.$input_focus_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:focus:-ms-input-placeholder {
		color: '.$input_focus_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:focus::-ms-input-placeholder {
		color: '.$input_focus_placeholder_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--email:focus::-moz-placeholder {
		color: '.$input_focus_placeholder_color.';
		opacity: 1;
	}
	#mk-subscribe-'.$id.' .mk-subscribe--button {
		background-color: '.$btn_bg_color.';
		color: '.$btn_text_color.';
		border: '.$btn_border_width.'px '.$btn_border_style.' '.$btn_border_color.';
	}
	#mk-subscribe-'.$id.' .mk-subscribe--button:hover {
		background-color: '.$btn_hover_bg_color.';
		color: '.$btn_hover_text_color.';
		border: '.$btn_border_width.'px '.$btn_border_style.' '.$btn_hover_border_color.';
	}
', $id);

echo $output;

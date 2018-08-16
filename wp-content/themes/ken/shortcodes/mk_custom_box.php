<?php

$el_class = $width = $el_position = '';

extract( shortcode_atts( array(
			'el_class' => '',
			'border_color_style' => 'none',
			'border_color' => '',
			'border_style' => 'solid',
			'border_width' => 1,
			'border_grandient_color_from' => '',
			'border_grandient_color_to' => '',
			'border_gradient_color_style' => 'linear',
			'border_gradient_color_angle' => 'vertical',
			'border_grandient_color_fallback' => '',

			'background_style' => 'image',
			'bg_color' => '',
			'bg_grandient_color_from' => 'rgba(0, 0, 0, 0)',
			'bg_grandient_color_to' => 'rgba(0, 0, 0, 0)',
			'bg_gradient_color_style' => 'linear',
			'bg_gradient_color_angle' => 'vertical',
			'bg_grandient_color_fallback' => '',
			'bg_image' => '',
			'bg_position' => 'center center',
			'bg_repeat' => 'no-repeat',
			'bg_stretch' => 'false',
			'overlay_color' => '',

			'background_hov_color_style' => 'image',
			'bg_hov_color' => '',
			'bg_grandient_hov_color_from' => '',
			'bg_grandient_hov_color_to' => '',
			'bg_gradient_hov_color_style' => 'linear',
			'bg_gradient_hov_color_angle' => 'vertical',
			'bg_grandient_hov_color_fallback' => '',
			'bg_image_hov_effect' => 'none',

			'corner_radius' => 0,
			'padding_horizental' => '20',
			'padding_vertical' => '30',
			'min_height' => '100',
			'margin_bottom' => '10',
			'animation' => '',
			'visibility' => '',

			'dropshadow_opacity' => '50',
			'dropshadow_size' => '0',
			'dropshadow_distance' => '0'

		), $atts ) );

$output = $bg_stretch_class = $animation_css = $drop_shadow_css = '';
$id = Mk_Static_Files::shortcode_id();

$el_class .= '';


if ( isset($bg_image) && !empty( $bg_image ) ) {
	$el_class .= ' hover-effect-image ';
}else {
	$el_class .= ' hover-effect-'.$background_hov_color_style.' ';
}

if ($background_hov_color_style == 'image' && $bg_image_hov_effect != 'none') {
	$el_class .= ' image-effect-'.$bg_image_hov_effect.' ';
}



$backgroud_image = !empty( $bg_image ) ? 'background-image:url('.$bg_image.'); ' : '';
$border = !empty( $border_color ) ? ( 'border:2px solid '.$border_color.';' ) : '';

$output .= '<div id="box-'.$id.'" class="mk-custom-boxed mk-shortcode ' . $visibility .' '.$animation_css . ' ' .$el_class.'">';
$output .= '<div class="box-holder">';
if( !empty($overlay_color) ){
	$output .= '<div class="mk-custom-boxed--overlay"></div>';
}
$output .= wpb_js_remove_wpautop( $content );
$output .= '<div class="clearboth"></div>';
$output .= '</div>';
$output .= '</div>';


echo $output;


/**
 * Custom CSS Output
 * ==================================================================================*/
if($border_color_style == 'gradient_color') {
	$gradients_border = mk_gradient_option_parser($border_gradient_color_style, $border_gradient_color_angle);
	Mk_Static_Files::addCSS('
		#box-'.$id.'{
	 		padding: '.$border_width.'px;
	    	background: '.$bg_grandient_color_fallback.';
			background: -webkit-'.$gradients_border['type'].'-gradient('.$gradients_border['angle_1'].''.$border_grandient_color_from.' 0%, '.$border_grandient_color_to.' 100%);
			background: '.$gradients_border['type'].'-gradient('.$gradients_border['angle_2'].''.$border_grandient_color_from.' 0%, '.$border_grandient_color_to.' 100%);
	    }
	', $id);

}else if($border_color_style == 'single_color'){
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder{
			border: '.$border_width.'px '.$border_style.' '.$border_color.';
		}
	', $id);
}


if ( !empty( $bg_image ) ) {
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder::after,
		#box-'.$id.'.hover-effect-image.image-effect-blur .box-holder::before{
			content: "";
			background-image: url('.$bg_image.');
			background-position: '.$bg_position.';
			background-repeat: '.$bg_repeat.';
		}
	', $id);
}
if( !empty($overlay_color) ){
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder .mk-custom-boxed--overlay {
			background-color: '.$overlay_color.'; 
		}
	', $id);
}


if($background_style == 'gradient_color') {
	$gradients = mk_gradient_option_parser($bg_gradient_color_style, $bg_gradient_color_angle);
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder {
	    	background: '.$bg_grandient_color_fallback.';
			background: -webkit-'.$gradients['type'].'-gradient('.$gradients['angle_1'].''.$bg_grandient_color_from.' 0%, '.$bg_grandient_color_to.' 100%);
			background: '.$gradients['type'].'-gradient('.$gradients['angle_2'].''.$bg_grandient_color_from.' 0%, '.$bg_grandient_color_to.' 100%);
	    }
	', $id);
}else if ($background_style == 'image') {
	if ( !empty( $bg_image ) ) {
		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder::after,
			#box-'.$id.'.hover-effect-image.image-effect-blur .box-holder::before{
				content: "";
				background-image: url('.$bg_image.');
				background-position: '.$bg_position.';
				background-repeat: '.$bg_repeat.';
			}
		', $id);
	}

		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder{
				background-color: '.$bg_color.';
			}
		', $id);

	if($bg_stretch == 'true') {
		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder::after, 
			#box-'.$id.'.hover-effect-image.image-effect-blur .box-holder::before{
				background-size: cover;
				-webkit-background-size: cover;
				-moz-background-size: cover;
			}
		', $id);
	}

}


if( $corner_radius > 0 ) {
	Mk_Static_Files::addCSS('
		#box-'.$id.', 
		#box-'.$id.' .box-holder,
		#box-'.$id.' .mk-custom-boxed--overlay{
			border-radius: '.$corner_radius.'px;
		}
	', $id);
	if($border_color_style == 'single_color') {
		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder::after,
			#box-'.$id.' .box-holder::before,
			#box-'.$id.' .mk-custom-boxed--overlay{
				border-radius: '.($corner_radius - 4).'px;
			}
		', $id);
	}else if($border_color_style == 'gradient_color') {
		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder,
			#box-'.$id.' .box-holder::after,
			#box-'.$id.' .box-holder::before,
			#box-'.$id.' .mk-custom-boxed--overlay{
				border-radius: '.($corner_radius - 5).'px;
			}
		', $id);
	}else if($border_color_style == 'none') {
		Mk_Static_Files::addCSS('
			#box-'.$id.' .box-holder::after,
			#box-'.$id.' .box-holder::before,
			#box-'.$id.' .mk-custom-boxed--overlay{
				border-radius: '.$corner_radius.'px;
			}
		', $id);
	}
}

Mk_Static_Files::addCSS('
	#box-'.$id.'{
		margin-bottom: '.$margin_bottom.'px;
	}
	#box-'.$id.' .box-holder{
		min-height: '.$min_height.'px;
		padding: '.$padding_vertical.'px '.$padding_horizental.'px;
	}
', $id);

if ($background_hov_color_style == 'image') {
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder:hover{
			background-color: '.$bg_hov_color.';
		}
	', $id);
}else if($background_hov_color_style == 'gradient_color') {
	$gradients_hover = mk_gradient_option_parser($bg_gradient_hov_color_style, $bg_gradient_hov_color_angle);
	Mk_Static_Files::addCSS('
		#box-'.$id.' .box-holder::after {
	    	background: '.$bg_grandient_hov_color_fallback.';
			background: -webkit-'.$gradients_hover['type'].'-gradient('.$gradients_hover['angle_1'].''.$bg_grandient_hov_color_from.' 0%, '.$bg_grandient_hov_color_to.' 100%);
			background: '.$gradients_hover['type'].'-gradient('.$gradients_hover['angle_2'].''.$bg_grandient_hov_color_from.' 0%, '.$bg_grandient_hov_color_to.' 100%);
	    }
	', $id);
}

if($dropshadow_size>0){
	Mk_Static_Files::addCSS('
		#box-'.$id.' {
			box-shadow: 0px 0px '.$dropshadow_distance.'px '.$dropshadow_size.'px rgba(0, 0, 0, 0.'.$dropshadow_opacity.');
		}
		', $id);
}
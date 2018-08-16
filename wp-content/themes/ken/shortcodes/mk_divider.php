<?php

extract( shortcode_atts( array(
			'el_class' => '',
			'icon' => '',
			'divider_width' => 'full_width',
			'custom_width' => 10,
			'align' => 'center',
			'style' => 'single',
			'divider_color' => '',
			'margin_top' => 20,
			'thickness' => 2,
			'margin_bottom' => 20,
			'orientation' => 'horizontal',
			'divider_height' => '50',
			'padding_left' => 0,
			'padding_right' => 0,
			'vertical_align' => 'center',
			'visibility' => ''

		), $atts ) );
$output = $custom_css = $align_css = '';

$custom_css = $divider_width == 'custom_width' ? 'width:'.$custom_width.'px;' : '';


if($orientation == 'vertical'){
	$el_class .= ' mk-divider-vertical ';
	$divider_align = $vertical_align;
}else{
	$divider_align = $align;
}

if($divider_align == 'left'){
	$align_css = '';
}else if ($divider_align == 'center') {
	$align_css = 'margin: 0 auto;';	
}else{
	$align_css = 'margin: 0 0 0 auto;';
}

$style_id = Mk_Static_Files::shortcode_id();

if($orientation == 'horizontal'){
	
	Mk_Static_Files::addCSS('
        #divider-'.$style_id.' .divider-inner{
            '.$custom_css.'
            '.$align_css.'
        }
    ', $style_id);

    if($style == 'single'){

    	Mk_Static_Files::addCSS('
	        #divider-'.$style_id.' .divider-inner{
	            border-width:'.$thickness.'px;
	            height:'.$thickness.'px;
	        }
	    ', $style_id);

    }	
}


$output .= '<div id="divider-'.$style_id.'" style="padding: '.$margin_top.'px '.$padding_right.'px '.$margin_bottom.'px '. $padding_left .'px;" class="mk-divider divider_'.$divider_width.' divider-'.$style.' '.$el_class.' '.$visibility.'">';

	$border_color = (!empty($divider_color)) ? (' style="border-color:'.$divider_color.';"') : '';
	$output .= '<div'.$border_color.' class="divider-inner"></div>';
$output .= '</div><div class="clearboth"></div>';


echo $output;

if($orientation == 'vertical'){
	Mk_Static_Files::addCSS('
	        #divider-'.$style_id.' .divider-inner{
	            height: '.$divider_height.'px;
	        }
	    ', $style_id);
	if($style == 'single'){
		Mk_Static_Files::addCSS('
	        #divider-'.$style_id.' .divider-inner{
	            width:1px !important;
	            height: '.$divider_height.'px;
	            border-right-width:'.$thickness.'px !important;
	        }
	    ', $style_id);
	}
}
Mk_Static_Files::addCSS('
    #divider-'.$style_id.' .divider-inner{
	    letter-spacing: 1px;
        '.$align_css.'
    }
', $style_id);
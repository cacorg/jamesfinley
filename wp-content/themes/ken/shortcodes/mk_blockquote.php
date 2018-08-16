<?php

extract( shortcode_atts( array(
			'el_class' => '',
			"style" => 'classic',
			"text_size" => 14,
			"force_font_size" => 'false',
			"size_smallscreen" => 0,
			"size_tablet" => 0,
			"size_phone" => 0,
			"align" => 'left',
			'animation' => '',
			'visibility' => ''
		), $atts ) );
$id = Mk_Static_Files::shortcode_id();

$output = '';
$animation_css = ($animation != '') ? (' mk-animate-element ' . $animation . ' ') : '';
$output .= '<div  id="mk-blockquote-'.$id.'"  class="mk-blockquote '.$style.'-style align-'.$align.' '.$animation_css.$el_class.' '.$visibility.'"><div class="mk-blockquote-content"><i class="mk-icon-quote-left mk-quote-left"></i>' .wpb_js_remove_wpautop($content). '<i class="mk-icon-quote-right mk-quote-right"></i></div></div>';

echo $output;

if($text_size != 14) {
	Mk_Static_Files::addCSS('
        #mk-blockquote-'.$id.' ,
		#mk-blockquote-'.$id.' p{
            font-size:'.$text_size.'px !important;
        }
    ', $id);
}
if ($force_font_size == 'true') {

	$app_styles = "";
	if($size_smallscreen != '0'){
		$app_styles .= '
			@media handheld, only screen and (max-width: 1280px) {
				#mk-blockquote-'.$id.' , 
				#mk-blockquote-'.$id.' p {
					font-size: '.$size_smallscreen.'px !important;
				}
			}
		';
	} 
	if($size_tablet != '0') {
		$app_styles .= '
			@media handheld, only screen and (min-width: 768px) and (max-width: 1024px) {
				#mk-blockquote-'.$id.' , 
				#mk-blockquote-'.$id.' p{
					font-size: '.$size_tablet.'px !important;
				}
			}
		';
	}
	if($size_phone != '0') {
		$app_styles .= '
			@media handheld, only screen and (max-width: 767px) {
				#mk-blockquote-'.$id.'  , 
				#mk-blockquote-'.$id.' p{
					font-size: '.$size_phone.'px !important;
				}
			}
		';
	}


	if($app_styles != '') {
		Mk_Static_Files::addCSS($app_styles, $id);
	}
}
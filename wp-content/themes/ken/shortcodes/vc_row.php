<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'fullwidth' => 'false',
	'fullwidth_content' => 'true',
	'id' => '',
	'padding' =>0,
	'attached' => 'false',
	'parallax' => '',
    'parallax_image' => '',
    'video_bg' => '',
    'parallax_speed_bg' => 1.5,
    'video_bg_url' => 'https://www.youtube.com/watch?v=lMJXxhRFO1k',
    'video_bg_parallax' => '',
    'parallax_speed_video' => 1.5,
	'visibility' => '',
	'equal_height' => '',
	'content_placement' => '',
	'css' => '',
    'el_class' => '',
), $atts));

$fullwidth_start = $output = $fullwidth_end = $wrapper_attributes = $row_classes = '';

wp_enqueue_script( 'wpb_composer_front_js' );

$padding_css = ($attached == 'true') ? ' add-padding-'.$padding : '';

$css_classes = array(
	'vc_row',
	'wpb_row', //deprecated
	'vc_row-fluid',
	'js-master-row',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);

// Prallax video & image
$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;

//Parallax Video
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$row_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}

//Parallax Content
if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$row_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$row_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$row_classes[] = 'js-vc_parallax-o-fixed';
	}
}

//Parallax Background Image or Video
if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}


if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}


if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = ' vc_row-o-equal-height';
}


if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = ' vc_row-o-content-' . $content_placement;
}

if ( ! empty( $flex_row ) ) {
	$css_classes[] = ' vc_row-flex';
}

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );


$id = $id ? (' id="'.$id.'" ') : '';

if($fullwidth == 'true') {
	global $post;
	$page_layout = get_post_meta( $post->ID, '_layout', true );
	$fullwidth_start = '</div></div></div>';
	if(is_singular('post')) {
		$fullwidth_start .= '</div>';
	}
	
	$fullwidth_end = '<div class="mk-main-wrapper-holder"><div class="theme-page-wrapper '.$page_layout.'-layout mk-grid vc_row-fluid no-padding"><div class="theme-content no-padding">';
	if(is_singular('post')) {
		$fullwidth_end .= '<div class="single-content">';
	}
	
}

$wrapper_attributes = (is_array($wrapper_attributes)) ? implode( ' ', $wrapper_attributes ) : '';
$row_classes = (is_array($row_classes)) ? implode( ' ', $row_classes ) : '';

$output .= $fullwidth_start . '<div '.$id.' ' . $wrapper_attributes . ' class="'.esc_attr( trim( $css_class ) ).' '.$visibility.' mk-fullwidth-'.$fullwidth.$padding_css .' attched-'.$attached . ' ' . $row_classes . '">';
if($fullwidth == 'true' && $fullwidth_content == 'false'){
		$output .= '<div class="mk-grid">'; 
	}
$output .= wpb_js_remove_wpautop($content);

if($fullwidth == 'true' && $fullwidth_content == 'false'){
		$output .= '</div>';
	}

$output .= '</div>'.$fullwidth_end . $this->endBlockComment('row');
echo $output;
<?php
$output  = $backgroud_image_alter = $color_mask_css = $parallax_scroll = $video_output = $page_intro_class = '';
extract( shortcode_atts( array(
			'el_class' => '',
			'layout_structure' => 'full',
			'bg_color' => '',
			'border_color' => '',
			'bg_image' => '',
			'bg_repeat' => 'repeat',
			'section_id' => '',
			'bg_stretch' => 'false',
			'attachment' => 'scroll',
			'bg_position' => 'left top',
			'parallax' => 'false',
			'padding' => 20,
			'min_height' => 100,
			'mask_opacity' => 0.6,
			'full_height' => 'false',
			'vertical_centered' => 'false',
    		'intro_effect' => 'false',
			'bg_video' => 'no',
			'mp4' => '',
			'webm' => '',
			'ogv' => '',
			'poster_image' => '',
			'mask' => 'false',
			'parallax_direction' => 'vertical',
			'full_width' => 'false',
			'color_mask' => '',
			'visibility' => '',
			'expandable' => 'false',
			'expandable_txt' => '',
			'expandable_txt_align' => 'center',
			'expandable_txt_color' => '#ccc',
			'expandable_txt_size'=> 16,
			'expandable_icon' => 'mk-theme-icon-plus',
			'expandable_icon_size' => 16,
			'expandable_image' => '',
			'video_source' => 'self',
			'stream_host_website' => 'youtube',
			'stream_video_id' => '',
			'stream_sound' => 'false',
			'bg_gradient' => 'false',
    		'video_color_mask'      => '',
    		'gr_end' => '',
    		'video_opacity' => '0.6',
    		'has_top_shape_divider' => 'false',
    		'top_shape_style' => 'diagonal-top',
    		'top_shape_size' => 'big',
    		'top_shape_color' => '#fff',
    		'top_shape_bg_color' => '',
    		'top_shape_el_class' => '',
    		'has_bottom_shape_divider' => 'false',
    		'bottom_shape_style' => 'diagonal-bottom',
    		'bottom_shape_size' => 'big',
    		'bottom_shape_color' => '#fff',
    		'bottom_shape_bg_color' => '',
    		'bottom_shape_el_class' => '',
    		'color_transition' => 'false',
    		'color_transition_1' => '',
    		'color_transition_2' => '',
    		'color_transition_3' => '',
    		'color_transition_4' => '',
    		'color_transition_5' => '',
    		'color_transition_interval' => '7'

		), $atts ) );

global $post;


$id = Mk_Static_Files::shortcode_id();

wp_enqueue_script( 'wpb_composer_front_js' );

$data_config[] ='';
$bg_stretch_class = ( $bg_stretch == 'true' ) ? 'mk-background-stretch ' : '';

$shape_divider_top = $shape_divider_bottom = '';

$backgroud_image = !empty( $bg_image ) ? 'background-image:url('.$bg_image.'); ' : '';

//color transition
$colors_array = array();
if($color_transition == 'true'){
	
	if($color_transition_1 != '') $colors_array[] = $color_transition_1;
	if($color_transition_2 != '') $colors_array[] = $color_transition_2;
	if($color_transition_3 != '') $colors_array[] = $color_transition_3;
	if($color_transition_4 != '') $colors_array[] = $color_transition_4;
	if($color_transition_5 != '') $colors_array[] = $color_transition_5;
	if(count($colors_array)>1){
		$el_class .= ' color-transition-true ';
	}
}

if( $attachment == 'fixed' ) {
	$data_attachement = 'fixed';
} else {
	$data_attachement = 'scroll';
}

if($parallax_direction == 'horizontal' || $parallax_direction == 'vertical') {
	$attachment = 'scroll';
}

// Default fixed layer
if( $attachment == 'fixed' ) {
	$backgroud_image_alter = '<div class="fixed-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'"></div>';
}

// if($expandable != 'true'){
	if($layout_structure == 'full') {

	/**
	 * Video Background
	 */
	if ( $bg_video == 'yes') {

		$data_config[] = ($video_source == 'social') ? 'data-source="'.$stream_host_website.'"' : '' ;
		$data_config[] = ($video_source == 'social') ? 'data-sound="'.$stream_sound.'"' : '' ;
		$el_class .= ' ' . $video_source.'-hosted' . ' ';

		if(!empty($poster_image)) { $video_output .= '<div style="background-image:url('.$poster_image.');" class="mk-video-section-touch"></div>'; }

		$video_output .= '<div class="mk-section-video">';

		if($video_source == 'social'){
			$video_loop = 1;//temporary we set it as 1, but it needs the another option
			$video_output .= '<div class="video-social-hosted mk-center-video">';

		    if ($stream_host_website == 'youtube'){
				wp_enqueue_script('api-youtube');

				$video_output .= '<iframe src="https://www.youtube.com/embed/'.$stream_video_id.'?rel=0&amp;wmode=transparent&amp;enablejsapi=1&amp;controls=0&amp;showinfo=0&amp;loop='.$video_loop.'&amp;playlist='.$stream_video_id.'"></iframe>';

		    } else if ($stream_host_website == 'vimeo'){

			    wp_enqueue_script('api-vimeo');
				$video_output .= '<iframe src="//player.vimeo.com/video/'.$stream_video_id.'?badge=0;api=1;loop='.$video_loop.'" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

			}

			$video_output .= '</div>';

		}else{

			$video_output .= '<video poster="'.$poster_image.'" muted="muted" preload="auto" loop="true" autoplay="true">';
			if (!empty($mp4)) { $video_output .= '<source type="video/mp4" src="'.$mp4.'" />'; }
			if (!empty($webm)) { $video_output .= '<source type="video/webm" src="'.$webm.'" />'; }
			if (!empty($ogv)) { $video_output .= '<source type="video/ogg" src="'.$ogv.'" />'; }
			$video_output .= '</video>';
			//$video_output .= '</div>';

		}

		$video_output .= '</div>';
	}


		if ($parallax_direction == 'both_axis_mouse' ) {
			$backgroud_image_alter = '<div class="mk-mouse-parallax parallax-both-axis parallax-layer '.$attachment.'-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'"></div>';
			$backgroud_image = '';

		} else if($parallax_direction == 'vertical_mouse'){
			$backgroud_image_alter = '<div class="mk-mouse-parallax parallax-y-axis parallax-layer '.$attachment.'-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'"></div>';
			$backgroud_image = '';

		} else if($parallax_direction == 'horizontal_mouse') {
			$backgroud_image_alter = '<div class="mk-mouse-parallax parallax-x-axis parallax-layer '.$attachment.'-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'"></div>';
			$backgroud_image = '';

		} else if($parallax_direction == 'vertical') {

			$parallax_scroll = ($parallax == 'true') ? ' data-center="background-position: 50% 0px;" data-bottom-top="background-position: 50% 200px;" data-top-bottom="background-position: 50% -200px;"' : '';
			$backgroud_image_alter = '<div class="'.$attachment.'-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'" '.$parallax_scroll.' css-attach="'.$data_attachement.'" data-attach="scroll"></div>';
			$backgroud_image = '';

		} else if($parallax_direction == 'horizontal') {

			$parallax_scroll = ($parallax == 'true') ? 'data-bottom-top="background-position: 0px 50%" data-top-bottom="background-position: 3000px 50%;"' : '';
			$backgroud_image_alter = '<div class="'.$attachment.'-layer '.$bg_stretch_class.'" style="'.$backgroud_image.'" '.$parallax_scroll.'  data-attach="'.$data_attachement.'"></div>';
			$backgroud_image = '';
		} 
	} else {
			$backgroud_image = '';
	}
// }



$padding = ( $full_height == 'true' && $expandable == 'false') ? 0 : $padding;

$full_height = ($expandable == 'false') ? $full_height : 'false';

$page_section_id = !empty( $section_id ) ? ( ' id="'.$section_id.'"' ) : '';

$border_css = ( empty( $bg_image ) && !empty( $border_color ) ) ? 'border:1px solid '.$border_color.';border-left:none;border-right:none;' : '';
$output .= '<div class="clearboth"></div></div></div></div>';

/* Fixes page section for blog single page */
if(is_singular('post')) {
	$output .= '</div>';
}



if($intro_effect != 'false' && $intro_effect != '') {
    $page_intro_class = 'intro-true ';
    wp_dequeue_script('SmoothScroll');
    $parallax = 'false';
}

$video_color_mask_css = '';

if (!empty($video_color_mask)) { 
    $video_color_mask_css = ' style="background-color:' . $video_color_mask . ';opacity:' . $video_opacity . ';"';
}


if($full_height == 'false' && $vertical_centered == 'true'){
	$el_class .= ' vertical-centered ';
}
$data_config = (is_array($data_config)) ? implode(' ', $data_config) : '';
$output .= '<div'.$page_section_id.' '. $data_config .'  data-intro-effect="' . $intro_effect . '" class="page-section-'.$id.' ' . $page_intro_class . ' expandable-'.$expandable.' fullwidth-'.$full_width.' section-expandable-'.$expandable.' full-height-'.$full_height.' '.$bg_stretch_class.' mk-video-holder mk-page-section parallax-'.$parallax.' '.$visibility.' '.$el_class.'" data-direction="'.$parallax_direction.'">';
if($has_top_shape_divider == 'true') {
	//($id, $style, $shape_size, $shape_color, $shape_bg_color, $shape_el_class, $shape_pos
	$output .= shape_divider_provider($top_shape_style, $top_shape_size, $top_shape_color, $top_shape_bg_color, $top_shape_el_class, 'top');
}

$bg_layer  = '<div class="bg-layer clip">';
$bg_layer .= '<div '. $video_color_mask_css .' class="mk-video-color-mask"></div>';
$bg_layer .= $video_output;
$bg_layer .= $backgroud_image_alter;
$bg_layer .= '</div>';
$output .= $bg_layer;


if ( $mask == 'true' && $layout_structure == 'full') {
	$output .= '<div class="mk-section-mask"></div>';
}
if ( !empty( $color_mask ) ) {
	$color_mask_css = ' style="background-color:'.$color_mask.';opacity:'.$mask_opacity.';"';
	$output .= '<div'.$color_mask_css.' class="mk-section-color-mask"></div>';
}


$output .= ($full_height == 'true' && $expandable == 'false') ? '<div class="mk-page-section-loader edge-slider-loading"><div class="mk-preloader"><div class="mk-loader"></div></div></div>' : '';


if($expandable == 'true') {
	$output .= '<div class="expandable-section-trigger"><div class="mk-expandable-wrapper"><div class="vc_col-sm-12  wpb_column column_container ">';

	$output .= (!empty($expandable_txt)) ? '<div class="mk-grid"><span class="align-'.$expandable_txt_align.'" style="color:'.$expandable_txt_color.';font-size:'.$expandable_txt_size.'px">'.$expandable_txt.'</span></div>' : '';
	if(empty($expandable_image)) {
		$output .= '<i style="color:'.$expandable_txt_color.';font-size:'.$expandable_icon_size.'px;margin-top:-'.($expandable_icon_size/2).'px;margin-left:-'.($expandable_icon_size/2).'px" class="'.$expandable_icon.'"></i>';
	} else {
		$output .= '<img title="'.get_the_title().'" title="'.get_the_title().'" class="expandable-section-image" src="'.$expandable_image.'">';
	}


	$output .= '</div></div></div>';
}



/* Content container */
if($layout_structure == 'full') {
	if ( $full_width == 'true' ) {
		$output .= '<div class="page-section-fullwidth vc_row-fluid page-section-content expandable-'.$expandable.'"><div class="mk-padding-wrapper">'.wpb_js_remove_wpautop( $content ).'</div><div class="clearboth"></div></div>';
	} else {
		$output .= '<div class="mk-grid vc_row-fluid page-section-content expandable-'.$expandable.'"><div class="mk-padding-wrapper">'.wpb_js_remove_wpautop( $content ).'</div><div class="clearboth"></div></div>';
	}
} else {
	$output .= '<div class="mk-half-layout '.$layout_structure.'_layout" style="background-image:url('.$bg_image.');">';
	$output .= $video_output;
	$output .= '</div>';

	$output .= '<div class="mk-half-layout-container page-section-content expandable-'.$expandable.' '.$layout_structure.'_layout">'.wpb_js_remove_wpautop( $content ).'</div><div class="clearboth"></div>';
}
$output .= '<div class="clearboth"></div>';

if($has_bottom_shape_divider == 'true') {
	$output .= shape_divider_provider($bottom_shape_style, $bottom_shape_size, $bottom_shape_color, $bottom_shape_bg_color, $bottom_shape_el_class, 'bottom');
}

$output .= '</div>';
$padding_top = $padding_bottom = $padding;
if($has_top_shape_divider == 'true'){

	if($top_shape_size == 'big'){
		$padding_top = $padding + 110;
	}else{
		$padding_top = $padding + 50;
	}
	
	Mk_Static_Files::addCSS('
		.page-section-'.$id.' .page-section-content.expandable-false,
		.page-section-'.$id.'.expandable-true {
		    padding-top:'.$padding_top.'px !important;	
		}
	', $id);
}
if($has_bottom_shape_divider == 'true'){

	if($top_shape_size == 'big'){
		$padding_bottom = $padding + 110;
	}else{
		$padding_bottom = $padding + 50;
	}
	Mk_Static_Files::addCSS('
		.page-section-'.$id.' .page-section-content.expandable-false,
		.page-section-'.$id.'.expandable-true {
		    padding-bottom:'.$padding_bottom.'px !important;	
		}
	', $id);
}




if( $attachment == 'fixed' ) { 
	Mk_Static_Files::addCSS('
		.page-section-'.$id.' .fixed-layer
			{
			    '.( $bg_color ? ( 'background-color:'.$bg_color.';' ) : '' ).'
			    background-position:'.$bg_position.';
			    background-repeat:'.$bg_repeat.';
			}
	', $id);
	
} else {
	Mk_Static_Files::addCSS('
		.page-section-'.$id.'
		{
		    '. $backgroud_image.'
		    '.( $bg_color ? ( 'background-color:'.$bg_color.';' ) : '' ).'
		    background-position:'.$bg_position.';
		    background-repeat:'.$bg_repeat.';
		}
	', $id);
}


Mk_Static_Files::addCSS('
	.page-section-'.$id.'
	{
	    '. $backgroud_image.'
	    background-attachment:'.$attachment.';
	    '.( $bg_color ? ( 'background-color:'.$bg_color.';' ) : '' ).'
	    background-position:'.$bg_position.';
	    background-repeat:'.$bg_repeat.';
	    '.$border_css.'
	    min-height:'.$min_height.'px;
	}
	.page-section-'.$id.' .bg-layer .scroll-layer{
		background-attachment:'.$attachment.';
	    background-position:'.$bg_position.';
	    background-repeat:'.$bg_repeat.';
	}

	.page-section-'.$id.' .page-section-content.expandable-false,
	.page-section-'.$id.'.expandable-true {
	    padding:'.$padding.'px 0;	
	}
	.page-section-'.$id.' .alt-title span
	{
		'.( $bg_color ? ( 'background-color:'.$bg_color.';' ) : '' ).'
	}
	.page-section-'.$id. '.section-expandable-true:not(.active-toggle):hover .mk-section-color-mask {
			opacity:'.($mask_opacity + 0.2).' !important;
	}
', $id);


if(!$expandable_txt == 'true'){
	Mk_Static_Files::addCSS('
		.page-section-'.$id. ' .expandable-section-trigger i {
				'.( empty($expandable_txt) ? ( 'opacity:1;' ) : '' ).'
				top:0 !important;
			}
	', $id);
}
/**************************/


$layout = get_post_meta( $post->ID, '_layout', true );
$output .= '<div class="mk-main-wrapper-holder"><div class="theme-page-wrapper '.$layout.'-layout mk-grid vc_row-fluid no-padding">';
$output .= '<div class="theme-content no-padding">';

/* Fixes page section for blog single post */
if(is_singular('post')) {
	$output .= '<div class="single-content">';
}

echo $output;


if($bg_gradient != 'false') {

    $el = '.page-section-'.$id.' .mk-video-color-mask';
    $vertical = $horizontal = $left_top = $left_bottom = $radial = '';
    $gr_start = $video_color_mask;

    $gr_start = is_gradient_stop_transparent($gr_start) ? 'transparent' : $gr_start;
    $gr_end   = is_gradient_stop_transparent($gr_end)   ? 'transparent' : $gr_end;
    
    if($bg_gradient == 'vertical')
        $vertical = "
            background: ".$gr_start."; /* Old browsers */
            background: -moz-linear-gradient(top,  ".$gr_start." 0%, ".$gr_end." 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,".$gr_start."), color-stop(100%,".$gr_end.")); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top,  ".$gr_start." 0%,".$gr_end." 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top,  ".$gr_start." 0%,".$gr_end." 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top,  ".$gr_start." 0%,".$gr_end." 100%); /* IE10+ */
            background: linear-gradient(to bottom,  ".$gr_start." 0%,".$gr_end." 100%); /* W3C */
        ";

    if($bg_gradient == 'horizontal')
        $horizontal = "
            background: ".$gr_start."; /* Old browsers */
            background: -moz-linear-gradient(left,  ".$gr_start." 0%, ".$gr_end." 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, right top, color-stop(0%,".$gr_start."), color-stop(100%,".$gr_end.")); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(left,  ".$gr_start." 0%,".$gr_end." 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(left,  ".$gr_start." 0%,".$gr_end." 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(left,  ".$gr_start." 0%,".$gr_end." 100%); /* IE10+ */
            background: linear-gradient(to right,  ".$gr_start." 0%,".$gr_end." 100%); /* W3C */
        ";

    if($bg_gradient == 'left_top')
        $left_top = "
            background: ".$gr_start."; /* Old browsers */
            background: -moz-linear-gradient(-45deg,  ".$gr_start." 0%, ".$gr_end." 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,".$gr_start."), color-stop(100%,".$gr_end.")); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(-45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(-45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(-45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* IE10+ */
            background: linear-gradient(135deg,  ".$gr_start." 0%,".$gr_end." 100%); /* W3C */
        ";

    if($bg_gradient == 'left_bottom')
        $left_bottom = "
            background: ".$gr_start."; /* Old browsers */
            background: -moz-linear-gradient(45deg,  ".$gr_start." 0%, ".$gr_end." 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,".$gr_start."), color-stop(100%,".$gr_end.")); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* IE10+ */
            background: linear-gradient(45deg,  ".$gr_start." 0%,".$gr_end." 100%); /* W3C */
        ";

    if($bg_gradient == 'radial')
        $radial = "
            background: ".$gr_start."; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover,  ".$gr_start." 0%, ".$gr_end." 100%); /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,".$gr_start."), color-stop(100%,".$gr_end.")); /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover,  ".$gr_start." 0%,".$gr_end." 100%); /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover,  ".$gr_start." 0%,".$gr_end." 100%); /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover,  ".$gr_start." 0%,".$gr_end." 100%); /* IE10+ */
            background: radial-gradient(ellipse at center,  ".$gr_start." 0%,".$gr_end." 100%); /* W3C */
        ";

    Mk_Static_Files::addCSS($el .'{'
        .$vertical
        .$horizontal
        .$left_top
        .$left_bottom
        .$radial
    .'}', $id);
}




	if($color_transition == 'true' && count($colors_array) > 1){

		$css_animation = $css_animation_compatible ='';

		if(count($colors_array) == 2){
			$css_animation = '
				0%   { background-color: '.$colors_array[0].'; }
				50%  { background-color: '.$colors_array[1].'; }';
		}
		if(count($colors_array) == 3){
			$css_animation = '
				0%   { background-color: '.$colors_array[0].'; }
				33%  { background-color: '.$colors_array[1].'; }
				66%  { background-color: '.$colors_array[2].'; }';
		}
		if(count($colors_array) == 4){
			$css_animation = '
				0%   { background-color: '.$colors_array[0].'; }
				25%  { background-color: '.$colors_array[1].'; }
				50%  { background-color: '.$colors_array[2].'; }
				75%  { background-color: '.$colors_array[3].'; }';
		}
		if(count($colors_array) == 5){
			$css_animation = '
				0%   { background-color: '.$colors_array[0].'; }
				20%  { background-color: '.$colors_array[1].'; }
				40%  { background-color: '.$colors_array[2].'; }
				60%  { background-color: '.$colors_array[3].'; }
				80%  { background-color: '.$colors_array[4].'; }';
		}
		
		$css_animation_compatible  = '@keyframes mk_color_transition-'.$id.' {' . $css_animation . '}';
		$css_animation_compatible .= '@-moz-keyframes mk_color_transition-'.$id.' {' . $css_animation . '}';
		$css_animation_compatible .= '@-webkit-keyframes mk_color_transition-'.$id.' {' . $css_animation . '}';
		$css_animation_compatible .= '@-o-keyframes mk_color_transition-'.$id.' {' . $css_animation . '}';
		$css_animation_compatible .= '@-ms-keyframes mk_color_transition-'.$id.' {' . $css_animation . '}';

		$color_transition_interval = $color_transition_interval * count($colors_array);
		Mk_Static_Files::addCSS($css_animation_compatible,$id);
		Mk_Static_Files::addCSS('
			.page-section-'.$id.'.color-transition-true{
				animation: mk_color_transition-'.$id.' '.$color_transition_interval.'s ease-out infinite alternate none running ;
				-ms-animation: mk_color_transition-'.$id.' '.$color_transition_interval.'s ease-out infinite alternate none running ;
				-o-animation: mk_color_transition-'.$id.' '.$color_transition_interval.'s ease-out infinite alternate none running ;
				-moz-animation: mk_color_transition-'.$id.' '.$color_transition_interval.'s ease-out infinite alternate none running ;
				-webkit-animation: mk_color_transition-'.$id.' '.$color_transition_interval.'s ease-out infinite alternate none running ;
			}',$id);

	}//count($colors_array) > 1
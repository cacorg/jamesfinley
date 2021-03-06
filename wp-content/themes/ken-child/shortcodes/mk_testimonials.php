<?php

extract(shortcode_atts(array(
    'style' => 'boxed',
    'count' => 4,
    'orderby' => 'date',
    'testimonials' => '',
    'order' => 'DESC',
    'skin' => 'dark',
    "el_class" => '',
    'font_family' => '',
    'font_size' => '14', // quote text size
    'font_color' => '',  // quote text color
    'author_font_size' => '12',
    'author_font_color' => '',
    'company_font_size' => '12',
    'company_font_color' => '',
    'font_type' => '',
    'animation' => '',
    'animation_effect' => 'slide',
    'visibility' => ''
), $atts));

$id = Mk_Static_Files::shortcode_id();

require_once THEME_INCLUDES . "/image-cropping.php";    

$animation_css = ($animation != '') ? (' mk-animate-element ' . $animation . ' ') : '';

$output = $final_output = $color = '';

$query = array(
    'post_type' => 'testimonial',
    'showposts' => $count
);


if ($testimonials) {
    $query['post__in'] = explode(',', $testimonials);
}

if ($orderby) {
    $query['orderby'] = $orderby;
}

if ($order) {
    $query['order'] = $order;
}

$loop = new WP_Query($query);


while ($loop->have_posts()):
    $loop->the_post();
    $url     = get_post_meta(get_the_ID(), '_url', true);
    $company = get_post_meta(get_the_ID(), '_company', true);
    
    if ($style == 'boxed' || $style == 'modern') {
        $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
        $image_src       = bfi_thumb($image_src_array[0], array(
            'width' => 70,
            'height' => 70,
            'crop' => true
        ));
        $output .= '<div class="swiper-slide">';
        $output .= '<div class="testimonial-content">';
        $output .= '<div class="testimonial-quote">' . get_post_meta(get_the_ID(), '_desc', true);
        $output .= '<img class="testimonial-image" width="70" height="70" src="' . mk_thumbnail_image_gen($image_src, 70, 70) . '" alt="' . strip_tags(get_post_meta(get_the_ID(), '_author', true)) . '" />';
        $output .= '</div>';
        $output .= ($style == 'modern') ? '<span class="testimonial-author" style="color:'.$font_color.'">'. strip_tags(get_post_meta(get_the_ID(), '_author', true)) . '</span>' : '<span class="testimonial-author">' . strip_tags(get_post_meta(get_the_ID(), '_author', true)) . '</span>';
        $output .= !empty($company) ? ('<a target="_blank" ' . (!empty($url) ? ('href="' . $url . '"') : '') . ' class="testimonial-company">' . strip_tags($company) . '</a>') : '';
        $output .= '</div>';
        $output .= '</div>';
    } else {
        
        $output .= '<div class="swiper-slide">';
        $output .= '<div class="testimonial-quote">' . get_post_meta(get_the_ID(), '_desc', true) . '</div>';
        $output .= '<div class="testimonial-footer-note">';
        $output .= '<span class="testimonial-author">' . strip_tags(get_post_meta(get_the_ID(), '_author', true)) . '</span>';
        $output .= !empty($company) ? ('<a target="_blank" ' . (!empty($url) ? ('href="' . $url . '"') : '') . ' class="testimonial-company">' . strip_tags($company) . '</a>') : '';
        $output .= '</div>';
        $output .= '</div>';
        
    }
endwhile;

wp_reset_query();

$final_output .= '<div id="testimonial-'.$id.'" class="mk-testimonial ' . $skin . '-skin ' . $style . '-style ' . $animation_css . ' ' . $el_class . ' '.$visibility.'"><div id="mk-swiper-' . $id . '" data-loop="true" data-freeModeFluid="true" data-slidesPerView="1" data-pagination="true" data-freeMode="false" data-mousewheelControl="false" data-direction="horizontal" data-slideshowSpeed="8000" data-animationSpeed="500" data-animation="'.$animation_effect.'" data-directionNav="true" class="mk-swiper-container mk-swiper-slider">';
$final_output .= '<div class="swiper-pagination"></div>';
$final_output .= '<div class="mk-swiper-wrapper">' . $output . '</div>';

$final_output .= '</div></div>';

echo $final_output;


$final_output .= mk_get_fontfamily("#testimonial-", $id . ' .testimonial-quote', $font_family, $font_type);


if ( $style == 'modern' ) {
    Mk_Static_Files::addCSS("
        #testimonial-{$id} .swiper-pagination .swiper-pagination-switch {
            border-color:{$font_color} !important;
        }
        #testimonial-{$id} .swiper-pagination .swiper-active-switch {
            border-color:{$font_color} !important;
            background-color:{$font_color} !important;
        }
    ",$id);
}
$author_font_color = !empty($author_font_color) ? ("color:{$author_font_color}") : '';
$company_font_color = !empty($company_font_color) ? ("color:{$company_font_color}") : '';
Mk_Static_Files::addCSS("
    #testimonial-{$id} .testimonial-quote {
        font-size:{$font_size}px;
        color:{$font_color};
    }
    #testimonial-{$id} .testimonial-author {
        font-size:{$author_font_size}px;
        {$author_font_color};
    }
    #testimonial-{$id} .testimonial-company {
        font-size:{$company_font_size}px;
        {$company_font_color};
    }
",$id);
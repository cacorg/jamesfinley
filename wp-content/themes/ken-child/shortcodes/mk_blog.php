<?php

extract(shortcode_atts(array(
    'style' => 'classic',
    'column' => 3,
    'disable_meta' => 'true',
    'image_height' => 350,
    'image_width' => 220, // Scroller Style Only
    'count' => 10,
    'offset' => 0,
    'cat' => '',
    'posts' => '',
    'author' => '',
    'pagination' => 'true',
    'pagination_style' => 1,
    'orderby' => 'date',
    'order' => 'DESC',
    'grid_avatar' => 'true',
    'read_more' => 'false',
    'sortable' => 'false',
    'classic_excerpt' => 'excerpt',
    'magazine_strcutre' => 1,
    'excerpt_length' => 200,
    'cropping' => 'true',
    'slideshow_layout' => 'default',
    'author' => 'true',
    'item_id' => '',
    'el_class' => '',
    'visibility' => ''

), $atts));

require_once THEME_INCLUDES . "/image-cropping.php";    

global $mk_settings;
$query = array(
    'posts_per_page' => (int) $count,
    'post_type' => 'post',
    'suppress_filters' => 0
);

if ($cat) {
    $query['cat'] = $cat;
}
if ($author) {
    $query['author'] = $author;
}
if ($posts) {
    $query['post__in'] = explode(',', $posts);
}
if ($orderby) {
    $query['orderby'] = $orderby;
}
if ($order) {
    $query['order'] = $order;
}

$id = Mk_Static_Files::shortcode_id();

$item_id = (!empty($item_id)) ? $item_id : 1409305847;

$paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

if ($offset && $pagination_style != 2) {
    $query['offset'] = $offset;
}

$query['paged'] = $paged;

$r = new WP_Query($query);


if (is_page()) {
    global $post;
    $layout = get_post_meta($post->ID, '_layout', true);
} else {

    if (is_archive()) {
        $layout = $mk_settings['archive-layout'];
    } else {
        $layout = 'right';
    }


}



$grid_width    = $mk_settings['grid-width'];
$content_width = $mk_settings['content-width'];

$atts   = array(
    'layout' => $layout,
    'column' => $column,
    'image_height' => $image_height,
    'disable_meta' => $disable_meta,
    'classic_excerpt' => $classic_excerpt,
    'grid_avatar' => $grid_avatar,
    'read_more' => $read_more,
    'grid_width' => $grid_width,
    'content_width' => $content_width,
    'image_width' => $image_width,
    'excerpt_length' => $excerpt_length,
    'cropping' => $cropping,
    'slideshow_layout' => $slideshow_layout,
    'author' => $author,
    'item_id' => $item_id
);
$output = '';



if ($style != 'scroller' && $style != 'slideshow') {
    wp_enqueue_script('jquery-isotope');
    wp_enqueue_script('jquery-jplayer');
}

if ($pagination_style == '2') {
    $paginaton_style_class = 'load-button-style';
    wp_enqueue_script('infinitescroll');
} else if ($pagination_style == '3') {
    $paginaton_style_class = 'scroll-load-style';
    wp_enqueue_script('infinitescroll');
} else {
    $paginaton_style_class = 'page-nav-style';
}


if ($sortable == 'true' && !is_archive() && $style != 'scroller' && $style != 'slideshow') {
    $output .= '<header class="mk-isotop-filter"><ul>';

    $categories_args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'include' => $cat
    );

    $categories = get_categories($categories_args);
    $output .= '<li><a class="current" data-filter="*" href="#">' . __('All', 'mk_framework') . '</a></li>';
    foreach ($categories as $category) {
        $output .= '<li><a data-filter=".category-' . $category->slug . '" href="#">' . $category->name . '</a></li>';
    }

    $output .= '<div class="clearboth"></div></ul>';
    $output .= '<div class="clearboth"></div></header>';
}

$isotope_el_class = ($style != 'scroller' && $style != 'magazine' && $style != 'slideshow') ? 'isotop-enabled mk-theme-loop ' : '';

if ($style == 'scroller' || $style == 'slideshow') {

	$slidesPerView = ($style == 'scroller') ? 'auto' : 1;
    $scroller_atts = array(
        'mk-swiper-container mk-swiper-slider ',
        'data-loop="false" data-freeModeFluid="true" data-slidesPerView="'.$slidesPerView.'" data-pagination="false" data-freeMode="false" data-mousewheelControl="false" data-direction="horizontal" data-slideshowSpeed="6000" data-animationSpeed="500" data-directionNav="true"'
    );
} else {
    $scroller_atts = array(
        '',
        ''
    );
}

switch ($magazine_strcutre) {
	case 1:
		$magazine_style_class = 'mag-one-column';
		break;
	case 2:
		$magazine_style_class = 'mag-two-column-left';
		break;
	case 3:
		$magazine_style_class = 'mag-two-column-right';
		break;

	default:
		$magazine_style_class = 'mag-one-column';
		break;
}



$output .= '<div class="loop-main-wrapper"><section id="mk-blog-loop-' . $id . '" data-style="' . $style . '" data-uniqid="'.$item_id.'" class="mk-blog-container mk-' . $style . '-wrapper '.$magazine_style_class.' ' . $scroller_atts[0] . $isotope_el_class . $paginaton_style_class . ' '.$el_class.' '.$visibility.'" ' . $scroller_atts[1] . ' '.get_schema_markup('blog').'>' . "\n";

if ($style == 'scroller' || $style == 'slideshow') {
    $output .= '<div class="mk-swiper-wrapper">';
}

$i = 0;
$nCount = 0;
if (is_archive()):
    if (have_posts()):
        while (have_posts()):
            the_post();
            $i++;
            switch ($style) {

                case 'classic':
                    $output .= blog_classic_style_custom($atts, $nCount++);
                    break;
                case 'masonry':
                    $output .= blog_masonry_style($atts);
                    break;
                case 'modern':
                    $output .= blog_modern_style($atts);
                    break;
                case 'list':
                    $output .= blog_list_style($atts);
                    break;
                case 'thumb':
                    $output .= blog_thumb_style($atts);
                    break;
                case 'scroller':
                    $output .= blog_scroller_style($atts);
                    break;
                case 'magazine':
                    $output .= blog_magazine_style($atts, $i);
                    break;
                case 'tile':
                    $output .= blog_tile_style($atts, $i);
                    break;
				case 'slideshow':
                    $output .= blog_slideshow_style($atts);
                    break;
                default:
                    $output .= blog_classic_style_custom($atts);
            }
        endwhile;
    endif;
else:
    if ($r->have_posts()):
        while ($r->have_posts()):
            $r->the_post();
            $i++;
            switch ($style) {

                case 'classic':
                    $output .= blog_classic_style_custom($atts, $nCount++);
                    break;
                case 'modern':
                    $output .= blog_modern_style($atts);
                    break;
                case 'masonry':
                    $output .= blog_masonry_style($atts);
                    break;
                case 'list':
                    $output .= blog_list_style($atts);
                    break;
                case 'thumb':
                    $output .= blog_thumb_style($atts);
                    break;
                case 'scroller':
                    $output .= blog_scroller_style($atts);
                    break;
                case 'magazine':
                    $output .= blog_magazine_style($atts, $i);
                    break;
                case 'tile':
                    $output .= blog_tile_style($atts, $i);
                    break;
				case 'slideshow':
                    $output .= blog_slideshow_style($atts);
                    break;
                default:
                    $output .= blog_classic_style_custom($atts);
            }
        endwhile;
    endif;
endif;

if ($style == 'scroller' || $style == 'slideshow') {
    $output .= '</div>';
}

if ($style == 'scroller' || $style == 'slideshow') {
    $output .= '<a class="mk-swiper-prev blog-scroller-arrows"><i class="mk-theme-icon-prev-big"></i></a>';
    $output .= '<a class="mk-swiper-next blog-scroller-arrows"><i class="mk-theme-icon-next-big"></i></a>';
}

$output .= '</section><div class="clearboth"></div>';


if ($pagination == 'true' && $style != 'scroller' && $style != 'magazine'  && $style != 'slideshow') {
    $output .= '<a class="mk-loadmore-button" style="display:none;" href="#"><i class="mk-icon-circle-o-notch"></i><i class="mk-icon-chevron-down"></i></a>';
    ob_start();
    mk_theme_blog_pagenavi('', '', $r, $paged);
    $output .= ob_get_clean();
}
$output .= '</div>';
wp_reset_postdata();
echo $output;



function blog_classic_style_custom($atts, $nCount)
{
    global $post;
    extract($atts);

    $output = $item_cat = '';

    if ($layout == 'full') {
        $image_width = $grid_width - 40;
    } else {
        $image_width = (($content_width / 100) * $grid_width) - 40;
    }

    $categories = get_the_category();

    foreach ($categories as $category) {
        $item_cat .= 'category-' . $category->slug . ' ';
    }


    $post_type = (get_post_format(get_the_id()) == '0' || get_post_format(get_the_id()) == '') ? 'image' : get_post_format(get_the_id());

	$sPull = ($nCount%2 > 0 ? ' vc_pull-right' : '');

    $output .= '<article id="entry-' . get_the_ID() . '" class="mk-grid blog-classic-entry classic-'.$item_id.' mk-isotop-item ' . $item_cat . '">';

    switch ($post_type) {



        /* Image Post Type */
        case 'image':
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            if($cropping == 'true') {
                $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $image_width,
                'height' => $image_height,
                'crop' => true
                ));
            } else {
                $image_src = $image_src_array[0];
            }
            if (has_post_thumbnail()) {
                $output .= '<div class="featured-image" onClick="return true">';
                $output .= '<img alt="' . get_the_title() . '" width="' . $image_width . '" class="item-featured-image" height="' . $image_height . '" title="' . get_the_title() . '" src="' . mk_thumbnail_image_gen($image_src, $image_width, $image_height) . '" itemprop="image" />';
                $output .= '<div class="hover-overlay"></div>';
                $output .= '<a title="' . get_the_title() . '" href="' . get_permalink() . '"><i class="mk-theme-icon-next-big hover-plus-icon"></i></a>';
                $output .= '</div>';
            }
            break;
        /***********/

        case 'aside':
            /* There is nothing to output */
            break;

        /* Gallery Post Type */
        case 'gallery':
            $attachment_ids = get_post_meta(get_the_id(), '_gallery_images', true);
            $output .= '<div class="blog-gallery-type">';
            $output .= do_shortcode('[mk_image_slideshow images="' . $attachment_ids . '" direction="horizontal" margin_bottom="0" image_width="' . $image_width . '" image_height="' . $image_height . '" effect="slide" animation_speed="700" slideshow_speed="7000" pause_on_hover="false" direction_nav="true"]');
            $output .= '<div class="clearboth"></div></div>';

            break;
        /***********/

        /* Video Post Type */
        case 'video':

            $link = get_post_meta($post->ID, '_video_url', true);

            if ($link) {
                global $wp_embed;
                $output .= '<div class="vc_col-sm-4 mk-video-wrapper ' . $sPull . '"><div class="mk-video-container">' . $wp_embed->run_shortcode('[embed]' . $link . '[/embed]') . '</div></div>';
            }
            break;
        /***********/


        /* Audio Post Type */
        case 'audio':
            wp_enqueue_script('jquery-jplayer');
            $audio_id = mt_rand(99, 999);
            $mp3_file = get_post_meta($post->ID, '_mp3_file', true);
            $ogg_file = get_post_meta($post->ID, '_ogg_file', true);
            $iframe   = get_post_meta($post->ID, '_audio_iframe', true);


            if (empty($iframe)) {
                $output .= '<div class="mk-audio">
				        <div id="jquery_jplayer_' . $audio_id . '" data-mp3="' . $mp3_file . '" data-ogg="' . $ogg_file . '" class="jp-jplayer mk-blog-audio"></div>
				        <div id="jp_container_' . $audio_id . '" class="jp-audio">
				            <div class="jp-type-single">
				                    <div class="jp-gui jp-interface">
				                        <ul class="jp-controls">
				                            <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="mk-theme-icon-next-big"></i></a></li>
				                            <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="mk-icon-pause"></i></a></li>
				                        </ul>
				                        <div class="jp-progress">
				                            <div class="jp-seek-bar">
				                                <div class="jp-play-bar"></div>
				                            </div>
				                        </div>
				                        <div class="js-volume-wrapper">
				                        <div class="jp-volume-bar">
				                            <div class="inner-value-adjust"><div class="jp-volume-bar-value"></div></div>
				                        </div>
				                        </div>
				                       <div class="clearboth"></div>
				                    </div>
				                </div>
            		</div></div>';
            } else {
                $output .= '<div class="audio-iframe">' . $iframe . '</div>';
            }

            break;
        default:
            $image_src_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full', true);
            if($cropping == 'true') {
                $image_src = bfi_thumb($image_src_array[0], array(
                'width' => $image_width,
                'height' => $image_height,
                'crop' => true
                ));
            } else {
                $image_src = $image_src_array[0];
            }
            if (has_post_thumbnail()) {
                $output .= '<div class="featured-image"><a title="' . get_the_title() . '" href="' . get_permalink() . '">';
                $output .= '<img alt="' . get_the_title() . '" title="' . get_the_title() . '" class="item-featured-image" width="' . $image_width . '" height="' . $image_height . '" src="' . $image_src . '" itemprop="image" />';
                $output .= '<div class="hover-overlay"></div>';
                $output .= '<i class="mk-theme-icon-plus hover-plus-icon"></i>';
                $output .= '</a></div>';
            }
            break;

    }

    /* Blog Heading */
    $output .= '<div class="vc_col-sm-8"><div class="blog-entry-heading">';
    $output .= '<h3 class="blog-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

    ob_start();
    /*
    comments_number(__('0', 'mk_framework'), __('1', 'mk_framework'), __('%', 'mk_framework'));
    $output .= '<a href="' . get_permalink() . '#comments" class="blog-comments"><i class="mk-icon-comment"></i>' . ob_get_clean() . '</a>';

    if (function_exists('mk_love_this')) {
        ob_start();
        mk_love_this();
        $output .= '<div class="mk-love-holder">' . ob_get_clean() . '</div>';
    }
	*/
    $output .= '</div>';
    /***********/




    /* Blog Meta */
    if ($disable_meta != 'false') {
        $output .= '<div class="blog-meta">';
        $output .= '<time datetime="' . get_the_date() . '" itemprop="datePublished" pubdate>';
        $output .= '<a href="' . get_month_link(get_the_time("Y"), get_the_time("m")) . '">' . get_the_date() . '</a>';
        $output .= '</time>';
        $output .= '<div class="blog-categories">' . get_the_category_list(', ') . '</div>';
        $output .= '<div class="clearboth"></div></div>';
    }
    /***********/




    if ($classic_excerpt == 'excerpt') {
        if($excerpt_length != 0) {
            ob_start();
            mk_excerpt_max_charlength($excerpt_length);
            $output .= '<div class="blog-excerpt">' . ob_get_clean() . '</div>';
        }

    } else {
        $content = str_replace(']]>', ']]&gt;', apply_filters('the_content', get_the_content()));
        $output .= '<div class="blog-excerpt">' . $content . '</div>';
    }


    $output .= '</div></article>';


    return $output;

}

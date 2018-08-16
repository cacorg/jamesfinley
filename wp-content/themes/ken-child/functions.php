<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function CACProdDisplay($atts) {
	extract(shortcode_atts(array(
		"category" => 'books'
	), $atts));

	wp_reset_query();
	$args = array('post_type' => 'portfolio', 'orderby' => 'title', 'order' => 'ASC',
		'tax_query' => array(
			array(
				'taxonomy' => 'portfolio_category',
				'field' => 'slug',
				'terms' => $category,
			),
		),
	);
			// create a new instance of WP_Query
			$the_query = new WP_Query( $args );
			$nCount = 0;
		?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
		<?php $manual = preg_replace('/manually[|][|]/', '', get_post_meta( get_the_ID(), '_portfolio_permalink', true )); ?>
		<article class="single-prod vc_row" id="<?php echo get_the_ID(); ?>">
			<span class="spacer">&#160;</span>
			<?php if($nCount++%2 == 0) { ?>
				<div class="vc_col-sm-3 tablet-center">
					<a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> ><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
				</div>
				<div class="vc_col-sm-9">
					<h2><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> "><?php echo the_title(); ?></a></h2>
					<div class="excerpt">
						<?php the_content(); ?>
						<div class="mk-button-align left"><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> class="mk-button btn-2  flat-button small pointed dark-btn prod-btn"><span>BUY</span></a></div>
					</div>
				</div>
			<?php } else { ?>
				<div class="vc_col-sm-3 pull-right tablet-center">
					<a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> ><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
				</div>
				<div class="vc_col-sm-9">
					<h2><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> "><?php echo the_title(); ?></a></h2>
					<div class="excerpt">
						<?php the_content(); ?>
						<div class="mk-button-align left"><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> class="mk-button btn-2  flat-button small pointed dark-btn prod-btn"><span>BUY</span></a></div>
					</div>
				</div>
			<?php } ?>
				<div class="clearboth"></div>
		</article>
		<?php endwhile; ?>
		<?php endif; ?>
<?php
}
	
add_shortcode('cacprods', 'CACProdDisplay');
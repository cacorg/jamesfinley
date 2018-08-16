<?php
/*
 * Template Name: Books & CDs
 */
get_header(); ?>
<div id="theme-page" class="page-master-holder">
  	<div class="background-img background-img--page"></div>
	<div class="mk-main-wrapper-holder">
		<div class="theme-page-wrapper mk-grid row-fluid">
			<div class="theme-content" itemprop="mainContentOfPage">
				<div class="vc_row wpb_row vc_row-fluid js-master-row mk-fullwidth-true attched-false " id="blog-outer">
					 <div class="mk-grid">
							<div style="" class="vc_col-sm-12 wpb_column column_container " id="blog-inner">
<style>
.single-course {margin-bottom:50px;padding-bottom:50px;border-bottom:1px solid #ddd;}

.prev-next-posts {margin-bottom:25px;}
.mk-button {
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
    margin-right: 10px;
    position: relative;
    text-align: center;
    transform: translateZ(0px);
    transition: color 0.2s ease-in-out 0s, background 0.2s ease-in-out 0s, border 0.2s ease-in-out 0s;
    vertical-align: middle;
    background-color: #444444;
    color: #dddddd;
    margin-bottom: 15px;
}

</style>
							<?php
								// set up or arguments for our custom query
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
								$query_args = array(
									'post_type' => 'portfolio',
									'posts_per_page' => 50,
									'paged' => $paged
								);
								// create a new instance of WP_Query
								$the_query = new WP_Query( $query_args );
								$nCount = 0;
							?>
							<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
							<?php $manual = preg_replace('/manually[|][|]/', '', get_post_meta( get_the_ID(), '_portfolio_permalink', true )); ?>
								<article class="single-course" id="<?php echo $post->ID; ?>"> 
								<?php if($nCount++%2 == 0) { ?>
									<div class="vc_col-sm-5">
										<a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> ><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a>
									</div>
									<div class="vc_col-sm-7">
										<h1><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> "><?php echo the_title(); ?></a></h1>
										<div class="excerpt">
											<?php the_excerpt(); ?>
											<div class="mk-button-align center"><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> class="mk-button btn-2  flat-button small pointed   "><span>BUY</span></a></div>
										</div>
								</div>
								<?php } else { ?>
									<div class="vc_col-sm-7">
										<h1><?php echo the_title(); ?></h1>
										<div class="excerpt">
											<?php the_excerpt(); ?>
											<div class="mk-button-align center"><a href="<?php echo (!empty($manual) ? $manual : get_post_permalink($post->ID)); ?>" <?php echo (!empty($manual) ? 'target="_blank"' : ''); ?> class="mk-button btn-2  flat-button small pointed   "><span>BUY</span></a></div>
										</div>
								</div>
									<div class="vc_col-sm-5 text-right">
										<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
									</div>
								<?php } ?>
									<div class="clearboth"></div>
								</article>
							<?php endwhile; ?>
							<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
								<nav class="prev-next-posts vc_row">
									<div class="prev-posts-link vc_col-xs-6">
										<?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
									</div>
									<div class="next-posts-link_col-xs-6">
										<?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
									</div>
								</nav>
							<?php } ?>
							<?php else: ?>
								<article>
									<h1>Sorry...</h1>
									<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
								</article>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="clearboth"></div>
			</div>
			<div class="clearboth"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
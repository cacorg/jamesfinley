<?php
/*
 * Template Name: Video Blog
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
		
<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 5,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
  $nCount = 0;
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  <article class="vc_row">
  <?php if($nCount++%2 == 0) { ?>
  	<div class="vc_col-sm-5">
  		<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
  	</div>
  	<div class="vc_col-sm-7">
	    <h1><?php echo the_title(); ?></h1>
	    <div class="excerpt">
	      <?php the_excerpt(); ?>
	    </div>
	</div>
  <?php } else { ?>
  	<div class="vc_col-sm-7">
	    <h1><?php echo the_title(); ?></h1>
	    <div class="excerpt">
	      <?php the_excerpt(); ?>
	    </div>
	</div>
  	<div class="vc_col-sm-5 text-right">
  		<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
  	</div>
  <?php } ?>
  </article>
<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
			<?php 
			/* Run the blog loop shortcode to output the posts. */
			if(shortcode_exists('mk_blog')) {
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;
				echo do_shortcode( '[mk_blog order="DESC" orderby="date" style="classic"]' );
			} else {
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				endif;
			}
			 ?>
			<div class="clearboth"></div>
		</div>

	<div class="clearboth"></div>	
	</div>
	</div>
</div>
<?php get_footer(); ?>
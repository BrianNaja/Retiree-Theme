<?php 

/*
Template Name: Search
*/

get_header(); ?>

<!-- Main Row -->
<div class="row">

<div class="eight columns centered">

<!-- Skip Nav -->
<a id="content"></a>

<?php get_search_form( $echo ); ?>


	<!-- Start the Loop -->
	<?php $custom_query = new WP_Query(array('posts_per_page' => 5,
											 'paged' => $paged,
											 'post_type' => array( 'post', 'video'))); ?>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
<article>
		<div>
				
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<?php if ( has_post_thumbnail()) {
  					  echo '<a href="' . get_permalink($post->ID) . '" >';
  						   the_post_thumbnail();
  					  echo '</a>'; } ?> <!--Displays the Featured Image "I removed this because of the video loop"-->
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
		
		</div>
</article>
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
	<!-- Begin Pagination -->
	<?php if (function_exists("emm_paginate")) {
	    emm_paginate();
	} ?>	        	
	<!-- End Pagination -->
	
</div>

<?php get_footer(); ?>
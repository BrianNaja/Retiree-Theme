<?php 

/*
Template Name: Retiree
*/

get_header(); ?>

<div class="row">
	<div class="ten columns centered">
					
  				<?php  $wp_query = new WP_Query (array('post_type' => 'retiree-club',
  													   'paged' => $paged,
  													   'posts_per_page' => 5)); ?>	<!-- Displays The Video Category -->
				
				<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
		<article>

			<!-- Display the Title as a link to the Post's permalink. -->
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
			<p><?php the_time('F jS, Y') ?>  <span class="bullet"> &#8226; </span><?php the_tags('', ', '); ?><!-- by <?php the_author_posts_link() ?>--></p>
			<?php edit_post_link('Edit This Post','<p>', '</p>'); ?>
			
			<!-- Display the Post's Content in a div box. -->
			<div class="entry single">
				
				<!-- <?php the_content(); ?> -->
				<?php the_excerpt(); ?><!-- Displays the Excerpt not the_content -->
				
			</div>
			
			<div class="clear"></div>
			
			<span class="moretext"> <a href="<?php the_permalink() ?>">Read Newsletter</a></span>
	          
		</article>

		
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
	</div>
</div>
	
	<!-- Begin Pagination -->
	<?php if (function_exists("emm_paginate")) {
	    emm_paginate();
	} ?>	        	
	<!-- End Pagination -->
	
</div>
	
		</div>	

	</div>
</div>

<?php get_footer(); ?>
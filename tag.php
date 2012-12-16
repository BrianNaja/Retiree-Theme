
<?php get_header(); ?>

<!-- Main Row -->
<div class="row">

<div class="eight columns centered">

<!-- Skip Nav -->


	<!-- Start the Loop -->
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first div -->
		<article>
				
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
			<p><?php the_time('F jS, Y') ?><!-- by <?php the_author_posts_link() ?>--></p>
			
			<!-- Display the Page's Content in a div box. -->
			<div class="entry">
				<?php    echo the_post_thumbnail('homepage-thumb');
				  		 echo the_excerpt('<span class="moretext">Read More</span>');
				?>
			</div>
			
			<div class="clear"></div>
		
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
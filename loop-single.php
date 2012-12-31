<!-- Main Row -->
<div class="row">

<!-- Change to Ten Columns Centered -->
<div <?php if (is_front_page()) {echo 'class="eight columns"';}
		   else {echo 'class="ten columns centered"';} ?> >

<!-- Skip Nav -->

	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first article -->
		<article class="artical-single">
				
			<!-- Display the Title as a link to the Post's permalink. -->
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
			<p><?php the_time('F jS, Y') ?><!-- by <?php the_author_posts_link() ?>--></p>
			<?php edit_post_link('Edit This Post','<p>', '</p>'); ?>
			
			<!-- Display the Post's Content in a div box. -->
			<div class="entry single">
				
				<p><?php echo the_post_thumbnail('large');
					  echo the_content(); ?></p>
				
			</div>
			
			<div class="clear"></div>
			
			<!-- Display a comma separated list of the Post's Categories. 
			<p class="postmetadata">Posted in <?php the_category(', '); ?></p>-->
			
			<p><?php the_tags('Tagged with: ', ', '); ?></p>
			<p><?php previous_post_link(); ?>  /  <?php next_post_link(); ?></p>
		</article>
		<!-- Closes the first article -->
		
		<!-- Begin Comments -->
	    <?php /*comments_template( '', true ); */?> 
	    <!-- End Comments -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, no posts matched your criteria.</div>
	
	<!--End the loop -->
	<?php endif; ?>
		
</div>
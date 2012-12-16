<?php include('random-images.php') ?>
<div class="row slideshow">
	<div class="eight columns">
		
		<img src="<?php bloginfo('stylesheet_directory'); echo $front_random_image ?>" alt="Boilermaker in a manbasket" />
	</div>
	<div class="four columns">
		<aside class="sticky-aside"><!-- Starts Displays the Custom Post Type For Sticky Post-->
			<?php $first_query = new WP_Query (array('post_type' => 'Sticky-Post', 
		                                   			 'posts_per_page' => 1));  ?>
			<!-- Start the Loop -->
			<?php while($first_query->have_posts()) : $first_query->the_post(); ?>
			
				<article   <?php post_class('class-name'); ?> > <!-- This was added for the Custom Classes Plugin -->
		
					<!-- Display the Post's Content in a div box. -->
					<div class="sticky-post">
						<p><?php the_content(); ?></p><!-- Displays the_content -->
						
					</div>
					
				</article>
			
			<!-- Stop The Loop (but note the "else:" - see next line). -->
			<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			
			<!--End the loop -->
		</aside><!-- Ends Displays the Custom Post Type For Quotes-->
	</div>
</div>		

		
	<!-- Main Row -->
	<div class="row">

<!-- Change to Ten Columns Centered -->
<div <?php if (is_front_page()) {echo 'class="eight columns"';}
			else {echo 'class="ten columns centered"';} ?> >

	<!-- Start the Loop -->	
	<?php $second_query = new WP_Query (array('paged' => $paged,
									     	  'post_type' => array('post', 'video','retiree-club' ))); ?>
	
	<?php while($second_query->have_posts()) : $second_query->the_post(); ?>
	
		<!-- Begin the first article -->
		<article  <?php post_class('class-name'); ?> > <!-- This was added for the Custom Classes Plugin -->
				
			<!-- Display the Title as a link to the Post's permalink. -->
			<h2>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			
			<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
			<p><?php the_time('F jS, Y') ?>  <span class="bullet"> &#8226; </span><?php the_tags('', ', '); ?><!-- by <?php the_author_posts_link() ?>--></p>
			<?php edit_post_link('Edit This Post','<p>', '</p>'); ?>
			
			<!-- Display the Post's Content in a div box. -->
			<div class="entry index-page">
				
				<?php if ( 'video' == get_post_type() ) {
				  echo the_content('[...]');
				} 
				  else { echo '<div class="testimg">'; 
				  			  echo the_post_thumbnail('homepage-thumb');
				  			  echo '</div>'; 
				  			  echo the_excerpt('<span class="moretext">Read More</span>');
				}?>
			</div>
			
			<div class="clear"></div>
			
			<!-- Display a comma separated list of the Post's Categories. 
			<p class="postmetadata">Posted in <?php the_category(', '); ?></p>-->
			
			<span class="moretext"> <a href="<?php the_permalink() ?>">Read More</a></span>
			
	     <!--    <span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?></span>  --> 
		
		</article>
		<hr>
		<!-- Closes the first article -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; ?>
	
	<?php wp_reset_postdata(); ?>
	
	<!--End the loop -->
	
	<!-- Begin Pagination -->
	<?php if (function_exists("emm_paginate")) {
	    emm_paginate();
	} ?>	        	
	<!-- End Pagination -->

</div>
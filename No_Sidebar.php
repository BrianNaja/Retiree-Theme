<?php 

/*
Template Name: No Sidebar
*/

get_header(); ?>

<!-- Main Row -->
<div class="row">

					<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				<!--<h2><?php the_title(); ?></h2>-->
					<!-- Display the Page's Content in a div box. -->
				<div class="entry">
					<?php the_content(); ?>
				</div>
		
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
</div>
	
		</div>	

	</div>
</div>

<?php get_footer(); ?>
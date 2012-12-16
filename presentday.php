<?php 

/*
Template Name: presentday
*/

get_header(); ?>

<!-- Main Row -->
<div class="row">

					
				<?php $wp_query = new WP_Query(array 
											  ('post_type' => 'Present Day Photos',  //Displays the presentday Category
                                               'nopaging' => true ));  ?>	<!-- Display all posts by disabling pagination -->
				
			<div class="photoswipe">
	
				<ul id="Gallery" class="gallery">
				
				<!-- Start the Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								
					<li class="images"> <?php if ( has_post_thumbnail()) {
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
									echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
									the_post_thumbnail('thumbnail');
									echo '</a>';
									} ?> 
					</li>					
		
		
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
	
				</ul>
			</div>
	
</div>
	
		</div>	

	</div>
</div>

<?php get_footer(); ?>
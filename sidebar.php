<!-- sidebar -->
<aside class="four columns">

	<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar')) : ?>
		<li><h4>Hey! You!</h4></li>
		<li>You should like, so test out this dynamic sidebar. Check it out in Appearance > Widgets!</li>
		<?php endif; ?>
	</ul>

	<?php $custom_query = new WP_Query (array('post_type' => 'sidebar', 
		                                   	  'posts_per_page' => 3));  ?>
			<!-- Start the Loop -->
			<?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			
				<article> 
		
					<!-- Display the Post's Content in a div box. -->
					<div class="sidebar">
					
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title(); ?></a>
						</h2>
						
						<p><?php the_time('F jS, Y') ?></p>
						<?php edit_post_link('Edit This Post','<p>', '</p>'); ?>
					
						<div class="entry index-page">
				
							<p><?php the_excerpt(); ?></p><!-- Displays the_excerpt -->
				
						</div>
						
						<div class="clear"></div>
						
					</div>
					
					<span class="moretext"> <a href="<?php the_permalink() ?>">Read More</a></span>
					
				</article>
				<!-- Stop The Loop (but note the "else:" - see next line). -->
				<?php endwhile; ?>
			
				<?php wp_reset_postdata(); ?>
			
			<!--End the loop -->
</aside>
<!-- sidebar -->

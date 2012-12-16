<?php get_header(); ?>

<!-- Main Row -->
<div class="row">

	<div class="ten columns centered lost">
		<div class="error">
			<h2>404!</h2>
		</div>
		<p>404's are such a lovely thing.  But you know, I'm not going to leave you stranded.</p>
		<p>Why don't you try a search?</p>
	
		<?php get_search_form(); ?>
				
		<img src="<?php bloginfo('template_directory'); ?>/stylesheets/css/images/backgrounds/boilermakers_404.jpg" alt="boilermakers_404" width="1024" height="441" />
	
		<!-- <a href="<?php echo home_url( '/' ); ?>">&larr; Go Home?</a> -->
	
	</div>
	
</div>	



<?php get_footer(); ?>
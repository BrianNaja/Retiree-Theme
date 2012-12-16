		</div>
		<!-- Main Row -->
	</div>
	<!-- container -->
	<!-- Footer -->
	<div id="footer">
		<footer class="row">
			<div class="twelve columns"></div>
				<div class="row">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
					<h4>Hey! You!</h4>
					<p>You should like, so test out this dynamic footer sidebar. Check it out in Appearance > Widgets!</p>
					<?php endif; ?>
				</div>
		</footer>
	</div>
	<!-- Footer -->

	
	<?php wp_footer(); ?>

	<!-- Included JS Files -->
	
 	<!--<script src="<?php bloginfo('template_url'); ?>/javascripts/foundation.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/klass-3.0.5.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/photoswipe-3.0.5.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/jquery-1.7.2.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/javascripts/fitvids.js"></script> 
	<script src="<?php bloginfo('template_url'); ?>/javascripts/photoswipe-3.0.5.js"></script>-->
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app-ck.js"></script>
	

</body>
</html>
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
	
	<script src="<?php bloginfo('template_url'); ?>/javascripts/fitvids.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascripts/app.js"></script>
	

</body>
</html>
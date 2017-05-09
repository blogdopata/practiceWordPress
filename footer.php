<footer class="max-width">


	<div class="block">

		<div class="block__title">
			Footer
		</div>
		<div class="block__body">
		<?php 
		wp_nav_menu(
			array(
				'theme_location'=>'bottom_menu'
				)
		)
	?>
			<small>
				 footer content :v
			</small>
		</div>
	</div>
</footer>		
<?php get_footer(); ?>
</body>
</html>
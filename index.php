<?php get_header("home"); ?>
<body>

	<h1 class="page-heading max-width"> 
	<?php bloginfo('name'); ?>		
	</h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Bloque principal
			</div>
			<div class="block__body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil reiciendis fuga, officia, sit placeat quis aliquam provident, iure blanditiis dolorem commodi quae quibusdam aliquid dolorum minima, molestiae vitae obcaecati. Quos!

			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
</body>
</html>
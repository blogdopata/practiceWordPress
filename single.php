<?php get_header(); ?>
<body>


	<div class="grid max-width">
		
			<div class="block__title">
				TAMOS EN VIVO
			</div>
			
			<?php 
				
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>
							<!--Contenido del post-->
							<article class="max-width">
								<h2 class="block__title">
								<?php the_title();	?> </h2>
								<div class="block__body">
								<?php the_content(); ?>
								</div>
								<footer>
									<div>
										<small><?php the_tags();?>
										</small>
									</div>
									<div>
										<small>
										 <b>
											<?php the_author(); ?></small>
										</b>
										</small>
									</div>
									<a href="<?php the_permalink(); ?>">Leer Más</a>
								</footer>
							</article>
				<?php	
					endwhile;
					else : 
				?>		
						<h4>Huy no tenemos entradas</h4>
				<?php
					endif;
				?>
		

		
		
	</div>
<?php get_footer();?>


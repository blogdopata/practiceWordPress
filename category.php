<?php get_header(); ?>


	<h1 class="page-heading max-width"> 
		Categoría: 	<?php single_cat_title(); ?>		
	</h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Ultimos trabajos
			</div>
			<div class="block__body grid">
			<?php 
				
				if(have_posts()) :
					while(have_posts()) :
						the_post();
			?>
							<!--Contenido del post-->
							<article class="block grid--item-4">
								<h2 class="block__title">
								<?php the_title();	?> </h2>
								<div class="block__body">
								<?php the_excerpt(); ?>
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

		</div>
		<?php get_sidebar("lado"); ?>
	</div>
<?php get_footer();?>


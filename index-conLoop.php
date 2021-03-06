<?php get_header(); ?>

	<h1 class="page-heading max-width"> 
		<?php bloginfo(admin_email); ?>		
	</h1>
	<div class="grid max-width">
		<div class="block grid--item-9">
			<div class="block__title">
				Ultimos trabajos
			</div>
			<div class="block__body grid">
				<?php
					if(have_posts()){
						while(have_posts()){
							the_post();
				?>
							<!--Contenido del post-->
							<article class="block grid--item-4">
								<h2 class="block__title"><?php the_title();	?> </h2>
								<div class="block__body">
								<?php the_excerpt(); ?>
								</div>
								<footer>
									<div>
										<small><?php the_tags();?>
									</small>
									</div>
									<div>
									<small> <b>
									<?php the_author(); ?></small>
									</b>
									</small>
									</div>
								</footer>
							</article>
				<?php	
						}
					}
				?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer();?>


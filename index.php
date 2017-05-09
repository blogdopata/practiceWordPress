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
				$args =  array('author_name'=>"blogdopata");
				$filter_posts = new WP_Query($args);
				if($filter_posts->have_posts()) :
					while($filter_posts->have_posts()) :
						$filter_posts->the_post();
			?>
							<!--Contenido del post-->
							<article class="block grid--item-4">
								<h2 class="block__title">
								<?php the_title();	?> </h2>

								<?php 

								if ( has_post_thumbnail()){ ?>
								<picture>	
								<source srcset="<?php 
									the_post_thumbnail_url('full');?>" media="(min-width:600px)">
									<img src="<?php 
									the_post_thumbnail_url('thumbnail');?>" alt="">
								</picture>

									<?php 
									}
								 ?>



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


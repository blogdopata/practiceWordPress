<?php get_header(); ?>
<body>
	
<?php 

if(have_posts()) :
	while(have_posts()) :
		the_post();
?>

	<h1 class="page-heading max-width"> 
		<span>Información: </span>
		<?php the_title();	?>		
	</h1>
	<div class="grid max-width">
		<div class="block grid--item-12">
			<div class="block__body grid">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	
<?php	
	endwhile;
	else : 
?>		
		<h4>Huy no tenemos entradas</h4>
<?php
	endif;
?>
	


<?php get_footer();?>


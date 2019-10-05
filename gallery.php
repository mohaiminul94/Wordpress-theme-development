<?php get_header(); ?>

<?php
/*
Template Name: Gallery
*/ 
?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">

			<?php 
				$zboomGallery= new WP_Query(array(
					'post_type' => 'zboomgallery'
				));
			 ?>

			<?php while ($zboomGallery->have_posts()): $zboomGallery->the_post();  ?>

			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
				</div>
			</div>

			<?php endwhile; ?>

		</div>
	</div>
</section>



<?php get_footer(); ?>
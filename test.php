<?php 
/*
Template Name: Test
*/
get_header(); 
?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">

			<?php if($zboom['website-layout']==1) : ?>
				<div class="col-3-3">
					<div class="wrap-col">
						

						<?php while(have_posts()):the_post(); ?>

						<article>
							<?php the_post_thumbnail(); ?>
							<h2><a href="#"><?php the_title(); ?></a></h2>
							<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>]</div>
							<p><?php the_content(); ?></p>
							<div class="comment">
								Your email address will not be published. Required fields are marked *
								<?php comments_template(); ?>
							</div>
						</article>

					<?php endwhile; ?>

						<ul>
							<?php if($zboom['social-icons'][1]) : ?>
							<li>
								<a href="<?php global $zboom; echo $zboom['social-icons'][1] ?>"><i class="fa fa-facebook"></i></a>
							</li>
							<?php endif; ?>
							<?php if($zboom['social-icons'][2]) : ?>
							<li>
								<a href="<?php echo $zboom['social-icons'][2] ?>"><i class="fa fa-twitter"></i></a>
							</li>
							<?php endif; ?>
							<?php if($zboom['social-icons'][3]) : ?>
							<li>
								<a href="<?php echo $zboom['social-icons'][3] ?>"><i class="fa fa-google-plus"></i></a>
							</li>
							<?php endif; ?>
							<?php if($zboom['social-icons'][4]) :?>
							<li>
								<a href="<?php echo $zboom['social-icons'][4] ?>"><i class="fa fa-linkedin"></i></a>
							</li>
							<?php endif; ?>
						</ul>

					</div>
				</div>
			<?php endif; ?>

			<?php if($zboom['website-layout']==2) : ?>
				<div class="col-1-3">
					<div class="wrap-col">
						<center>1/3</center>
					</div>
				</div>
				<div class="col-2-3">
					<div class="wrap-col">
						<center>2/3</center>
					</div>
				</div>
			<?php endif; ?>	

			<!-- <div class="col-2-3">
				<div class="wrap-col">
					<p>something</p>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<p>something</p>
				</div>
			</div> -->		
		</div>
	</div>
</section> 			
<?php get_footer(); ?>
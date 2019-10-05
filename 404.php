<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

					<h2>Page Not Found</h2>
					<p>You may visit the <a href="<?php esc_url(bloginfo('home')); ?>">Home</a> page</p>
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">

			<?php dynamic_sidebar('footer-widget'); ?>

		</div>
		
		<div class="row copyright">
			<p>
				<?php 
					global $zboom;
					echo $zboom['copyright-text'];
				?>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
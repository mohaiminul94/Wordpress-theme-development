<div id="pagi">
	<?php
		the_posts_pagination(array(
			'show_all' => TRUE,
			'prev_text' => 'PREVIOUS',
			'next_text' => 'NEXT',
			'screen_reader_text' => ' '
		));
	?>
</div>
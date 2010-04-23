		<div id="position-<?php post_position(); ?>">
			<div class="thread-author">
				<?php post_author_avatar_link(); ?>
				<p>
					<strong><?php post_author_link(); ?></strong><br />
					<small><?php post_author_title_link(); ?></small>
				</p>
			</div><!-- /.thread-author -->
			<div class="thread-post">
				<div class="post"><?php post_text(); ?></div>
				<div class="post-stuff">
    				<?php printf( __('Posted %s ago'), bb_get_post_time() ); ?>
    				<a href="<?php post_anchor_link(); ?>">#</a> <?php bb_post_admin(); ?>
				</div><!-- /.post-stuff>
			</div><!-- /.thread-post -->
		</div><!-- /#position-<?php post_position(); ?> -->
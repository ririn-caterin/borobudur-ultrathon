<div class="vc-item vc_slide_post">
	<div class="vc-inner">
		<div class="post-thumb">
			<?php if (has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('medium'); ?>
				</a>
			<?php endif; ?>
		</div>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<h3 class="post-date">
			<?php the_time("F d, Y"); ?>
		</h3>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="vc_read_more">Read more...</a>
	</div>
</div>
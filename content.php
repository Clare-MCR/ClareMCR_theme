<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
	<div class="post-inner post-hover">
		<?php if ( has_post_thumbnail() || ot_get_option('placeholder') != 'off'):?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('thumb-medium'); ?>
				<?php elseif ( ot_get_option('placeholder') != 'off' ): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title(); ?>" />
				<?php endif; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
				</a>
			</div><!--/.post-thumbnail-->
		<?php endif; ?>


		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2><!--/.post-title-->

		<?php if (ot_get_option('excerpt-length') != '0'): ?>
		<div class="entry excerpt">
			<?php
				// Check the content for the more text
				$ismore = @strpos( $post->post_content, '<!--more-->');
				// If there's a match
				if($ismore) : the_content();
				// Else no more tag exists
				else : the_excerpt();
				// End if more
				endif;
			?>
		</div><!--/.entry-->
		<div class="post-meta group">
			<p class="post-category"><?php the_category(' / '); ?></p>
			<p class="post-date"><?php the_time('j M, Y'); ?></p>
		</div><!--/.post-meta-->
		<?php endif; ?>

	</div><!--/.post-inner-->
</article><!--/.post-->
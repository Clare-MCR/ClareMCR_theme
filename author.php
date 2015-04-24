<?php get_header(); ?>

<section class="content">

	<?php get_template_part('inc/page-title'); ?>

	<div class="pad group">

		<?php if (get_the_author_meta( 'display_name' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<?php if (get_the_author_meta( 'committeerole' ) ): ?>
					<h2>Role:</h2><p class="bio-role"><?php the_author_meta('committeerole'); ?></p>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'currdegree' ) ): ?>
					<h2>Current Study:</h2><p class="bio-research"><?php the_author_meta('currdegree'); ?></p>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'description' ) ): ?>
					<h2>About Me:</h2><p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'user_url' ) ): ?>
					<h2>Website:</h2><a class="bio-url" href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'twitter' ) || get_the_author_meta( 'facebook' ) || get_the_author_meta( 'linkedin' ) || get_the_author_meta( 'user_email' )): ?>
					<h2>Social Links:</h2>
				<?php endif; ?>
				
<?php if (get_the_author_meta( 'committeemail' ) ): ?>
					<a class="bio-social" href="mailto:<?php the_author_meta('committeemail'); ?>"><img src="http://icons.iconarchive.com/icons/zerode/plump/256/Mail-icon.png" alt="Email" style="height:15px" border="0"></a>
<?php elseif (get_the_author_meta( 'user_email' ) ): ?>
					<a class="bio-social" href="mailto:<?php the_author_meta('user_email'); ?>"><img src="http://icons.iconarchive.com/icons/zerode/plump/256/Mail-icon.png" alt="Email" style="height:15px" border="0"></a>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'twitter' ) ): ?>
					<a class="bio-social" href="https://www.twitter.com/<?php the_author_meta('twitter'); ?>"><img src="https://g.twimg.com/Twitter_logo_blue.png" alt="View twitter profile" style="height:15px" border="0"></a>
				<?php endif; ?>
				<?php if (get_the_author_meta( 'facebook' ) ): ?>
					<a class="bio-social" href="https://www.facebook.com/<?php the_author_meta('facebook'); ?>"><img src="http://historytothepublic.org/wp-content/uploads/2015/01/FB-f-Logo__blue_29.png" alt="View facebook profile" style="height:15px" border="0"></a>
				<?php endif; ?>

				<?php if (get_the_author_meta( 'linkedin' ) ): ?>
					<a class="bio-social" href="<?php the_author_meta('linkedin'); ?>"><img src="http://s.c.lnkd.licdn.com/scds/common/u/img/webpromo/btn_profile_bluetxt_80x15.png" alt="View  profile on LinkedIn" width="80" style="height:15px" border="0"></a>
				<?php endif; ?>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		<h2>Posts:</h2>
		<ul>
			<!-- The Loop -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><br />
					<?php the_title(); ?></a>, <br />
					<?php the_time('d M Y'); ?> in <?php the_category('&');?>
				</li>
			<?php endwhile; else: ?>
				<p><?php _e('No posts by this author.'); ?></p>
			<?php endif; ?>
			<!-- End Loop -->
		</ul>

	</div><!--/.pad-->

</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
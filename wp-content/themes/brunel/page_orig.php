<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" /></div>
<div id="page_title" align="center"><?php the_title(); ?></div>

<?php get_sidebar(); ?>

	<div id="content" class="narrowcolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

			</div>
		</div>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
	
	<div id="right_sidebar">
	<img src="<?php bloginfo('template_directory'); ?>/images/violin2.jpg" alt="violin" />
	<div id="important_contact">
		<span>Manager:</span><br />
		Dave Sherwin<br />08956773382<p>
		<span>Box Office:</span><br />
		Providence Music<br />0117 927653<p>
		<span>Email:</span><br />
		<a href="mailto:brunelsinfonia@hotmail.com">brunelsinfonia@hotmail.com</a></div>
	<div id="sponsor"><a href="http://www.burgess-salmon.co.uk"><img src="<?php bloginfo('template_directory'); ?>/images/sponsor.jpg" alt="Sponsored by Burgess Salmon" /></a></div>
	</div>

<?php get_footer(); ?>
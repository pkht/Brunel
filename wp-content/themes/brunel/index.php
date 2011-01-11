<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" /></div>
<div id="page_title" align="center"><?php echo "News"; ?></div>

<table width="850" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td valign="top" bgcolor="#990000"><?php get_sidebar(); ?></td>
	
    <td valign="top">

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div></td>
	
    <td valign="top" bgcolor="#990000">
	<div id="right_sidebar">
	    <img src="http://www.brunelsinfonia.org.uk/wp-content/themes/brunel/images/side_image_6.jpg" alt="violin" />

	    <div id="important_contact">
		<p><span>Manager:</span><br />
		Dave Sherwin<br />07796 541190<br />
		<a href="mailto:dave.sherwin@burges-salmon.com" title="mailto:dave.sherwin@burges-salmon.com">Email</a></p>
		<p><span>Box Office:</span><br />
		Providence Music<br />0117 927 6536</p>
	    </div>

	    <div id="sponsor"><a href="http://www.burges-salmon.com" target="_blank"><img src="http://www.brunelsinfonia.org.uk/wp-content/themes/brunel/images/sponsor.jpg" alt="Sponsored by Burgess Salmon" /></a></div>
	</div>
    </td>
	
  </tr>
</table>


<?php get_footer(); ?>

<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" /></div>
<div id="page_title" align="center"><?php echo "News"; ?></div>

<table width="850" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td valign="top" bgcolor="#990000"><?php get_sidebar(); ?></td>
	
    <td valign="top">
	<div id="content" class="narrowcolumn">

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">

		    <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

		    <div class="entry">

			    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

			    <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		    </div>
		    
		</div>

		<?php comments_template(); ?>

	    <?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	    <?php endif; ?>

	</div>
	
    </td>

    <td valign="top" bgcolor="#990000">
	<? include get_theme_root() . '/brunel/right_sidebar.php'; ?>
    </td>
	
	
  </tr>
  
</table>
  

<?php get_footer(); ?>

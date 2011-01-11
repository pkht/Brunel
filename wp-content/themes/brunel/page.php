<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" alt="music"/></div>
<div id="page_title" align="center"><? the_title(); ?></div>

<table width="850" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td valign="top" bgcolor="#990000"><?php get_sidebar(); ?></td>
	
    <td valign="top">
	<div id="content" class="narrowcolumn">

	    <? if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		    <? if ( !is_front_page() ) : ?>
			<h2><? the_title()?></h2>
		    <? endif; ?>

		    <div class="entry">
			<? if ( is_front_page() ) : ?>
			    <div style="border-bottom:1px solid #990000">
				<?the_content('<p class="serif">Read the rest of this page &raquo;</p>');?>
			    </div>
			    <h2 style="color:#990000;">Recent News</h2>
			    <div>
				<?php
				$how_many=2; //How many posts do you want to show
				require_once("wp-config.php"); // Change this for your path to wp-config.php file ?>
				<? $news=$wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_status='publish' AND post_type='post' ORDER BY ID DESC LIMIT ".$how_many); ?>
				<? foreach( $news as $np ) : ?>
				    <h2><a href="<?php echo $np->guid; ?>" rel="bookmark" title="Permanent Link to <?php echo $np->post_title; ?>"><?php  echo $np->post_title; ?></a></h2>
				    <?php //Format the date
					$date = split("[- ]",$np->post_date);
					$date_string = $date[2]."-".$date[1]."-".$date[0];
				    ?>
				    <small><?php echo $date_string; ?></small>
				    <div class="entry">
					<?php echo $np->post_content; ?>
				    </div>
				    <p class="postmetadata">Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<? endforeach; ?>
			    </div>
			<? else : ?>
			    <div>
			    <? the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			    </div>
			<? endif; ?>
		    </div>

		    <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

		</div>
	    <?php endwhile; endif; ?>

	    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
    </td>
    <td valign="top" bgcolor="#990000">
	<? include get_theme_root() . '/brunel/right_sidebar.php'; ?>
    </td>
  </tr>
</table>

<?php get_footer(); ?>
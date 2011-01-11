<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" /></div>
<div id="page_title" align="center">
<?php 
		echo "Archives";
?></div>

<table width="850" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td valign="top" bgcolor="#990000"><?php get_sidebar(); ?></td>
	
    <td valign="top">
	<div id="content" class="narrowcolumn">


<h2>Archives by Month:</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2>Archives by Subject:</h2>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>

</div></td>

    <td valign="top" bgcolor="#990000">
	<? include get_theme_root() . '/brunel/right_sidebar.php'; ?>
    </td>
	
	
  </tr>
</table>


	
	
	

<?php get_footer(); ?>

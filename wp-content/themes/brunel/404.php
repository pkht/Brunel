<?php get_header(); ?>

<div id="header_image"><img src="<?php bloginfo('template_directory'); ?>/images/topmusic1.jpg" /></div>
<div id="page_title" align="center">
<?php 
		echo "Error";
?></div>

<table width="850" cellpadding="0" cellspacing="0" id="main_table">
  <tr>
    <td valign="top" bgcolor="#990000"><?php get_sidebar(); ?></td>
	
    <td valign="top">
	<div id="content" class="narrowcolumn">

		<h2 class="center">Error 404 - Not Found</h2>

	</div></td>

	<?php get_right_side_contents(); ?>
	
	
  </tr>
</table>


	
	
	

<?php get_footer(); ?>
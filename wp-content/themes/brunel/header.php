<?php
/*
if( is_front_page() )
{
    session_start();
    if( $_GET["splash"] == "1" )
        $_SESSION["splash"] = true;
    if( !$_SESSION["splash"] )
    {
        $_SESSION["splash"] = true;
        header("Location:".get_bloginfo( "url" )."/splash.php");
    }
}
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.js"></script>

<style type="text/css" media="screen">
#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/brunel_bkg.jpg") repeat-y top; border: none; } 
</style>

<?php wp_head(); ?>
</head>
<body>
<!-- New server -->
<div id="page">


<div id="header">
	<div id="headerimg">

		<!--<div id="search_bar">Search news items: <?php include (TEMPLATEPATH . '/searchform.php'); ?></div>-->
		
	</div>
</div>
<hr />


<div id="footer">



    <div id="recent_news">
	    <div><h2 class="footer_headers">Recent News</h2>
		<ul>
		<?
		    $recent_p = wp_get_recent_posts( 5 );
		    foreach( $recent_p as $p )
		    {
			print '<li><a href="'.get_permalink($p['ID']).'">'.$p['post_title'].'</a></li>';
		    }
		?>
		</ul>
	</div>
    </div>

    <div id="quick_links">
	<div><h2 class="footer_headers">News Categories</h2>
	    <ul>
		<?
		    $categories = get_categories( array('hide_empty' => 1 ) );
		    foreach( $categories as $cat )
		    {
			    print '<li><a href="'.get_bloginfo('home').'/category/'.$cat->name.'">'.$cat->name.'</a>';
			    print ' ('.$cat->count.')'.'</li>';
		    }
		?>
	    </ul>
	</div>
    </div>

    <div id="news_archives">
	<div><h2 class="footer_headers">News Archive</h2>
	    <ul><? print wp_get_archives( array( 'limit' => 5, 'type' => 'monthly', 'format' => 'custom', 'before' => '<li>', 'after' => '</li>', 'show_post_count' => true ) ); ?></ul>
	</div>
    </div>

    <div id="credit_footer">
	<?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/" target="_blank">WordPress</a><br />
	Theme by <a href="http://www.pkht.co.uk" target="_blank">PKHT</a><br /><br /><br />
	The Brunel Sinfonia is registered in England and Wales as a Company Limited by Guarantee, no. 5552826
    </div>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4465283-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>





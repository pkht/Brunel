<div id="sidebar">
    <ul>
	<? wp_list_pages('depth=0&title_li=' ); ?>
    </ul>
</div>

<script type="text/javascript">
$(document).ready( function() {
    $("#sidebar ul li ul").hide();
    if( $("#sidebar li.current_page_item > ul").length > 0 )
	$("#sidebar ul li.current_page_item ul").show();
    if( $("#sidebar li.current_page_parent > ul").length > 0 )
	$("#sidebar ul li.current_page_parent ul").show();
})
</script>

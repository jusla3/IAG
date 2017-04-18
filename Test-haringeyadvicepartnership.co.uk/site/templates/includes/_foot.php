</div>
<!-- /End Page Wrapper -->

<!-- Footer BG Colour -->
<div class="footer-wide">
<!-- Footer -->
<div class="wrapper">
<div class="row">
<!-- Footer left -->
<div class="col span_6"><?=$pages->get("/global/")->footer_text ?>

</div>
<!-- Footer Right -->
<div class="col span_6 footer-logos"><?=$pages->get("/global/")->footer_logos ?></div>
</div>
</div>
</div>
<!-- /Footer BG Colour -->

<!-- include plugins and scripts -->
<script src="<?php echo $config->urls->templates?>js/respond.min.js"></script>
<script src="<?php echo $config->urls->templates?>js/revealonscroll.js"></script>
<script>
$(document).ready(function(){
	$('#menu').slicknav({
	allowParentLinks: true,
	closeOnClick: true,
	closedSymbol: "+",
	openedSymbol: "+",
	});
});
</script>
<script>
$(function(){
$('.scroller').slimscroll({
size: '15px',
height: 'auto',
color: '#ccc',
railVisible: true,
railColor: '#ccc',
railBorderRadius: 0,
borderRadius: 0,
alwaysVisible:true
});
});
</script>

<span class="scrollup">Scroll to Top</span>
<script src="http://platform.twitter.com/widgets.js"></script>
</body>
</html>
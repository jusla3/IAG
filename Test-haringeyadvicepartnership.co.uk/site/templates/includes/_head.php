<!doctype html>
<html lang="en">
<head>
<title><?php echo $page->title; ?> | <?=$pages->get("/settings/")->site_name ?></title>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="<?php echo $page->page_meta_description; ?>" />
<!-- Open Graph Protocol http://ogp.me/ -->
<meta property="og:title" content="<?php echo $page->pageheading; ?>" />
<meta property="og:description" content="<?php echo $page->page_meta_description; ?>" />
<meta property="og:url" content="http://www.haringeyadvicepartnership.co.uk<?php echo $page->url; ?>" />
<meta name="author" content="humans.txt">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

<!--  CSS -->
<link rel="stylesheet" href="<?php echo $config->urls->templates?>c/grid.css" />
<link rel="stylesheet" href="<?php echo $config->urls->templates?>/c/slicknav.css">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>c/base.css" />
<link rel="stylesheet" href="<?php echo $config->urls->templates?>c/layout.css" />
<link rel="stylesheet" href="<?php echo $config->urls->templates?>c/animate.min.css" />
<link rel="stylesheet" href="<?php echo $config->urls->templates?>fa/c/font-awesome.min.css">
<link rel="stylesheet" media="print" href="<?php echo $config->urls->templates?>c/print.css" />

<!-- JavaScript -->
<script src="<?php echo $config->urls->templates?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo $config->urls->templates?>js/modernizr.min.js"></script>
<script src="<?php echo $config->urls->templates?>js/jquery.slimscroll.js"></script>
<script src="<?php echo $config->urls->templates?>js/jquery.slicknav.min.js"></script>

<!-- Scripts -->
<script src="<?php echo $config->urls->templates?>js/site-tools.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVxEH2hP8NzXhkCtFv0bycM0QxxJAf5s0"></script>
<script src="<?php echo $config->urls->templates?>js/map_styles.js"></script>
<script src="<?php echo $config->urls->templates?>js/map.js"></script>
   
   

    
<!--[if lt IE 10]>
<link rel="stylesheet" href="c/ie.css" />
<![endif]-->
 </head>
<body class="page_<?=$page->rootParent->name; ?>">


<!-- Fixed masthead navigation -->
<div class="col head pos">
<div class="headwrapper">
<ul class="nav hide-on-phones" id="menu">
<?php include('includes/_primary_menu.php'); // include menu ?>
</ul> 
</div>
</div>

<!-- Header -->
<div class="header">
<div id="snow">
<div class="show-on-phones search"><form action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
<input class='search-input' type='text' name='q' placeholder='Search' value='' /></form></div>


<!-- Logo -->
<a href="/index.php"><img src="<?php echo $config->urls->templates?>g/logo.png" class="logo" id="logo" alt="Logo"></a>
    
<!-- Wrapper for Search and SM -->
<div class="wrapper">

<!-- Social Media -->
<div class="social-media"><?=$pages->get("/global/")->socialmedia_logos ?></div>

<!-- Search -->
<div class="search  hide-on-phones">
<form action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
<input class='search-input' type='text' name='q' placeholder='Search' value='' />
<input id="search" class="search-btn" type="image" alt="Search" src="<?php echo $config->urls->templates?>g/search.png" name="submit">
</form>

</div>
</div>
<header2>
<!--.fadeOut(2000)-->
<script type="text/javascript">
$(function() {
  $('#ribbon').hide().fadeTo(1000, 1).delay(500).fadeOut(4000)});

$(function() {
$('#animated-xmas-header.unmirror div').each(function(i) {
$(this).delay((i++) * 90).fadeTo(1000, 1).delay(500).fadeOut(2000)})
});

$(function() {
$('#animated-xmas-header.mirror div').each(function(i) {
$(this).delay((i++) * 90).fadeTo(1000, 1).delay(500).fadeOut(2000); })
});
$(function() {
  $('#logo').hide().delay(4000).fadeTo(1000, 1); });

</script>
<div id="animated-xmas-header" class="unmirror hide-on-phones">
  <div class="deer"></div>
  <div class="snow1"></div>
  <div class="bell1"></div>
  <div class="snow2"></div>
  <div class="baulb1"></div>
  <div class="snow3"></div>
  <div class="snow4"></div>
  <div class="snow5"></div>
  <div class="baulb2"></div>
  <div class="snow6"></div>
  <div class="candy1"></div>
  <div class="holly1"></div>
  <div class="snow7"></div>
  <div class="bell2"></div>
  <div class="robin"></div>
  <div class="snow8"></div>
  <div class="present2"></div>
  <div class="tree"></div>
  <div class="slay"></div>
  <div class="snow9"></div>
  <div class="baulb3"></div>
  <div class="stocking"></div>
  <div class="snow10"></div>
  <div class="snow11"></div>
  <div class="tinydeer"></div>
  <div class="snow12"></div>
  <div class="baulb4"></div>
  <div class="candy2"></div>
  <div class="holly2"></div>
</div>
<div id="ribbon"  class="hide-on-phones"></div>
<div id="animated-xmas-header" class="mirror hide-on-phones">
  <div class="deer"></div>
  <div class="snow1"></div>
  <div class="bell1"></div>
  <div class="snow2"></div>
  <div class="baulb1"></div>
  <div class="snow3"></div>
  <div class="snow4"></div>
  <div class="snow5"></div>
  <div class="baulb2"></div>
  <div class="snow6"></div>
  <div class="candy1"></div>
  <div class="holly1"></div>
  <div class="snow7"></div>
  <div class="bell2"></div>
  <div class="robin"></div>
  <div class="snow8"></div>
  <div class="present2"></div>
  <div class="tree"></div>
  <div class="slay"></div>
  <div class="snow9"></div>
  <div class="baulb3"></div>
  <div class="stocking"></div>
  <div class="snow10"></div>
  <div class="snow11"></div>
  <div class="tinydeer"></div>
  <div class="snow12"></div>
  <div class="baulb4"></div>
  <div class="candy2"></div>
  <div class="holly2"></div>
</div>
<header2>
</div>

<!-- /Header -->
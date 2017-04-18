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
<!-- <link rel="shortcut icon" href="http:www.haringeyadvicepartnership.co.uk/favicon.png?r=31241"" type="image/x-icon" />-->
<!-- <link rel="shortcut icon" href="http:www.haringeyadvicepartnership.co.uk/favicon.ico?r=31241">-->
<!-- Favicons -->
<link rel="icon" type="image/x-icon" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon.ico?r=31241"/>

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="http:www.haringeyadvicepartnership.co.uk/favicons/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="http:www.haringeyadvicepartnership.co.uk/favicons/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
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

<div class="show-on-phones search"><form action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
<input class='search-input' type='text' name='q' placeholder='Search' value='' /></form></div>


<!-- Logo -->
<a href="/index.php"><img src="<?php echo $config->urls->templates?>g/logo.png" class="logo" alt="Logo"></a>
    
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

</div>
<!-- /Header -->
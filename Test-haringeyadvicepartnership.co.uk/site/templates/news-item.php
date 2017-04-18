<?php include('includes/_head.php'); // include head ?>
<!-- Page Wrapper -->
<div class="wrapper">
<div class="row">
<div class="col">
<?php if($page->editable()) echo "<a href='$page->editURL' class='edit hide-on-phones'>Edit this page</a>"; ?>
<?php include('includes/_bread_crumbs.php'); // include breadcrumbs ?>
<h1><?php echo $page->pageheading;?></h1>
<p class="posted">Posted: <?php echo $page->news_posted; ?></p>
<hr />
</div>
<div class="col span_8">
<!-- Twitter -->
<div class="twitter hide-on-phones"><?php echo $modules->MarkupSocialShareButtons->render(); ?></div>

<!-- Feature Image  -->
<?php if($page->feature_image) echo "<p><img src='{$page->feature_image->url}'  alt='{$page->feature_image->description}' /></p>"; ?>
<?php if($page->feature_image) echo "<p class='feature_caption'>{$page->feature_image->description}</p>"; ?>

<?php echo $page->body; ?><hr />
<p><a href = "javascript:history.back()" class="blue button">Go back</a></p>
</div>
<div class="col span_4">
<h3>Other News</h3>
<?php
$latestNews = $pages->get("/news-and-events/news-posts/")->children("limit=4");
foreach($latestNews as $item) {
echo "<p><a href='{$item->url}'>{$item->title}</a></p>
<p class='posted'>Posted: {$item->news_posted}</p> 
<hr />";
}
                                
// get values for our placemarker headline
$start = $latestNews->getStart(); 
$end = $start + count($latestNews);  
$total = $latestNews->getTotal(); 
$num = $input->pageNum; 
$lastNum =  ceil($total / $latestNews->getLimit());
?> 
 
</div>
</div>
<?php include('includes/_foot.php'); // include head ?>
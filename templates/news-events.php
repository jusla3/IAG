<?php include('includes/_head.php'); // include head ?>
<!-- Page Wrapper -->
<div class="wrapper">
<div class="row ">
<div class="col">
<?php include('includes/_bread_crumbs.php'); // include breadcrumbs ?>
<h1><?php echo $page->pageheading;?></h1>
<hr />
</div>
<div class="col">
<!-- Feature Image  -->
<?php if($page->feature_image) echo "<p><img src='{$page->feature_image->url}'  alt='{$page->feature_image->description}' /></p>"; ?>
<?php if($page->feature_image) echo "<p class='feature_caption'>{$page->feature_image->description}</p>"; ?>


<?php
$latestNews = $pages->get("/news-and-events/news-posts/")->children("limit=3");
foreach($latestNews as $item) {
echo "<div class='newspost'><h2><a href='{$item->url}'>{$item->title}</a></h2>
<p class='posted'><i class='fa fa-calendar'></i> News Posted: {$item->news_posted}</p> 
<p>{$item->summary}</p>
<p><a href='{$item->url}' class='button'>Read more</a></p> </div>";
}
                                
// get values for our placemarker headline
$start = $latestNews->getStart(); 
$end = $start + count($latestNews);  
$total = $latestNews->getTotal(); 
$num = $input->pageNum; 
$lastNum =  ceil($total / $latestNews->getLimit());

// output the placemarker headline
echo "<p class='small'>Showing $start - $end of $total Article/s | Page $num of $lastNum</p>"; 
           
// output pagination links
echo $latestNews->renderPager();
?>
</div>

</div>
<?php include('includes/_foot.php'); // include head ?>
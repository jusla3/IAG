<?php include('includes/_head.php'); // include head ?>

<!-- Site Introduction -->
<div class="row">
<div class="wrapper">
<div class="col introduction">

<?php if($page->editable()) echo "<a href='$page->editURL' class='edit hide-on-phones'>Edit this page</a>"; ?>

   
<h1><?php echo $page->pageheading;?></h1>
<?php echo $page->introduction;?>
<hr />
<h3 class="animated bounceIn">Explore community services near you.</h3>
</div>
</div>
</div>
<!-- /Site Introduction -->

<!-- Google Map -->
<div class="map fadein" id="location-map">
<div id="map">Map loading ...</div>
</div>
<!-- / Google Map -->

<!-- About us Introduction -->
<div class="row">
<div class="wrapper">
<div class="col about-introduction">
<?php echo $page->body; ?>
</div>
</div>
</div>
<!-- / About us Introduction -->

<!-- Page Wrapper -->
<div class="wrapper">

<div class="row scroller-windows">
<div class="col span_6">
<!-- Start News -->
<div class="home-news scroller revealOnScroll" data-animation="fadeIn" data-timeout="400">
<h3>IAG News</h3>
<?php
$latestNews = $pages->get("/news-and-events/news-posts/")->children("limit=4"); 
foreach($latestNews as $item) {
echo "<h3><a href='{$item->url}'>{$item->title}</a></h3>
<p class='posted'>Posted: {$item->news_posted}</p>
<p>{$item->summary}</p><p><a href='{$item->url}' class='button'>Continue reading</a></p><hr />";
}
?>
</div>
</div>

<div class="col span_6 mobile">
<!-- Start Twitter -->
<div class="home-tweets scroller revealOnScroll" data-animation="fadeIn" data-timeout="600">
<h3>IAG on Twitter</h3>
<?php include('includes/_twitter_feed.php'); // include Twitterfeed ?>
<p><a href="https://twitter.com/HaringeyAp"  class="blue button">Follow @HaringeyAp</a></p>
</div>
<!-- /Twitter -->
</div>
</div>

<!-- Two teasers - 1 rows 2 cols -->
<div class="row">   
<div class="col span_6">
<!-- Teaser #1 -->
<?php if($page->teaserImg1) {
echo "<p><a href='{$page->teaserlink_1}'><img src='{$page->teaserImg1->url}' class='revealOnScroll' data-animation='fadeIn' data-timeout='600' alt='{$page->teaserImg1->description}' /></a></p>"; // Single Image
echo "<h3>{$page->teaser_heading1}</h3>"; // Summary heading h3 
echo "<p>{$page->teaser_summary1}</p>"; // Summary copy p
echo "<p><a href='{$page->teaserlink_1}' class='blue button'>Read more</a></p>"; // Read more link
} ?>
</div>
 
<div class="col span_6">
<!-- Teaser #2 -->
<?php if($page->teaserImg2) {
echo "<p><a href='{$page->teaserlink_2}'><img src='{$page->teaserImg2->url}' class='revealOnScroll' data-animation='fadeIn' data-timeout='600' alt='{$page->teaserImg2->description}' /></a></p>"; // Single Image
echo "<h3>{$page->teaser_heading2}</h3>"; // Summary heading h3
echo "<p>{$page->teaser_summary2}</p>"; // Summary copy p
echo "<p><a href='{$page->teaserlink_2}' class='blue button'>Read more</a></p>"; // Read more link
} ?>
</div>
</div>
<!-- Two teasers - 1 rows 2 cols -->

<?php include('includes/_foot.php'); // include head ?>
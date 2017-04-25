<?php include('includes/_head.php'); // include head ?>
<!-- Page Wrapper -->
<div class="wrapper">
<div class="row">
<div class="col">
<?php include('includes/_bread_crumbs.php'); // include breadcrumbs ?>
<h1><?php echo $page->pageheading;?></h1>
<hr />
</div>
<div class="col">
<?php echo $page->body; ?>

<?php
function sitemapListPage($page) {
    
      // create a list item & link to the given page, but don't close the <li> yet
        echo "<li><a href='{$page->url}'>{$page->title}</a> ";

        // check if the page has children, if so start a nested list
        if($page->numChildren) {
                // start a nested list
                echo "<ul>";

                // loop through the children, recursively calling this function for each
                foreach($page->children as $child) sitemapListPage($child);

                // close the nested list
                echo "</ul>";
        }

        // close the list item
        echo "</li>";
}
    
// start the sitemap unordered list
echo "<ul class='sitemap'>";

// get the homepage and start the sitemap
sitemapListPage($pages->get("/"));

// close the unordered list
echo "</ul>";
?>  


</div>

</div>
<?php include('includes/_foot.php'); // include head ?>
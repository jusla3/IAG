<!-- Breadcrumbs  -->
<div class="breadcrumbs hide-on-phones">
<ul>
<li>Currently viewing:</li>
<?php 
// breadcrumbs are the current page's parents
foreach($page->parents() as $item) {

//skip SideBarPages using id of the page.
//You can also use $item->id=='1234' $item->title=='titleOfSideBarPages, $item->name, etc
//using the ID, though less readable, is more foolproof
  if ($item=='1042') continue;
  echo "<li><a href='$item->url'>$item->title</a></li> "; 
}
// optionally output the current page as the last item
echo "<li>$page->title</li> "; 
?>
</ul>
</div>

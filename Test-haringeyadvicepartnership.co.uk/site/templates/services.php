<?php include('includes/_head.php'); // include head ?>
<!-- Page Wrapper -->
<div class="wrapper">
<div class="row">
<div class="col">
<?php if($page->editable()) echo "<a href='$page->editURL' class='edit hide-on-phones'>Edit this page</a>"; ?>
<?php include('includes/_bread_crumbs.php'); // include breadcrumbs ?>
<h1><?php echo $page->pageheading;?></h1>
<hr />
</div>
<div class="col span_8">
<!-- Feature Image  -->
<?php if($page->feature_image) echo "<p><img src='{$page->feature_image->url}'  alt='{$page->feature_image->description}' /></p>"; ?>
<?php if($page->feature_image) echo "<p class='feature_caption'>{$page->feature_image->description}</p>"; ?>
<?php echo $page->body; ?>

</div>
<div class="col span_4">

<?php
if($page->rootParent->hasChildren) {
     include('includes/_sub_menu.php'); 
}
?>

<div class="sidebar"><?php echo $page->sidebar;?></div>
</div>
</div>
<?php include('includes/_foot.php'); // include head ?>
<?php include('includes/_head.php'); // include head ?>
<!-- Page Wrapper -->
<div class="wrapper">
<div class="row">
<div class="col">
<?php include('includes/_bread_crumbs.php'); // include breadcrumbs ?>
<h1><?php echo $page->pageheading;?></h1>
<hr />
</div>
<div class="col span_8">
<!-- Feature Image  -->
<?php if($page->feature_image) echo "<p><img src='{$page->feature_image->url}'  alt='{$page->feature_image->description}' /></p>"; ?>
<?php if($page->feature_image) echo "<p class='feature_caption'>{$page->feature_image->description}</p>"; ?>
<?php echo $page->body; ?>

<div class="form-wrapper">
<?php echo $forms->load('primary_contact')->render(); ?>
</div>


</div>
<div class="col span_4">

<?php
if($page->rootParent->hasChildren) {
     include('includes/_sub_menu.php'); 
}
?>

<?php 
$map = $modules->get('MarkupGoogleMap'); 
echo $map->render($page, 'service_map');
 ?>
 
<div class="sidebar"><?php echo $page->sidebar;?></div>
</div>
</div>
<?php include('includes/_foot.php'); // include head ?>
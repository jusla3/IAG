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
<?php echo $page->body; ?> 
<?php

	// search.php template file
	// See README.txt for more information. 

	// look for a GET variable named 'q' and sanitize it
	$q = $sanitizer->text($input->get->q); 

	// did $q have anything in it?
	if($q) { 

		// Sanitize for placement within a selector string. This is important for any 
		// values that you plan to bundle in a selector string like we are doing here.
		$q = $sanitizer->selectorValue($q); 

		// Search the title and body fields for our query text.
		// Limit the results to 50 pages. 
        
		$selector = "title|body%=$q, limit=50";
        
        
        //Original 	$selector = "title|body|sidebar|staffteam.staffname~=$q, limit=50"; 
        
		// If user has access to admin pages, lets exclude them from the search results.
		// Note that 2 is the ID of the admin page, so this excludes all results that have
		// that page as one of the parents/ancestors. This isn't necessary if the user 
		// doesn't have access to view admin pages. So it's not technically necessary to
		// have this here, but we thought it might be a good way to introduce has_parent.
		if($user->isLoggedin()) $selector .= ", has_parent!=2"; 

		// Find pages that match the selector
		$matches = $pages->find($selector); 
      
		// did we find any matches? ...
		if($matches->count) {

			// we found matches
			echo "<h2>Found $matches->count page(s) matching your query:</h2>";

			// output navigation for them
			echo "<ul class='searchnav'>";

			foreach($matches as $match) {
				echo "<li><a href='$match->url'>$match->title</a>";
			}

			echo "</ul>";

		} else {
			// we didn't find any
			echo "<h4>Sorry, no results were found.</h2><p>Unfortunately that particular keyword has not produced any results. You could try another keyword or perhaps check your spelling?</h4>";
		}

	} else {
		// no search terms provided
		echo "<h2>Please enter a search term</h2>";
	}

?> 
</div>
<div class="col span_4 sub-menu"><?php include('includes/_sub_menu.php'); // include sub menu markup ?></div>
</div>
</div>
<?php include('includes/_foot.php'); // include head ?>
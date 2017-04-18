<?php 
// top navigation consists of homepage and its visible children
		$homepage = $pages->get('/'); 
		$children = $homepage->children();

		// make 'home' the first item in the navigation
		$children->prepend($homepage); 

		// render an <li> for each top navigation item
		foreach($children as $child) {
			
            if($child->id == $page->rootParent->id) {
				// this $child page is currently being viewed (or one of it's children/descendents)
				// so we highlight it as the current page in the navigation
                
               // Hide Contact us (on state)
               // Uncomment this ...  if($child->name != 'contact-us')  
              
                echo "<li><a href='$child->url' class='active'>$child->title</a></li>";
			} else {
                
              // Hide Contact us (off state)
              // Uncomment this ...  if($child->name != 'contact-us')     
                               
			echo "<li><a href='$child->url'>$child->title</a></li>";
}}

?>
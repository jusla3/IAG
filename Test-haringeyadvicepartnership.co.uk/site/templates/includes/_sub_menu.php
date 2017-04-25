<div class="sub-menu">



<?php
function treeMenu(Page $page = null, Page $rootPage = null) {
        if(is_null($page)) $page = wire('page');
        if(is_null($rootPage)) $rootPage = wire('pages')->get('/');
        $out = "\n<ul>";
        $parents = $page->parents;
        foreach($rootPage->children as $child) {
                $class = '';
                $s = '';
                if($child->numChildren && $parents->has($child)) {
                        $class = 'on_parent';
                        $s = str_replace("\n", "\n\t\t", treeMenu($page, $child));
                } else if($child === $page) {
                        $class = "currentpage";
                        if($page->numChildren) $s = str_replace("\n", "\n\t\t", treeMenu($page, $page));
                }
                if($class) $class = " class='$class'";
                $out .= "\n\t<li>\n\t\t<a$class href='{$child->url}'>{$child->title}</a>$s\n\t</li>";
        }

        $out .= "\n</ul>";
        return $out;
}

// or specify what you want it to display
echo treeMenu($page, $page->rootParent);
?>
</div>
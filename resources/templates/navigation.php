<?php
// Automatically creates a list item for the navigation bar
// Decides whether it points to the current page or not, and
// then chooses whether to highlight the item.
function internal_navigation_item($title, $href) {
    
    // Strip first forward slash (start of string)
    $script = substr($_SERVER['SCRIPT_NAME'], 1);
    
    if ($script === $href) {
        return "<li><a class='active' href='$href'>$title</a></li>";
    } else {
        return "<li><a href='$href'>$title</a></li>";
    }
}

function internal_generate_navigation() {
    // Localise nav item generator function
    $nav = 'internal_navigation_item';

    // Output
    $output = <<<HEREDOC
<header class="global-header">
	<nav>
		<ul>
            {$nav("Home", "index.php")}
            {$nav("Cheese Map", "map.php")}
            {$nav("Recipes", "recipes.php")}
            {$nav("About", "about.php")}
            {$nav("Shop", "shop.php")}
		</ul>
	</nav>
</header>
HEREDOC;

    // Return Output
    echo $output;
}
?>
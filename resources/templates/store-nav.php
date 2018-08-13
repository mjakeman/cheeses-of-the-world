<?php
function internal_generate_store_nav($title, $cart_url, $home_url, $is_home) {
    
    $cart_num = 0;
    if (@$_SESSION["cart"] != null) {
        foreach($_SESSION["cart"] as $quantity) {
            $cart_num += $quantity;
        }
    }

    $output = "";

    if ($is_home) {
        $output = <<<HEREDOC
<nav class="store-nav">
    <div class="store-nav-left">
        <p>The<span>Cheese</span>Shop</p>
    </div>

    <div class="store-nav-centre">
        <p>Shop</p>
    </div>

    <div class="store-nav-right">
        <a class="cart-text" href="$cart_url">Cart ($cart_num)</a>
    </div>
</nav>
HEREDOC;
    } else {
        $output = <<<HEREDOC
<nav class="store-nav">
    <div class="store-nav-left">
        <p>The<span>Cheese</span>Shop</p>
    </div>

    <div class="store-nav-centre">
        <p><a class="link" href="$home_url">Shop</a> / $title</p>
    </div>

    <div class="store-nav-right">
        <a class="cart-text" href="$cart_url">Cart ($cart_num)</a>
    </div>
</nav>
HEREDOC;
    }
    
    echo $output;
}
?>
<?php
// Standard Include
require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

$item_id        = htmlspecialchars($_GET["id"]);
$item_quantity  = htmlspecialchars($_GET["quantity"]);
$redirect       = $_GET["redirect"];

// Redirection
$redirect_final = "Location: " . $ROOT_URL . $redirect;

// Make sure Quantity is positive
if ($item_quantity > 0) {
    
    // Cart array consists of (id, quantity) pairs
    $_SESSION["cart"][$item_id] = $item_quantity;    
}

// Cause the redirect
header($redirect_final);
?>
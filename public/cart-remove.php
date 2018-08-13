<?php
// Standard Include
require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

$item_id        = htmlspecialchars($_GET["id"]);
$redirect       = $_GET["redirect"];

// Up to the caller to make safe
unset($_SESSION["cart"][$item_id]);

// Redirection
$redirect_final = "Location: " . $ROOT_URL . $redirect;

// Cause the redirect
header($redirect_final);
?>
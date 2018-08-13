<?php
// Standard Include
require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

// Clear the Session Data
session_start();
unset($_SESSION['cart']);

// Redirection
$redirect = $_GET["redirect"];
$redirect_final = "Location: " . $ROOT_URL . $redirect;

// Cause the redirect
header($redirect_final);
?>
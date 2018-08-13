<?php
// Standard Include
require $_SERVER["DOCUMENT_ROOT"] . '/../resources/config.php';

unset($_SESSION["user"]);
unset($_SESSION["pass"]);

// Redirection
$redirect = "Location: " . $ROOT_URL . "admin.php";

// Cause the redirect
header($redirect);
?>
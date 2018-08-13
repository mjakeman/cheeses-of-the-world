<?php
/*
# Standard Include File

This file contains all of the resources a web page might need. It aims to be an
entry point into the server side scripting for the website. It provides:
 * helper functions
 * global variables
 * image lookup
 * etc
*/

/*
============================
Globals
============================
*/

// IMPORTANT: Change this to the url of the currently running
// server. By default, it should be localhost.
$ROOT_URL = "http://localhost/";

// Generic Title Template using the printf formatting syntax
$TITLE_FORMAT = "%s | Cheeses of the World";
$config = [
    "db" => [
        "server" => "localhost",
        "dbname" => "cheese_shop",
        "username" => "root",
        "password" => "",
    ],
    "portal" => [
        "user" => "admin",
        "pass" => "cheese",
    ],
];

/*
============================
Setup
============================
*/
function setup_connect_to_db() {
    $config = $GLOBALS["config"];
    $server = $config["db"]["server"];
    $dbname = $config["db"]["dbname"];
    $username = $config["db"]["username"];
    $password = $config["db"]["password"];

    // Create connection to MySQL
    $conn = @mysqli_connect($server, $username, $password, $dbname);

    // Check if the connection is valid
    if (!$conn) {
        die("<div style='background-color: #e31a1a; padding: 20px; color: white;' class='error-div'>We are currently experiencing technical difficulties. Please email our staff and report the following error message: " . mysqli_connect_error() . " <br>Note to Admin: The MySQL Server could not be connected. Is MySQL enabled and running? Please read the enclosed README.txt for more information.<br> &mdash; The Cheeses of the World Team</div>");
    }

    return $conn;
}

/*
============================
Includes
============================
*/
require 'templates/navigation.php';
require 'templates/footer.php';
require 'templates/store-nav.php';
require 'templates/store-grid.php';
require 'templates/select.php';
require 'templates/image.php';

// Start a PHP Session
session_start();

/*
============================
Helper Functions
============================
*/

// Generates the contents of the <head> element in a consistent
// manner across the site. It uses the 'TITLE_FORMAT' global
// variable to format the given page title using printf.
function generate_head($title) {
    // Localises the global sprintf function
    $sprintf = 'sprintf';

    // Actual Output in HEREDOC Syntax
    $output = <<<HEREDOC

        <!-- Dynamically Generated Head Element -->
        <title>{$sprintf($GLOBALS["TITLE_FORMAT"], $title)}</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="/css/style-large.css">
        \n
HEREDOC;

    // Print the output to the screen
    echo $output;
}

// Wrapper around 'internal_generate_navigation()'.
function generate_navigation() {
    internal_generate_navigation();
}

// Wrapper around 'internal_generate_footer()'.
function generate_footer() {
    internal_generate_footer();
}

function generate_select($name, $array, $selected) {
    internal_generate_select($name, $array, $selected, false);
}

function generate_select_req($name, $array, $selected) {
    internal_generate_select($name, $array, $selected, true);
}

function generate_array_from_sql($sql, $id_field, $text_field) {
    return internal_generate_array_from_sql($sql, $id_field, $text_field);
}

function upload_image_to_store($image_name, $target_name) {
    return internal_upload_image_to_store($image_name, $target_name);
}

function get_image($cheese_id) {
    return internal_get_image($GLOBALS['ROOT_URL'], $cheese_id);
}

function generate_store_grid($length, $sql) {
    internal_generate_store_grid($length, $sql);
}

function generate_store_nav($title, $cart_url, $home_url, $is_home) {
    internal_generate_store_nav($title, $cart_url, $home_url, $is_home);
}
?>
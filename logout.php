<?php
// Initialize the session
session_start();

// Unset all of the session variables.
$_SESSION = array();

// Redirect to the home page
header("location: /index.php")
?>
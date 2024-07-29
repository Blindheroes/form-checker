<?php
session_start(); // Start the session

echo "logout";

// Check if a session exists before destroying it
if (session_id()) {
    session_destroy();
    $_SESSION = []; // Clear the session array
}

var_dump($_SESSION);

header('Location: ../index.php');
exit();

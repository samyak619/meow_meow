<?php
session_start();

// Decrement the session count
$_SESSION['session_count']--;

// If the session count reaches 0, destroy the session
if ($_SESSION['session_count'] <= 0) {
    session_destroy();
    header("Location: login.php"); // Redirect to the login page or wherever appropriate
    exit();
} else {
    // Redirect to a page indicating successful logout or perform other actions
    header("Location: successful_logout.php");
    exit();
}
?>

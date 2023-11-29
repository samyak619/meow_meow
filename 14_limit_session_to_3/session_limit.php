<?php
session_start();

// Set the maximum number of allowed concurrent sessions
$maxSessions = 3;

// Check if the user has an active session
if (isset($_SESSION['user_id'])) {
    // If the user already has a session, increment the session counter
    $_SESSION['session_count']++;
} else {
    // If the user does not have an active session, create a new one
    $_SESSION['user_id'] = session_id();
    $_SESSION['session_count'] = 1;
}

// Check if the maximum number of sessions is reached
if ($_SESSION['session_count'] > $maxSessions) {
    // If the maximum is reached, destroy the session and redirect to an error page
    session_destroy();
    header("Location: error_page.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concurrent Sessions Limit</title>
</head>
<body>
    <h1>Welcome to the Application</h1>
    <p>This is your active session number: <?php echo $_SESSION['session_count']; ?></p>
    <p>Do something useful here...</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

<?php
session_start();

// Destroy all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete all cookies by setting their expiration time 5 years ago
// Loop through all cookies
foreach ($_COOKIE as $key => $value) {
    // Set the cookie to expire 5 years ago
    setcookie($key, '', time() - (5 * 365 * 24 * 60 * 60), '/'); // Expire cookies by setting time to 5 years ago
}

// Redirect to login page (or home page) after logging out
header("Location: ./");  // You can change the location if needed
exit();
?>

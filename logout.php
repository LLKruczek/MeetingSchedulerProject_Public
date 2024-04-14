<?php
// logout.php

// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Output JSON response (optional)
header('Content-Type: application/json');
echo json_encode(['success' => true]);
exit();
?>

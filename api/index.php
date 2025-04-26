<?php
// Simple PHP test page

// Example of setting a cookie (optional at this point)
setcookie("visited", "true", time() + (86400 * 30), "/"); // 86400 = 1 day

// Displaying some basic info
echo "<h1>Welcome to the Strata Management System</h1>";
echo "<p>This page is powered by PHP running on Vercel!</p>";

// Showing PHP server info (optional, you can remove)
echo "<hr>";
echo "<h3>Server Info:</h3>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>

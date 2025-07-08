<?php
echo "<h1>Hello from PHP in Docker!</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Current time: " . date('Y-m-d H:i:s') . "</p>";

// Test database connection if MySQL is running
try {
    $pdo = new PDO('mysql:host=mysql;dbname=myapp', 'user', 'password');
    echo "<p>Database connection: ✅ Success</p>";
} catch (PDOException $e) {
    echo "<p>Database connection: ❌ Failed</p>";
}
?>

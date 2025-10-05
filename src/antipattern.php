<?php
$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
$users = $conn->query("SELECT * FROM users");
foreach ($users as $user) {
    echo "<li>{$user['name']}</li>";
}
?>

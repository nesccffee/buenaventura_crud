<?php
 
require 'db.php';
 
$sql = "SELECT * FROM users";
$stmt = $conn->prepare(query: $sql);
$stmt->execute();
$users = $stmt->fetchAll();
 
?>
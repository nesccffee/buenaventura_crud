<?php
 
require 'db.php';
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare(query: $sql);
 
    $stmt->bindParam(param: 'id', var: $id);
    $stmt->execute();
 
    header(header: "Location: ../index.php");
    exit();
}
?>
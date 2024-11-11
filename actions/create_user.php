<?php

require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $conn->prepare(query: $sql);
    $stmt->bindParam(param: ':name', var: $name);
    $stmt->bindParam(param: ':email', var: $email);
    $stmt->execute();

    header(header: "Location: ../index.php");
    exit();
}
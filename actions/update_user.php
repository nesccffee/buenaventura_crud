<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        try {
            // Prepare the SQL query to update the user
            $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
            $stmt = $conn->prepare($sql);

            // Bind parameters to the query
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id', $id);

            // Execute the query
            $stmt->execute();

            header("Location: ../index.php");
            exit();
        } catch(PDOException $e) {
            // Log error and show user-friendly message
            error_log($e->getMessage());
            echo "An error occurred while updating the user.";
        }
    } else {
        echo "Missing required fields.";
    }
} else {
    echo "Invalid request method.";
}
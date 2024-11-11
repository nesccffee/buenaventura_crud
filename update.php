<?php
require 'actions/db.php';

// kapag may id, dito napupunta
$user = null;
if (isset($_GET['id'])) {
    try {
        // kapag kinuha yung id, ifefetch nya yung data
        $user = $conn->query("SELECT * FROM users WHERE id = {$_GET['id']}")->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo "An error occurred while fetching the user.";
        exit();
    }
}

// kapag walang na fetch na data, mag eerror message
if (!$user) {
    echo "User not found or no ID provided";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form method="POST" action="actions/update_user.php">
        <!-- nakahide yung user ID -->
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <!-- Name input field na may value ng id -->
        <div class="input-box">
            <label for="name">Full name:</label>
            <input type="text" name="name" placeholder="Enter full name" value="<?= htmlspecialchars($user['name']) ?>" required>
        </div>
        
        <!-- Email input field na may value ng id -->
        <div class="input-box">
            <label for="email">Email Address:</label>
            <input type="email" name="email" placeholder="Enter email address" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn">Update</button>
    </form>
</body>
</html>
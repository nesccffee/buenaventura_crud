<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h2>Create User</h2>
    
        <form method="POST" action="actions/create_user.php">
            <!-- Name input -->
            <div class="input-box">
                <label for="name">Full name:</label>
                <input type="text" name="name" placeholder="Enter full name" required>
            </div>
            
            <!-- Email input -->
            <div class="input-box">
                <label for="email">Email Address:</label>
                <input type="email" name="email" placeholder="Enter email address" required>
            </div>
             <!-- Submit Button -->
              <button type="submit" class="btn">Create</button>
        </form>
</body>
</html>
    
    
    
    

<?php require 'actions/read_user.php'; ?>
 
<!DOCTYPE html>
<html>
 
<body>
<h2>User List</h2>
    <a href="create.php">Create New User</a>
        <table border="1">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    <?php foreach ($users as $user): ?>
<tr>
<td><?php echo $user['id']; ?></td>
<td><?php echo $user['name']; ?></td>
<td><?php echo $user['email']; ?></td>
<td>
<a href="update.php?id=<?php echo $user['id']; ?>">Edit</a>
<a href="actions/delete_user.php?id=<?php echo $user['id']; ?>">Delete</a>
</td>
</tr>
<?php endforeach; ?>
 
    </table>
</body>
</html>
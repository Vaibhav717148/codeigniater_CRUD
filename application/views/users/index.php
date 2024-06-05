<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>Users List</h1>
    <a href="<?php echo site_url('users/create'); ?>">Create New User</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                <td>
                    <a href="<?php echo site_url('users/view/' . $user->id); ?>">View</a>
                    <a href="<?php echo site_url('users/edit/' . $user->id); ?>">Edit</a>
                    <a href="<?php echo site_url('users/delete/' . $user->id); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>

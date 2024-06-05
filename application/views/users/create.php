<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>Create User</h1>
    <form action="<?php echo site_url('users/store'); ?>" method="post">
        <?php if (function_exists('csrf_field')): ?>
            <?php echo csrf_field(); // Include CSRF token if your framework supports it ?>
        <?php endif; ?>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Create</button>
    </form>
    <div class="back-page"><a href="<?php echo site_url('users'); ?>">Back to List</a></div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>
    <h1>Edit User</h1>
    <form action="<?php echo site_url('users/update/' . $user->id); ?>" method="post">
        <?php if (function_exists('csrf_field')) : ?>
            <?php echo csrf_field();  ?>
        <?php endif; ?>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <button type="submit">Update</button>
    </form>
    <div class="back-page"> <a href="<?php echo site_url('users'); ?>">Back to List</a></div>
</body>

</html>
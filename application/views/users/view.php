<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <h1>View User</h1>
    <div>
        <p><strong>ID:</strong> <?php echo htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
    <div class="back-page"><a href="<?php echo site_url('users'); ?>">Back to List</a>
    </div>
</body>
</html>

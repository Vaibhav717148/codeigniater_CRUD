<?php $this->load->view('header', array('title' => 'Create User')); ?>

<h1>Create User</h1>
<form action="<?php echo site_url('users/store'); ?>" method="post">
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" required>
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </p>
    <button type="submit">Create</button>
</form>
<a href="<?php echo site_url('users'); ?>">Back to List</a>

<?php $this->load->view('footer'); ?>

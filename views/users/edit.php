<?php include __DIR__ . '/../partials/header.php'; ?>

<form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="<?=$user->name?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?=$user->email?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">New Password (leave blank to keep current password)</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="New Password">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>

<?php include __DIR__ . '/../partials/pagefoot.php'; ?>

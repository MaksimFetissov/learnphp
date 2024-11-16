<?php include __DIR__ . '/../partials/header.php'; ?>

<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <th>ID</th>
            <td><?= $user->id ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $user->name ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $user->email ?></td>
        </tr>
        <tr>
            <th>Created At</th>
            <td><?= $user->created_at ?></td>
        </tr>
    </tbody>
</table>

<?php include __DIR__ . '/../partials/pagefoot.php'; ?>

<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
        <h3 class="text-center">Employee List</h3>
        <a href="<?= base_url('employees/create') ?>" class="btn btn-primary mb-3">Add Employee</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr>
                        <td><?= $employee['id'] ?></td>
                        <td><?= $employee['name'] ?></td>
                        <td><?= $employee['email'] ?></td>
                        <td><?= $employee['position'] ?></td>
                        <td>
                            <a href="<?= base_url('employees/edit/'.$employee['id']) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('employees/delete/'.$employee['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->endSection() ?>
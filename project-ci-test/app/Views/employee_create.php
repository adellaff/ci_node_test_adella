<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
        <h3 class="text-center">Add New Employee</h3>
        <form action="<?= base_url('employees/store') ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Add Employee</button>
        </form>
    </div>
<?= $this->endSection() ?>
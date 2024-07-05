<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
        <h3 class="text-center">Edit Employee</h3>
        <form action="<?= base_url('employees/update/'.$employee['id']) ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?= $employee['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $employee['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" value="<?= $employee['position'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update Employee</button>
        </form>
    </div>
<?= $this->endSection() ?>
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Dashboard</h3>
            <p>Welcome, <?= session()->get('username'); ?></p>
            <p>Your role ID is <?= session()->get('role_id'); ?></p>
            <a href="<?= base_url('/logout') ?>" class="btn btn-danger btn-block">Logout</a>
        </div>
    </div>
</div>
<!-- Your dashboard content here -->
<?= $this->endSection() ?>

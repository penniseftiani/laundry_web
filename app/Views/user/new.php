<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola User user permata Laundry</h3>
    <h2>Tambah User</h2>
    <form action="<?= base_url('user'); ?>" method="post">
        <label for="username" class="form-label">Username</label>
        <div class="input-group">
            <input type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="username" class="form-label">Password</label>
        <div class="input-group">
            <input type="text" class="form-control" id="password" name="password" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="username">Jabatan</label>
        <div>
            <input type="text" class="form-control" id="role" name="role" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">
        <a href="<?= base_url('user'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
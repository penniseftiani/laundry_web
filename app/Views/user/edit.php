<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola User Permata Laundry</h3>
    <div class="card-header">
        <div class="card-title">Edit User</div>
    </div>
    <?= $validation->listErrors(); ?>
    <form action="<?= base_url('user/' . $user['id']); ?>" method="post">
        <div class="card-body">
            <div class="mb-3">
                <?= csrf_field(); ?>
                <label for="username">Username</label>
                <div class="mb-3">
                    <input value="<?= $user['username']; ?>" type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="username">Password</label>
                <div class="mb-3">
                    <input value="<?= $user['password']; ?>" type="text" class="form-control" id="password" name="password" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="username">Jabatan</label>
                <div>
                    <input value="<?= $user['role']; ?>" type="text" class="form-control" id="role" name="role" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
                <a href="<?= base_url('user'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
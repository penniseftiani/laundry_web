<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola User
<?= $this->endSection('content') ?>

<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Kelola User Permata Laundry</h3>
    <a href="<?= base_url('user/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Tambah</a>
    <div class="table--container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($user as $u) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $u['username']; ?></td>
                        <td><?= $u['role']; ?></td>
                        <td>
                            <a href="<?= base_url('user') . '/' . $u['id'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post">Delete</a>
                            <a href="<?= base_url('user') . '/' . $u['id'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection('content') ?>
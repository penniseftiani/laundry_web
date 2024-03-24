<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola Member
<?= $this->endSection('content') ?>

<?= $this->section('content') ?>
<div class="tabular--wrapper">
                <h3 class="main--title">Kelola Member Permata Laundry</h3>
                <a href="<?= base_url('member/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Tambah</a>
                <div class="table--container">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama </th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $a = 1;
                                foreach ($member as $m) : ?>
                                    <tr>
                                        <td><?= $a++; ?></td>
                                        <td><?= $m['nama']; ?></td>
                                        <td><?= $m['alamat']; ?></td>
                                        <td><?= $m['telepon']; ?></td>
                                        <td>
                                            <a href="<?= base_url('member') . '/' . $m['id_member'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post">Delete</a>
                                            <a href="<?= base_url('member') . '/' . $m['id_member'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
<?= $this->endSection('content') ?>
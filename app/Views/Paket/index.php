<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola Paket
<?= $this->endSection('content') ?>

<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Paket Permata Laundry</h3>
    <a href="<?= base_url('paket/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Tambah</a>
    <div class="table--container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Paket</th>
                    <th>Harga Paket</th>
                    <th>Jenis Paket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($paket as $p) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $p['nama_paket']; ?></td>
                        <td><?= $p['harga_paket']; ?></td>
                        <td><?= $p['nama_jenis_paket']; ?></td>
                        <td>
                            <a href="<?= base_url('paket') . '/' . $p['id_paket'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post" onclick= "return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            <a href="<?= base_url('paket') . '/' . $p['id_paket'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection('content') ?>
<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola Jenis Paket
<?= $this->endSection('content') ?>

<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Jenis Paket Permata Laundry</h3>
    <a href="<?= base_url('jenispaket/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Tambah</a>
    <div class="table--container">
        <table id="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jenis Paket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($jenis_paket as $j) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $j['nama_jenis_paket']; ?></td>
                        <td>
                            <a href="<?= base_url('jenispaket') . '/' . $j['id_jenis_paket'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            <a href="<?= base_url('jenispaket') . '/' . $j['id_jenis_paket'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection('content') ?>
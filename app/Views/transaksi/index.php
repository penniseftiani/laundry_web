<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola Transaksi
<?= $this->endSection('content') ?>

<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Transaksi Permata Laundry</h3>
    <a href="<?= base_url('transaksi/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Tambah</a>
    <div class="table--container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kode Invoice </th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>ID Member</th>
                    <th>Tanggal Transaksi</th>
                    <th>Tanggal Selesai</th>
                    <th>Status Cucian</th>
                    <th>Status Bayar</th>
                    <th>Kasir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($transaksi as $t) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $t['kode_invoice']; ?></td>
                        <td><?= $t['nama']; ?></td>
                        <td><?= $t['alamat']; ?></td>
                        <td><?= $t['telepon']; ?></td>
                        <td><?= $t['id_member']; ?></td>
                        <td><?= $t['tgl_transaksi']; ?></td>
                        <td><?= $t['tanggal_selesai']; ?></td>
                        <td><?= $t['status_cucian']; ?></td>
                        <td><?= $t['status_bayar']; ?></td>
                        <td><?= $t['username']; ?></td>

                        <td>
                            <a href="<?= base_url('transaksi') . '/' . $t['id_transaksi'] . '/' . ('detail'); ?>" type="button" class="btn btn-primary btn-sm" method="post">Detail</a>
                            <a href="<?= base_url('transaksi') . '/' . $t['id_transaksi'] . '/' . ('delete'); ?>" type="button" class="btn btn-danger btn-sm" method="post">Delete</a>
                            <a href="<?= base_url('transaksi') . '/' . $t['id_transaksi'] . '/' . ('edit'); ?>" type="button" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection('content') ?>
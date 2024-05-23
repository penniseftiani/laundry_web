<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Kelola pembayaran
<?= $this->endSection('judul') ?>


<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Pembayaran Permata Laundry</h3>
    <a href="<?= base_url('pembayaran/new'); ?>" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3">Bayar</a>
    <div class="table--container">
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>No Invoice</th>
                    <th>Nama</th>
                    <th>Total Harga</th>
                    <th>Nominal Bayar</th>
                    <th>Kembalian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($pembayaran as $p) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $p['kode_invoice']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['total_harga']; ?></td>
                        <td><?= $p['uang_yang_dibayar']; ?></td>
                        <td><?= $p['kembalian']; ?></td>
                        <td><?= $p['status_bayar']; ?></td>
                        <td>
                            <a href="<?= base_url('pembayaran') . '/' . $p['id_transaksi'] . '/' . ('detail'); ?>" class="btn btn-primary btn-sm">Detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection('content') ?>
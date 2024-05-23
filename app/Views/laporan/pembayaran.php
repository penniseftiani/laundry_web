<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Halaman Laporan Pembayaran
<?= $this->endSection('judul') ?>


<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Laporan Pembayaran Permata Laundry</h3>
    <div class="table--container">
        <table id="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>No Invoice</th>
                    <th>Nama</th>
                    <th>Tanggal Bayar</th>
                    <th>Total Harga</th>
                    <th>Nominal Bayar</th>
                    <th>Kembalian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($pembayaran as $p) : ?>
                    <tr>
                        <td><?= $a++; ?></td>
                        <td><?= $p['kode_invoice']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['tanggal_bayar']; ?></td>
                        <td><?= $p['total_harga']; ?></td>
                        <td><?= $p['uang_yang_dibayar']; ?></td>
                        <td><?= $p['kembalian']; ?></td>
                        <td><?= $p['status_bayar']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection('content') ?>
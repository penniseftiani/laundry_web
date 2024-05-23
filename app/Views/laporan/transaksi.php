<?= $this->extend('template/index') ?>

<?= $this->section('judul') ?>Laporan Transaksi
<?= $this->endSection('judul') ?>


<?= $this->section('content') ?>
<div class="tabular--wrapper">
    <h3 class="main--title">Laporan Transaksi Permata Laundry</h3>
    <div class="table--container">
        <table id="table">
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
                    <th>Total</th>
                    <th>Status Cucian</th>
                    <th>Status Bayar</th>
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
                        <td><?= $t['total']; ?></td>
                        <td><?= $t['status_cucian']; ?></td>
                        <td><?= $t['status_bayar']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection('content') ?>
<?= $this->section('script') ?>
<script>
    $('#id_member').change(function() {
        var member = $(this).val();
        $.ajax({
            type: 'GET',
            url: '<?= base_url('ajax_member'); ?>',
            data: 'id_member=' + member,
            success: function(response) {
                console.log(response);
                //   $('#email').val(response);
            }
        });
    });
</script>
<?= $this->endSection('script') ?>
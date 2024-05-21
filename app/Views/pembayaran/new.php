<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Pembayaran Permata Laundry</h3>
    <h2>Tambah Pembayaran</h2>
    <form action="<?= base_url('pembayaran'); ?>" method="post">
        <label for="kode_invoice">Kode Invoice</label>
        <div>
            <select class="form-control" name="id_transaksi" id="id_transaksi">
                <?php foreach ($transaksi as $t) : ?>
                    <option selected value="<?= $t['id_transaksi']; ?>"> <?= $t['kode_invoice']; ?></option>
                    </option>
                <?php endforeach; ?>
            </select>
            <label for="basic-url" class="form-label">Nama</label>
            <div class="input-group">
                <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <label for="basic-url" class="form-label">Total harga</label>
            <div class="input-group">
                <input type="text" class="form-control" id="total" name="total" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <label for="basic-url" class="form-label">Nominal Bayar</label>
            <div class="input-group">
                <input type="text" class="form-control" id="uang_yang_dibayar" name="uang_yang_dibayar" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <label for="kembalian">Kembalian</label>
            <div class="input-group">
                <input type="text" class="form-control" id="kembalian" name="kembalian" aria-describedby="basic-addon3 basic-addon4">
            </div>
            <input type="submit" value="Kirim" class="btn btn-primary">
            <a href="<?= base_url('pembayaran'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
<?= $this->section('script') ?>
<script>
    $('#id_transaksi').change(function() {
        var transaksi = $(this).val();
        $.ajax({
            type: 'GET',
            url: '<?= base_url('ajax_transaksi'); ?>',
            dataType: 'json',
            data: 'id_transaksi=' + transaksi,
            success: function(response) {
                console.log(response);
                $('#total').val(response.total);
                $('#nama').val(response.nama);
                $('#status_cucian').val(response.status_cucian);
                //   $('#email').val(response);

                //   $('#email').val(response);
            }
        });
    });
</script>
<?= $this->endSection('script') ?>
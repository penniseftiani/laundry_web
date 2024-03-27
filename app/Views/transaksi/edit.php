<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Transaksi permata Laundry</h3>
    <h2>Tambah Transaksi</h2>
    <form action="<?= base_url('transaksi'); ?>" method="post">
        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
        <div class="input-group">
            <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="status_cucian" class="form-label">Status Cucian</label>
        <div class="input-group">
            <input type="text" class="form-control" id="status_cucian" name="status_cucian" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="status_bayar">Status Bayar</label>
        <div class="input-group">
            <input type="text" class="form-control" id="status_bayar" name="status_bayar" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="id_member">Member/UMUM</label>
        <div>
            <select class="form-control" name="id_member" id="id_member">
                <?php foreach ($member as $m) : ?>
                    <option selected value="<?= $m['id_member']; ['nama']; ['alamat']; ['telepon'];?>"></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">

        <a href="<?= base_url('member'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
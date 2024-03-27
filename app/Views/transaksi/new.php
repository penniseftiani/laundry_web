<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Transaksi Permata Laundry</h3>
    <h2>Tambah Transaksi</h2>
    <form action="<?= base_url('transaksi'); ?>" method="post">
    <label for="kode_invoice" class="form-label">Kode Invoice</label>
        <div class="input-group">
            <input type="text" class="form-control" id="kode_invoice" name="kode_invoice" aria-describedby="basic-addon3 basic-addon4">
        </div>
    <label for="nama" class="form-label">Nama</label>
        <div class="input-group">
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="alamat" class="form-label">Alamat</label>
        <div class="input-group">
            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="telepon" class="form-label">Telepon</label>
        <div class="input-group">
            <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="tgl_transaksi" class="form-label">Tanggal Transaksi</label>
        <div class="input-group">
            <input type="text" class="form-control" id="tgl_transaksi" name="tgl_transaksi" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
        <div class="input-group">
            <input type="text" class="form-control" id="tanggal_selesai" name="tanggal_selesai" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="id_paket" class="form-label">Pilih Paket</label>
        <div class="input-group">
            <input type="text" class="form-control" id="id_paket" name="id_paket" aria-describedby="basic-addon3 basic-addon4">
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
                <?php foreach ($member as $t) : ?>
                    <option selected value="<?= $t['id_member']; ?>"> <?= $t['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">

        <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
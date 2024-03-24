<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Jenis Paket Permata Laundry</h3>
    <h2>Tambah Jenis Paket</h2>
    <form action="<?= base_url('paket'); ?>" method="post">
        <label for="basic-url" class="form-label">Nama Paket</label>
        <div class="input-group">
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="basic-url" class="form-label">Harga Paket</label>
        <div class="input-group">
            <input type="text" class="form-control" id="harga_paket" name="harga_paket" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="id_jenis_paket">Jenis Paket</label>
        <div>
            <select class="form-control" name="id_jenis_paket" id="id_jenis_paket">
                <?php foreach ($jenis_paket as $p) : ?>
                    <option selected value="<?= $p['id_jenis_paket']; ?>"> <?= $p['nama_jenis_paket']; ?></option>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">
        <a href="<?= base_url('paket'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
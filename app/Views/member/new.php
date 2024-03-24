<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Memeber permata Laundry</h3>
    <h2>Tambah Member</h2>
    <form action="<?= base_url('member'); ?>" method="post">
        <label for="nama" class="form-label">Nama</label>
        <div class="input-group">
            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="alamat" class="form-label">Alamat</label>
        <div class="input-group">
            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <label for="telepon">Telepon</label>
        <div class="input-group">
            <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary">
        <a href="<?= base_url('member'); ?>" class="btn btn-danger">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
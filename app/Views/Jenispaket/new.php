<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Jenis Paket permata Laundry</h3>
    <h2>Tambah Jenis Paket</h2>
    <form action="<?= base_url('jenispaket'); ?>" method="post">
        <label for="nama_jenis_paket">Nama Jenis Paket:</label>
        <input type="text" id="nama_jenis_paket" name="nama_jenis_paket" required>
        <span class="error-message" id="error-nama"></span><br>

        <input type="submit" value="Kirim" class="btn btn-primary">
        <a href="<?= base_url('jenispaket'); ?>" class="btn btn-danger">Batal</a>

    </form>
</div>
<?= $this->endSection('content') ?>
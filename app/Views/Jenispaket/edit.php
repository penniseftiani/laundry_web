<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Jenis Paket permata Laundry</h3>
    <?= $validation->listErrors(); ?>
    <form action="<?= base_url('jenispaket/' . $jenis_paket['id_jenis_paket']); ?>" method="post">
        <div class="card-body">
            <div class="mb-3">
                <label for="basic-url" class="form-label"> Edit Nama jenis Paket</label>
                <div class="input-group">
                    <?= csrf_field(); ?>
                    <input value="<?= $jenis_paket['nama_jenis_paket']; ?>" type="text" class="form-control" id="nama_jenis_paket" name="nama_jenis_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
                <a href="<?= base_url('jenispaket'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
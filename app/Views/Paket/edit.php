<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Paket permata Laundry</h3>
    <div class="card-header">
        <h4 class="card-title">Edit Paket</h4>
    </div>
    <div class="card-body">
        <form action="<?= base_url('paket/' . $paket['id_paket']); ?>" method="post">
            <?= $validation->listErrors(); ?>
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_paket"> Nama Paket </label>
                <input value="<?= $paket['nama_paket']; ?>" type="text" class="form-control" id="nama_paket" name="nama_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
            </div>
            <div class="mb-3">
                <label for="nama_paket"> Harga Paket </label>
                <input value="<?= $paket['harga_paket']; ?>" type="text" class="form-control" id="harga_paket" name="harga_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
            </div>
            <div class="mb-3">
                <label for="nama_paket"> Jenis Paket </label>
                <select class="form-control" name="id_jenis_paket" id="id_jenis_paket">
                    <?php foreach ($jenis_paket as $p) : ?>
                        <?php if ($paket['id_jenis_paket'] == $p['id_jenis_paket']) : ?>
                            <option selected value="<?= $p['id_jenis_paket']; ?>"> <?= $p['nama_jenis_paket']; ?>
                            <?php else : ?>
                            <option value="<?= $p['id_jenis_paket']; ?>"><?= $p['nama_jenis_paket']; ?></option>
                            </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
            <a href="<?= base_url('paket'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?= $this->endSection('content') ?>
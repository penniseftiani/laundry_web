<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Paket permata Laundry</h3>
    <div class="card-header">
        <div class="card-title">Edit Nama Paket</div>
    </div>
    <?= $validation->listErrors(); ?>
    <form action="<?= base_url('paket/' . $paket['id_paket']); ?>" method="post">
        <div class="card-body">
            <div class="mb-3">
                <?= csrf_field(); ?>
                <label for="nama_paket"> Nama Paket </label>
                <div class="mb-3">
                    <input value="<?= $paket['nama_paket']; ?>" type="text" class="form-control" id="nama_paket" name="nama_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="nama_paket"> Harga Paket </label>
                <div class="mb-3">
                    <input value="<?= $paket['harga_paket']; ?>" type="text" class="form-control" id="harga_paket" name="harga_paket" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="nama_paket"> Jenis Paket </label>
                <div>
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
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
            <a href="<?= base_url('paket'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
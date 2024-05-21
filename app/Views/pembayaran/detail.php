<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola pembayaran Permata Laundry</h3>
    <div class="card-header">
        <h4 class="card-title">Detail pembayaran</h4>
    </div>
    <div class="card-body">
        <form action="<?= base_url('pembayaran/' . $pembayaran['id_pembayaran']); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="kode_invoice"> Kode Invoice </label>
                <input value="<?= $pembayaran['kode_invoice']; ?>" type="text" class="form-control" id="kode_invoice" name="nama_pembayaran" aria-describedby="basic-addon3 basic-addon4" autofocus>
            </div>
            <div class="mb-3">
                <label for="total_harga"> Total Harga </label>
                <input value="<?= $pembayaran['total_harga']; ?>" type="text" class="form-control" id="total_harga" name="harga_pembayaran" aria-describedby="basic-addon3 basic-addon4" autofocus>
            </div>
            <div class="mb-3">
                <label for="nama_pembayaran"> Jenis pembayaran </label>
                <select class="form-control" name="id_jenis_pembayaran" id="id_jenis_pembayaran">
                    <?php foreach ($jenis_pembayaran as $p) : ?>
                        <?php if ($pembayaran['id_jenis_pembayaran'] == $p['id_jenis_pembayaran']) : ?>
                            <option selected value="<?= $p['id_jenis_pembayaran']; ?>"> <?= $p['nama_jenis_pembayaran']; ?>
                            <?php else : ?>
                            <option value="<?= $p['id_jenis_pembayaran']; ?>"><?= $p['nama_jenis_pembayaran']; ?></option>
                            </option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-2">Submit</button>
            <a href="<?= base_url('pembayaran'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?= $this->endSection('content') ?>
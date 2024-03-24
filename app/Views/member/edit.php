<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Member</h3>
    <?= $validation->listErrors(); ?>
    <form action="<?= base_url('member/' . $member['id_member']); ?>" method="post">
        <div class="card-body">
            <div class="mb-3">
                <label for="basic-url" class="form-label"> Edit Nama member</label>
                <div class="input-group">
                    <?= csrf_field(); ?>
                    <input value="<?= $member['nama']; ?>" type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="alamat">Alamat</label>
                <div class="mb-3">
                    <input value="<?= $member['alamat']; ?>" type="text" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <label for="telepon">No Telepon</label>
                <div class="mb-3">
                    <input value="<?= $member['telepon']; ?>" type="text" class="form-control" id="telepon" name="telepon" aria-describedby="basic-addon3 basic-addon4" autofocus>
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
                <a href="<?= base_url('member'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>
<?= $this->endSection('content') ?>
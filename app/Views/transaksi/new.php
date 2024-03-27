<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Transaksi Permata Laundry</h3>
    <h2>Tambah Transaksi</h2>

    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('transaksi/add_detail'); ?>" method="post">
                        <label for="id_paket" class="form-label">Paket</label>
                        <div class="input-group mb-2">
                            <select name="id_paket" id="id_paket" class="form-control">
                                <?php foreach ($paket as $d) : ?>
                                    <option value="<?= $d['id_paket']; ?>"><?= $d['nama_paket']; ?> | <?= $d['harga_paket']; ?> | <?= $d['nama_jenis_paket']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <label for="qty" class="form-label">Qty</label>
                        <div class="input-group mb-2">
                            <input type="number" step="0.01" class="form-control" id="qty" name="qty">
                        </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card mb-2">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Paket</th>
                                <th>Qty</th>
                                <th>SubTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1;
                            foreach ($detail_transaksi as $d) : ?>
                                <tr>
                                    <td><?= $a++; ?></td>
                                    <td><?= $d['nama_paket']; ?> | <?= $d['harga_paket']; ?> | <?= $d['nama_jenis_paket']; ?></td>
                                    <td><?= $d['qty']; ?></td>
                                    <td><?= $d['subtotal']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card border-danger">
                <div class="card-body">
                    <form action="<?= base_url('transaksi'); ?>" method="post">
                        <label for="kode_invoice" class="form-label">Kode Invoice</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="kode_invoice" name="kode_invoice" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="id_member">Member/UMUM</label>
                        <div class="input-group mb-2">
                            <select class="form-control" name="id_member" id="id_member">
                                <?php foreach ($member as $t) : ?>
                                    <option value="<?= $t['id_member']; ?>"><?= $t['id_member']; ?> | <?= $t['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <label for="nama" class="form-label">Nama</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="telepon" class="form-label">Telepon</label>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="tgl_transaksi" class="form-label">Tanggal Transaksi</label>
                        <div class="input-group mb-2">
                            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                        <div class="input-group mb-2">
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="status_cucian" class="form-label">Status Cucian</label>
                        <div class="input-group mb-2">
                            <select name="status_cucian" id="status_cucian" class="form-control">
                                <option>baru</option>
                                <option>sedang dicuci</option>
                                <option>sedang disetrika</option>
                                <option>selesai</option>
                            </select>
                        </div>
                        <label for="status_bayar">Status Bayar</label>
                        <div class="input-group mb-2">
                            <select name="status_bayar" id="status_bayar" class="form-control">
                                <option>belum lunas</option>
                                <option>lunas</option>
                            </select>
                        </div>

                        <input type="submit" value="Kirim" class="btn btn-primary">

                        <a href="<?= base_url('transaksi'); ?>" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection('content') ?>
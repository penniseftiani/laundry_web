<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <h3 class="main--title">Kelola Transaksi Permata Laundry</h3>
    <h2>Edit Transaksi</h2>

    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card">
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
            <div class="card mt-2">
                <div class="card-body">
                    <label for="kode_invoice" class="form-label">Kode Invoice</label>
                    <div class="input-group mb-2">
                        <input disabled type="text" readonly value="<?= $transaksi['kode_invoice']; ?>" class="form-control" id="kode_invoice" name="kode_invoice" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="id_member">Member/UMUM</label>
                    <div class="input-group mb-2">
                        <select disabled class="form-control" name="id_member" id="id_member">
                            <?php foreach ($member as $t) : ?>
                                <?php if ($transaksi['id_member'] == $t['id_member']) : ?>
                                    <option selected value="<?= $t['id_member']; ?>"><?= $t['id_member']; ?> | <?= $t['nama']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $t['id_member']; ?>"><?= $t['id_member']; ?> | <?= $t['nama']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <label for="nama" class="form-label">Nama</label>
                    <div class="input-group mb-2">
                        <input disabled value="<?= $transaksi['nama']; ?>" class="form-control" id="nama" name="nama" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="alamat" class="form-label">Alamat</label>
                    <div class="input-group mb-2">
                        <input disabled value="<?= $transaksi['alamat']; ?>" class="form-control" id="alamat" name="alamat" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="telepon" class="form-label">Telepon</label>
                    <div class="input-group mb-2">
                        <input disabled value="<?= $transaksi['telepon']; ?>" class="form-control" id="telepon" name="telepon" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="tgl_transaksi" class="form-label">Tanggal Transaksi</label>
                    <div class="input-group mb-2">
                        <input disabled value="<?= $transaksi['tgl_transaksi']; ?>" class="form-control" id="tgl_transaksi" name="tgl_transaksi" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                    <div class="input-group mb-2">
                        <input disabled value="<?= $transaksi['tanggal_selesai']; ?>" class="form-control" id="tanggal_selesai" name="tanggal_selesai" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="card border-danger">
                <div class="card-body">
                    <form action="<?= base_url('transaksi/' . $transaksi['id_transaksi']); ?>" method="post">
                        <?= csrf_field(); ?>
                        <label for="status_cucian" class="form-label">Status Cucian</label>
                        <div class="input-group mb-2">
                            <select name="status_cucian" id="status_cucian" class="form-control">
                                <option <?= ($transaksi['status_cucian'] == 'baru') ? 'selected' : ''; ?>>baru</option>
                                <option <?= ($transaksi['status_cucian'] == 'sedang dicuci') ? 'selected' : ''; ?>>sedang dicuci</option>
                                <option <?= ($transaksi['status_cucian'] == 'sedang disetrika') ? 'selected' : ''; ?>>sedang disetrika</option>
                                <option <?= ($transaksi['status_cucian'] == 'selesai') ? 'selected' : ''; ?>>selesai</option>
                                <option <?= ($transaksi['status_cucian'] == 'cancel') ? 'selected' : ''; ?>>cancel</option>
                            </select>
                        </div>
                        <label for="total" class="form-label">Total Harga</label>
                        <div class="input-group mb-2">
                            <input disabled type="text" readonly value="<?= $transaksi['total']; ?>" class="form-control" id="total" name="total" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="uang_yang_dibayar" class="form-label">Pembayaran</label>
                        <div class="input-group mb-2">
                            <input type="number" value="<?= $pembayaran['uang_yang_dibayar']; ?>" class="form-control" id="uang_yang_dibayar" name="uang_yang_dibayar" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="kembalian" class="form-label">Kembalian</label>
                        <div class="input-group mb-2">
                            <input disabled type="number" value="<?= $pembayaran['kembalian']; ?>" class="form-control" id="kembalian" name="kembalian" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="status_bayar">Status Bayar</label>
                        <div class="input-group mb-2">
                            <select name="status_bayar" id="status_bayar" class="form-control">
                                <option <?= ($transaksi['status_bayar'] == 'belum lunas') ? 'selected' : ''; ?>>belum lunas</option>
                                <option <?= ($transaksi['status_bayar'] == 'lunas') ? 'selected' : ''; ?>>lunas</option>
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
<?= $this->section('script') ?>
<script>
    $('#uang_yang_dibayar').on('keyup', function() {
        var total = parseInt($('#total').val());
        var uang_yang_dibayar = parseInt($('#uang_yang_dibayar').val());
        var kembalian = uang_yang_dibayar - total;
        $('#kembalian').val(kembalian)
    })
</script>

<?= $this->endSection('script') ?>
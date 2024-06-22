<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Struk Transaksi</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    <h4 class="text-center">Permata Laundry</h4>
    <p class="text-center">Jl.D.I Pandjaitan, Gg. Sukun, Kecamatan Subang, Kabupaten Subang</p>
    <hr class="border-bottom">
    <div>
        <p><b><?= $transaksi['kode_invoice'] ?></b></p>
        <p><?= $transaksi['nama'] ?></p>
        <p><?= $transaksi['alamat'] ?></p>
        <div class="row">
            <div class="col-6">
                <p><?= date('Y-m-d', strtotime($transaksi['tgl_transaksi'])) ?></p>
            </div>
            <div class="col-6">
                <p><?= date('Y-m-d', strtotime($transaksi['tanggal_selesai'])) ?></p>
            </div>
        </div>
        <p>Status: <?= strtoupper($transaksi['status_bayar']) ?></p>
    </div>
    <hr class="border-bottom">
    <!-- Item Transaksi -->
    <?php foreach($detail_transaksi as $item): ?>
    <div class="d-flex flex-row justify-content-end align-items-end">
        <div class="col-6">
            <p><?= $item['nama_paket'] ?></p>
            <p><?= $item['qty'] ?> X Rp. <?= number_format($item['harga_paket'],0,',','.') ?></p>
        </div>
        <div class="col-6">
            <p>Rp. <?= number_format($item['subtotal'],0,',','.') ?></p>
        </div>
    </div>
    <?php endforeach; ?>
    <hr class="border-bottom">
    <div class="d-flex flex-row">
        <div class="col-6">
            <p>Total</p>
        </div>
        <div class="col-6">
            <p>Rp. <?= number_format($pembayaran['total_harga'],0,',','.') ?></p>
        </div>
    </div>
    <div class="d-flex flex-row">
        <div class="col-6">
            <p>Bayar (Cash)</p>
        </div>
        <div class="col-6">
        <p>Rp. <?= number_format($pembayaran['uang_yang_dibayar'],0,',','.') ?></p>
        </div>
    </div>
    
    <?php if($transaksi['status_bayar'] != 'lunas' ): ?>
    <div class="d-flex flex-row">
        <div class="col-6">
            <p>Sisa Tagihan</p>
        </div>
        <div class="col-6">
            <p>Rp. <?= number_format(($pembayaran['total_harga'] - $pembayaran['uang_yang_dibayar']),0,',','.') ?></p>
        </div>
    </div>
    <?php endif; ?>
    <div class="d-flex flex-row">
        <div class="col-6">
            <p>Kembali</p>
        </div>
        <div class="col-6">
            <p>Rp. <?= number_format($pembayaran['kembalian'],0,',','.') ?></p>
        </div>
    </div>
    <b>
    <h4 class="text-center">------- Terima Kasih -------</h4>
    <script>
        window.print()
    </script>
</body>
</html>
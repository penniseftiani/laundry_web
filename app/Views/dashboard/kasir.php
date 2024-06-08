<?= $this->extend('template/index') ?>

<?= $this->section('content') ?>

<div class="tabular--wrapper">
    <div class="card--container">
        <h3 class="main--title">Data Laundry</h3>
        <div class="card--wrapper">
            <div class="payment--card light-red">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                            Total Transaksi
                        </span>
                        <span class="amount--value">Rp.<?= number_format($total_transaksi, 0, ',', '.'); ?></span>
                    </div>
                    <i class="fas fa-rupiah-sign icon"></i>
                </div>
                <span class="card-detail">****</span>
            </div>
            <div class="payment--card light-red">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                            Total Pembayaran
                        </span>
                        <span class="amount--value">Rp.<?= number_format($total_pembayaran, 0, ',', '.'); ?></span>
                    </div>
                    <i class="fas fa-rupiah-sign icon"></i>
                </div>
                <span class="card-detail">****</span>
            </div>

            <div class="payment--card light-purple">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                            Jumlah transaksi
                        </span>
                        <span class="amount--value"><?= $jumlah_transaksi; ?></span>
                    </div>
                    <i class="fas fa-list icon dark-purple"></i>
                </div>
                <span class="card-detail">****</span>
            </div>
            <div class="payment--card light-blue">
                <div class="card--header">
                    <div class="amount">
                        <span class="title">
                            jumlah pembayaran
                        </span>
                        <span class="amount--value"><?= $jumlah_pembayaran; ?></span>
                    </div>
                    <i class="fas fa-check icon dark-blue"></i>
                </div>
                <span class="card-detail">****</span>
            </div>
        </div>
    </div>
    <div class="tabular--wrapper">
        <h3 class="main--title">Ringkasan Data Transaksi</h3>
        <div class="table--container">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kode Invoice</th>
                        <th>Nama Pelanggan</th>
                        <th>Total</th>
                        <th>Status Cucian</th>
                        <th>Status Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $t) : ?>
                        <tr>
                            <td><?= $t['tgl_transaksi']; ?></td>
                            <td><?= $t['kode_invoice']; ?></td>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['total']; ?></td>
                            <td><?= $t['status_cucian']; ?></td>
                            <td><?= $t['status_bayar']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
    <?= $this->endSection('content') ?><?= $this->extend('template/index') ?>

    <?= $this->section('content') ?>

    <div class="tabular--wrapper">
        <div class="card--container">
            <h3 class="main--title">Data Laundry</h3>
            <div class="card--wrapper">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Total Transaksi
                            </span>
                            <span class="amount--value">Rp.<?= number_format($total_transaksi, 0, ',', '.'); ?></span>
                        </div>
                        <i class="fas fa-rupiah-sign icon"></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Total Pembayaran
                            </span>
                            <span class="amount--value">Rp.<?= number_format($total_pembayaran, 0, ',', '.'); ?></span>
                        </div>
                        <i class="fas fa-rupiah-sign icon"></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>

                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Jumlah transaksi
                            </span>
                            <span class="amount--value"><?= $jumlah_transaksi; ?></span>
                        </div>
                        <i class="fas fa-list icon dark-purple"></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>
                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                jumlah pembayaran
                            </span>
                            <span class="amount--value"><?= $jumlah_pembayaran; ?></span>
                        </div>
                        <i class="fas fa-check icon dark-blue"></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>
            </div>
        </div>
        <div class="tabular--wrapper">
            <h3 class="main--title">Ringkasan Data Transaksi</h3>
            <div class="table--container">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Invoice</th>
                            <th>Nama Pelanggan</th>
                            <th>Total</th>
                            <th>Status Cucian</th>
                            <th>Status Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transaksi as $t) : ?>
                            <tr>
                                <td><?= $t['tgl_transaksi']; ?></td>
                                <td><?= $t['kode_invoice']; ?></td>
                                <td><?= $t['nama']; ?></td>
                                <td><?= $t['total']; ?></td>
                                <td><?= $t['status_cucian']; ?></td>
                                <td><?= $t['status_bayar']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
        <?= $this->endSection('content') ?>
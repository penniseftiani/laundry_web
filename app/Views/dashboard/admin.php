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
                                Detail Transaksi
                            </span>
                            <span class="amount--value">Rp500.00</span>
                        </div>
                        <i class="fas fa-rupiah-sign icon"></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>
                <div class="payment--card light-purple">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Jumlah Order Cucian
                            </span>
                            <span class="amount--value">20 Prs</span>
                        </div>
                        <i class="fas fa-list icon dark-purple" ></i>
                    </div>
                    <span class="card-detail">****</span>
                </div>
                <div class="payment--card light-blue">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Status Cucian
                            </span>
                            <span class="amount--value">Selesai</span>
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
                                <th>Jenis Paket</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <?= $this->endSection('content') ?>
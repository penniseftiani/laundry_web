<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Paket</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/b.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body class="body-admin">
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-chart-bar"></i>
                    <span>Kelola Paket</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-user-alt"></i>
                    <span>Kelola User</span>
                </a>
            </li>
            <li class="logout">
                <a href="<?= base_url('logout') ?>">
                    <i class="fas fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span><h2>Dashboard<h2></span>
                <h4>Admin</h4>
            </div>
            <div class="user--info">
                <div class="searh--box">
                <i class="fa-solid fa-search"></i>
                <input type="text" placeholder="Serach"/>
                </div>
                <img src="<?= base_url('image/cupita.jpg') ?>" alt=""/>
            </div>
        </div>

        <!-- <div class="card--container">
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
            <div class="tabular--wrapper"> -->
                <h3 class="main--title">Kelola Paket permata Laundry</h3>
                <a href="tambahpaket" style="text-decoration: none; margin:none" class="btn btn-primary btn-sm mb-3>Tambah</a>
                <div class="table--container">
                    <table>
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Paket</th>
                                <th>Harga Paket</th>
                                <th>Jenis Paket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </body>
</html>

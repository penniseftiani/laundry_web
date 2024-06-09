<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Laundry</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- link font untuk style script dan strait dari google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Strait&family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('homepage/style.css') ?>">
</head>

<body>
    <nav>
        <div class="header">
            <div class="logo"><a href="">Permata Laundry</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?= base_url('login') ?>" class="tbl-biru">Login</a></li>
                    <li><a href="<?= base_url('cek_invoice') ?>" style="color: white">Cek Kode Invoice</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Cek Kode Invoice
                    </div>
                    <div class="card-body text-center">
                        <form action="" method="get">
                            <input type="text" name="kode_invoice" class="form-control">
                            <button class="btn btn-primary " type="submit">submit</button>
                        </form>
                        <?php if ($data) : ?>
                            <div>
                                <table class="table">
                                    <tr>
                                        <td>Kode Invoice</td>
                                        <td><?= $data['kode_invoice']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><?= $data['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td><?= $data['tgl_transaksi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nominal</td>
                                        <td><?= $data['total']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>status cucian</td>
                                        <td><?= $data['status_cucian']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>status bayar</td>
                                        <td><?= $data['status_bayar']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        <?php else : ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
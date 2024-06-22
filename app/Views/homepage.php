<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Laundry</title>
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
            <div class="menu
            ">
                <ul>
                    <!-- <li><a href="<?= base_url('login') ?>" class="tbl-biru">Login</a></li> -->
                    <li><a href="<?= base_url('cek_invoice') ?>" style="color: white">Cek Kode Invoice</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="Login">
            <img src="<?= base_url('homepage/image/order_map.png') ?>">
            <div class="kolom">
                <p class="deskripsi">Permata Laundry </p>
                <h4>Solusi Tepat untuk yang tidak Sempat</h4>
                <p>Jln.D.I Pandjaitan Gg.Sukun Kota Subang Kabupaten Subang
                </p>
                <!-- <p><a href="" class="tbl-pink">Detail Mengenai Toko</a></p> -->
            </div>
        </section>
    </div>
</body>

</html>
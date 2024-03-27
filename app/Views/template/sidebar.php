<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li class="active">
            <a href="<?= base_url('dashboard'); ?>">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('member'); ?>">
                <i class="fas fa-user-alt"></i>
                <span>Kelola Member</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('transaksi'); ?>">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Kelola Transaksi</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('paket'); ?>">
                <i class="fas fa-chart-bar"></i>
                <span>Kelola Paket</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('jenispaket'); ?>">
                <i class="fas fa-chart-bar"></i>
                <span>Kelola Jenis Paket</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('user'); ?>">
                <i class="fa-regular fa-circle-user"></i>
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
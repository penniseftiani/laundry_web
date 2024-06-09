<div class="header--wrapper">
    <div class="header--title">
        <span>
            <h2>Dashboard<h2>
        </span>
        <h4><?= session()->get('role'); ?> - <?= session()->get('username'); ?></h4>
    </div>
    <div class="user--info">
        <!-- <div class="searh--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Serach" />
        </div> -->
        <img src="<?= base_url('assets/dist/img/order_map.png') ?>" alt="" />
    </div>
</div>
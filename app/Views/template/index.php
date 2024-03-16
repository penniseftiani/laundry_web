<?= $this->include('template/header'); ?>
<?= $this->include('template/sidebar'); ?>
<div class="main--content">
<?= $this->include('template/topbar'); ?>
<?= $this->renderSection('content'); ?>
</div>
<?= $this->include('template/footer'); ?>

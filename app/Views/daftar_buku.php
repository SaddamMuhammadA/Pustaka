<?= $this->extend('layouts/matrix') ?>

<?= $this->section('content') ?>

<!-- Informasi pesan sukses -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-primary" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

ini adalah daftar buku

<?= $this->endSection() ?>
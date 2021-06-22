<?= $this->extend('layout/template.php'); ?>

<?= $this->section('link'); ?>
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div id="thanks" class="container-fluid text-center">
    <h1 class="mb-4">Terimakasih sudah datang!</h1>
    <button class="btn btn-danger" onclick="window.location.href = '/'">KELUAR</button>
</div>
<?= $this->endSection(); ?>
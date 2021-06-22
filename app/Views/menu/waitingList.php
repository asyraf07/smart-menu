<?= $this->extend('layout/template.php'); ?>

<?= $this->section('link'); ?>
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<h1 class="text-center my-3">MEJA <?= $id; ?></h1>

<div class="menu-section px-5">
    <div class="menu-title mb-2">
        Sedang disiapkan
    </div>
    <div class="menu-table-container">
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>

            <!-- Tabel Pesanan yang sedang dikerjakan -->

            <tbody id="tabelWait">
            </tbody>
        </table>
    </div>
</div>

<div class="menu-section px-5">
    <div class="menu-title mb-2">
        Selesai
    </div>
    <div class="menu-table-container">
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody id="tabelDone">

                <!-- Tabel Pesanan yang sudah selesai -->

            </tbody>
        </table>
    </div>
</div>

<div class="menu-section px-5">
    <div class="menu-title mb-2">
        Dibatalkan
    </div>
    <div class="menu-table-container">
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama Pesanan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody id="tabelCancel">

                <!-- Tabel Pesanan yang dicancel -->

            </tbody>
        </table>
    </div>
</div>

<div class="checkout text-right">
    <div class="btn btn-success w-25 py-2 m-4" onclick="window.location.href = '/menu/<?= $id; ?>/checkout'">CHECKOUT</div>
</div>

<script>
    function getWaitData() {
        $.ajax({
            type: 'post',
            url: '/Menu/update/<?= $id; ?>/wait',
            success: function(response) {
                $("#tabelWait").html(response);
            },
            error: () => {
                $("#tabelWait").empty().append(`<h1 class="text-right">Terjadi Kesalahan!</h1>`)
            }
        });
    }


    function getDoneData() {
        $.ajax({
            type: 'post',
            url: '/Menu/update/<?= $id; ?>/done',
            success: function(response) {
                $("#tabelDone").html(response)
            },
            error: () => {
                $("#tabelDone").empty().append(`<h1 class="text-right">Terjadi Kesalahan!</h1>`)
            }
        });
    }

    function getCancelData() {
        $.ajax({
            type: 'post',
            url: '/Menu/update/<?= $id; ?>/cancel',
            success: function(response) {
                $("#tabelCancel").html(response)
            },
            error: () => {
                $("#tabelCancel").empty().append(`<h1 class="text-right">Terjadi Kesalahan!</h1>`)
            }
        });
    }

    $(document).ready(() => {
        setInterval(getWaitData, 2000)
        setInterval(getDoneData, 2000)
        setInterval(getCancelData, 2000)
    });
</script>

<?= $this->endSection(); ?>
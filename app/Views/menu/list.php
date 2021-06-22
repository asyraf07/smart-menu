<?= $this->extend('layout/template.php'); ?>

<?= $this->section('link'); ?>
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="menu-container">

    <div class="menu-section">
        <div class="menu-title">
            MAKANAN
        </div>
        <div class="menu-card-container">
            <?php
            if (count($makanan) > 0) :
                foreach ($makanan as $a) :
            ?>
                    <?php if ($a['stok'] < 1) :
                        echo "<div class='menu-card'>";
                        echo "<div class='sold'>HABIS!</div>";
                    else : ?>
                        <div class="menu-card" id='cardId-<?= $a['id']; ?>' onclick="tambahPesanan('<?= $a['id']; ?>')">
                        <?php endif; ?>
                        <div class="gambar">
                            <img src="/img/menu/<?= $a['gambar']; ?>" alt="">
                        </div>
                        <div class="nama" id='menuNama-<?= $a['id']; ?>'><?= $a['nama']; ?></div>
                        <div class="deskripsi"><?= $a['keterangan']; ?></div>
                        <div class="harga" id='menuHarga-<?= $a['id']; ?>'>Rp. <?= number_format($a['harga'], 0, '', ','); ?></div>
                        <div class="stok">stok: <?= $a['stok']; ?></div>
                        </div>
                    <?php
                endforeach;
            else :
                    ?>
                    <h1>MENU TIDAK TERSEDIA!</h1>
                <?php endif; ?>
        </div>
    </div>
    <div class="menu-section">
        <div class="menu-title">
            MINUMAN
        </div>
        <div class="menu-card-container">


            <?php
            if (count($minuman) > 0) :
                foreach ($minuman as $a) :
            ?>
                    <?php if ($a['stok'] < 1) :
                        echo "<div class='menu-card'>";
                        echo "<div class='sold'>HABIS!</div>";
                    else : ?>
                        <div class="menu-card" id='cardId-<?= $a['id']; ?>' onclick="tambahPesanan('<?= $a['id']; ?>')">
                        <?php endif; ?>
                        <div class="gambar">
                            <img src="/img/menu/<?= $a['gambar']; ?>" alt="">
                        </div>
                        <div class="nama" id='menuNama-<?= $a['id']; ?>'><?= $a['nama']; ?></div>
                        <div class="deskripsi"><?= $a['keterangan']; ?></div>
                        <div class="harga" id='menuHarga-<?= $a['id']; ?>'>Rp. <?= number_format($a['harga'], 0, '', ','); ?></div>
                        <div class="stok">stok: <?= $a['stok']; ?></div>
                        </div>
                    <?php
                endforeach;
            else :
                    ?>
                    <h1>MENU TIDAK TERSEDIA!</h1>
                <?php endif; ?>

        </div>
    </div>
    <div class="menu-section">
        <div class="menu-title">
            SNACK
        </div>
        <div class="menu-card-container">


            <?php
            if (count($snack) > 0) :
                foreach ($snack as $a) :
            ?>
                    <?php if ($a['stok'] < 1) :
                        echo "<div class='menu-card'>";
                        echo "<div class='sold'>HABIS!</div>";
                    else : ?>
                        <div class="menu-card" id='cardId-<?= $a['id']; ?>' onclick="tambahPesanan('<?= $a['id']; ?>')">
                        <?php endif; ?>
                        <div class="gambar">
                            <img src="/img/menu/<?= $a['gambar']; ?>" alt="">
                        </div>
                        <div class="nama" id='menuNama-<?= $a['id']; ?>'><?= $a['nama']; ?></div>
                        <div class="deskripsi"><?= $a['keterangan']; ?></div>
                        <div class="harga" id='menuHarga-<?= $a['id']; ?>'>Rp. <?= number_format($a['harga'], 0, '', ','); ?></div>
                        <div class="stok">stok: <?= $a['stok']; ?></div>
                        </div>
                    <?php
                endforeach;
            else :
                    ?>
                    <h1>MENU TIDAK TERSEDIA!</h1>
                <?php endif; ?>

        </div>
        <div class="menu-section">
            <div class="menu-title">
                DESERT
            </div>
            <div class="menu-card-container">


                <?php
                if (count($desert) > 0) :
                    foreach ($desert as $a) :
                ?>
                        <?php if ($a['stok'] < 1) :
                            echo "<div class='menu-card'>";
                            echo "<div class='sold'>HABIS!</div>";
                        else : ?>
                            <div class="menu-card" id='cardId-<?= $a['id']; ?>' onclick="tambahPesanan('<?= $a['id']; ?>')">
                            <?php endif; ?>
                            <div class="gambar">
                                <img src="/img/menu/<?= $a['gambar']; ?>" alt="">
                            </div>
                            <div class="nama" id='menuNama-<?= $a['id']; ?>'><?= $a['nama']; ?></div>
                            <div class="deskripsi"><?= $a['keterangan']; ?></div>
                            <div class="harga" id='menuHarga-<?= $a['id']; ?>'>Rp. <?= number_format($a['harga'], 0, '', ','); ?></div>
                            <div class="stok">stok: <?= $a['stok']; ?></div>
                            </div>
                        <?php
                    endforeach;
                else :
                        ?>
                        <h1>MENU TIDAK TERSEDIA!</h1>
                    <?php endif; ?>

            </div>
        </div>
    </div>


</div>

<div style="color: black;" class="pesanan-container">
    <div class="pesanan-header">
        PESANAN
    </div>
    <div class="pesanan-detail-container">

        <!-- PESANAN GOES HERE -->

    </div>
    <div class="pesanan-total">
        <span>Total harga :</span>
        <span id="totalHargaAll">Rp. 0</span>
    </div>
    <div class="pesanan-tombol">
        <button class="btn btn-success" onclick="submit()">PESAN</button>
        <button class="btn btn-danger" onclick="window.location.href = '/menu/<?= $id_meja; ?>';">CANCEL</button>
    </div>
</div>

<template id="my-template">
    <swal-title>
        Silahkan pilih pesanan terlebih dahulu!
    </swal-title>
    <swal-icon type="warning" color="red"></swal-icon>
    <swal-button type="cancel">
        Cancel
    </swal-button>
    <swal-param name="allowEscapeKey" value="false" />
    <swal-param name="customClass" value='{ "popup": "my-popup" }' />
</template>

<script>
    // Sweatalert2 SCRIPT
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1400,
        timerProgressBar: false,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    const fireMenuToast = (menuId, status) => {
        const nama = $(`#menuNama-${menuId}`).html();

        if (status === 'add') {
            Toast.fire({
                icon: 'success',
                title: `${nama} berhasil ditambahkan!`
            })
        } else if (status === 'sold') {
            const stok = parseInt(
                $(`#cardId-${menuId}`)
                .find('.stok')
                .html()
                .replace(/[^\d.]/g, '')
                .replace('.', '')
            );
            Toast.fire({
                icon: 'warning',
                title: `Stok ${nama} hanya ${stok}`,
            })
        }
    }

    // ORDERING SCRIPT
    const pesanan = {};

    const calculateTotalHargaAll = () => {
        let hasil = 0;
        for (var id in pesanan) {
            hasil += pesanan[id].harga;
        };
        return hasil;
    }

    const tambahPesanan = (menuId) => {

        const menuNama = `#menuNama-${menuId}`
        const menuHarga = `#menuHarga-${menuId}`

        const namaPesanan = $(menuNama).html();
        const harga = parseInt(
            $(menuHarga)
            .html()
            .replace(/[^\d.]/g, '')
            .replaceAll('.', '')
        );

        const stok = parseInt(
            $(`#cardId-${menuId}`)
            .find('.stok')
            .html()
            .replace(/[^\d.]/g, '')
        );


        // Cek apakah menu belum ada
        if (!pesanan[menuId]) { // Jika menu belum ada :
            fireMenuToast(menuId, 'add');
            // Tambahkan menu kedalam object pesanan
            pesanan[menuId] = {
                namaPesanan,
                jumlah: 1,
                harga: harga,
            }
            // Tampilkan detail menu pada pesanan-detail-container
            $('.pesanan-detail-container').append(`
                <div class="pesanan-detail" id="menuId-${menuId}">
                    <div id="pesanan-nama">${namaPesanan}</div>
                    <div id="pesanan-jumlah">
                        <div class="kurang" onclick="kurangiPesanan('${menuId}')">-</div>
                        <div class="total-jumlah">1</div>
                        <div class="tambah" onclick="tambahPesanan('${menuId}','${menuNama}', '${menuHarga}')">+</div>
                    </div>
                    <div id="pesanan-harga">Rp. ${harga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}</div>
                </div>`);
        } else { // Jika menu sudah ada :
            if (pesanan[menuId].jumlah < stok) {

                // Update jumlah dan total harga
                const newJumlah = pesanan[menuId].jumlah + 1
                const newHarga = harga * newJumlah
                pesanan[menuId] = {
                    namaPesanan,
                    jumlah: newJumlah,
                    harga: newHarga
                }
                // Edit detail menu pada pesanan-detail-container berdasarkan ID menu
                $(`#menuId-${menuId}`).empty().append(`
                    <div id="pesanan-nama">${namaPesanan}</div>
                    <div id="pesanan-jumlah">
                        <div class="kurang" onclick="kurangiPesanan('${menuId}')">-</div>
                        <div class="total-jumlah">${newJumlah}</div>
                        <div class="tambah" onclick="tambahPesanan('${menuId}', '${menuNama}', '${menuHarga}')">+</div>
                    </div>
                    <div id="pesanan-harga">Rp. ${newHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")}</div>`);
            } else {
                fireMenuToast(menuId, 'sold');
            }
        }

        $('#totalHargaAll').html('Rp. ' + calculateTotalHargaAll().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
        console.log(pesanan);

    }

    const kurangiPesanan = (menuId) => {
        const oldPesanan = pesanan[menuId];
        const namaPesanan = oldPesanan.namaPesanan;
        const harga = parseInt(
            $(`#menuHarga-${menuId}`)
            .html()
            .replace(/[^\d.]/g, '')
            .replaceAll('.', '')
        );

        if (oldPesanan.jumlah > 1) {
            const jumlahPesanan = $(`#menuId-${menuId}`).find('#pesanan-jumlah').find('.total-jumlah');
            const totalHarga = $(`#menuId-${menuId}`).find('#pesanan-harga');

            const newJumlah = oldPesanan.jumlah - 1;
            const newHarga = oldPesanan.harga - harga;

            jumlahPesanan.empty().append(newJumlah);
            totalHarga.empty().append("Rp. " + newHarga.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

            pesanan[menuId] = {
                namaPesanan,
                jumlah: newJumlah,
                harga: newHarga
            }
        } else {
            delete pesanan[menuId];
            $(`#menuId-${menuId}`).remove();
        }

        $('#totalHargaAll').html('Rp. ' + calculateTotalHargaAll().toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"))
    }

    const submit = () => {
        $.ajax({
            type: "POST", //type of method
            url: "/menu/submit", //your page
            data: {
                // 'pesan': pesanan,
                'pesan': pesanan,
                'id': <?= $id_meja; ?>
            }, // passing the values
            success: function(res) {
                window.location.href = "/menu/<?= $id_meja; ?>/waiting";
            },
            error: () => {
                Swal.fire(
                    'Gagal',
                    'Pastikan anda sudah memilih pesanan',
                    'error'
                )
            }
        });
    }
</script>
<?= $this->endSection(); ?>
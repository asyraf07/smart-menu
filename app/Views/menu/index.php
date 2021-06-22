<?= $this->extend('layout/template.php'); ?>

<?= $this->section('link'); ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<style>
    body {
        color: black;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="slide">
    <!-- Slider main container -->
    <div class="swiper-container" onclick="inputNama()">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="bg"></div>
                <img src="/img/menu/2.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <div class="bg"></div><img src="/img/menu/4.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <div class="bg"></div><img src="/img/menu/8.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <div class="bg"></div><img src="/img/menu/14.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <div class="bg"></div><img src="/img/menu/15.jpeg" alt="">
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<button class="btn btn-success" onclick="updateNama()">SIAP</button>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 2400,
        },

        // And if we need scrollbar
        autoHeight: true,
    });


    document.addEventListener('keydown', e => {
        if (e.keyCode == 39) swiper.slideNext();
        if (e.keyCode == 37) swiper.slidePrev();
    })

    const inputNama = async () => {
        const {
            value: nama
        } = await Swal.fire({
            title: 'Masukkan nama anda',
            input: 'text',
            inputLabel: 'Tekan OK jika sudah',
            inputValue: 'Meja <?= $id_meja; ?>',
            showCancelButton: true,
            inputValidator: (value) => {
                if (!value) {
                    return 'Jangan biarkan kosong!'
                }
            }
            // text: 'Something went wrong!',
            // footer: '<a href>Why do I have this issue?</a>'
        })

        if (nama) {
            updateNama(nama);
        }
    }

    function updateNama(nama) {
        $.ajax({
            type: "POST", //type of method
            url: "/Menu/updateNama/<?= $id_meja; ?>", //your page
            data: {
                'id': <?= $id_meja; ?>,
                'nama': nama,
            }, // passing the values
            success: function(res) {
                window.location.href = "/menu/<?= $id_meja; ?>/list"
            },
            error: () => {
                Swal.fire(
                    'Gagal',
                    'Terjadi kesalahan',
                    'error'
                )
            }
        });
    }
</script>


<?= $this->endSection(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	<!-- STYLES -->


	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}

		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}

		html,
		body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}

		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}

		.menu {
			padding: .4rem 2rem;
		}

		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}

		header li {
			display: inline-block;
		}

		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}

		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}

		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}

		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}

		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}

		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}

		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}

		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}

		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}

		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}

		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}

		section h1 {
			margin-bottom: 2.5rem;
		}

		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}

		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}

		section code {
			display: block;
		}

		section a {
			color: rgba(221, 72, 20, 1);
		}

		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}

		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}

		.further h2:first-of-type {
			padding-top: 0;
		}

		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}

		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}

		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}

		@media (max-width: 559px) {
			header ul {
				padding: 0;
			}

			header .menu-toggle {
				padding: 0 1rem;
			}

			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}

			header .menu-toggle {
				display: block;
			}

			header .hidden {
				display: none;
			}

			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}

			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}

		#qrcode {
			min-height: 40vh;
		}
	</style>

</head>

<body>

	<header>

		<div class="heroe">

			<h1>Welcome to Smart-Menu Demo Guide</h1>

			<h2>Sistem memesan menu menggunakan device berbasis website</h2>

		</div>

	</header>

	<section>

		<h1>Sistem Smart-Menu</h1>

		<p>Sistem ini dapat digunakan pada tiap restoran yang ingin menggunakannya.</p>

		<p>Restoran yang menggunakan Smart-Menu akan memiliki QR Code pada tiap meja makan.</p>

		<p>Berikut tahapan pemesanan makanan:</p>

		<pre><code>1. User melakukan scan untuk QR Code, lalu menginputkan nama.</code><code>2. User memilih menu dan mengirim pesanan ke database.</code><code>3. Dapur membaca pesanan dari database, dan membuat pesanan.</code><code>4. Dapur mengubah status pesanan menjadi "selesai" atau "habis".</code><code>5. Pesanan dan statusnya ditampilkan kepada User.</code><code>6. User melakukan pembayaran, lalu stok makanan akan berkurang sesuai jumlah yang dipesan.</code><code>7. Admin dapat melihat, mengubah, menghapus, dan menambahkan menu.</code></pre>


	</section>

	<div class="further">

		<section>

			<h1>QR Code</h1>

			<div class="alert alert-danger">
				<p>Dikarenakan website ini dijalankan menggunakan local server maka QR Code tidak dapat discan dengan device lain, gunakan extension <a href="https://chrome.google.com/webstore/detail/qr-code-reader/likadllkkidlligfcdhfnnbkjigdkmci/">https://chrome.google.com/webstore/detail/qr-code-reader/likadllkkidlligfcdhfnnbkjigdkmci/</a> agar QR Code dapat discan melalui browser.</p>
			</div>

			<div class="button mb-3">
				<?php foreach (range(1, 6) as $n) : ?>
					<button class="btn btn-info" onclick="show(<?= $n; ?>)">Meja <?= $n ?></button>
				<?php endforeach; ?>
			</div>

			<div id="qrcode">

				<!-- QR Code Goes Here -->
				<div id="qr-1" class="card" style="width: 18rem;">
					<img src="/img/qrcode/meja1.png" class="card-img-top" alt="QRCODE">
					<div class="card-body">
						<h5 class="card-title">Meja 1</h5>
					</div>
				</div>
			</div>

		</section>

	</div>

	<section>

		<h1>Admin dan Dapur</h1>

		<p>Pada halaman Admin akan ada list menu restoran yang dapat diubah isinya, dan pada halaman Dapur akan ada list pesanan yang dapat diubah statusnya</p>

		<p>Halaman Admin dapat diakses dengan router <a href="/Admin/menu" target="_blank">/Admin/menu</a>.</p>

		<p>Halaman Dapur dapat diakses dengan router <a href="/Koki" target="_blank">/Koki</a>.</p>

	</section>

	<script>
		const show = (id) => {
			$("#qrcode").html(`
			<div id="qr-${id}" class="card" style="width: 18rem;">
				<img src="/img/qrcode/meja${id}.png" class="card-img-top" alt="QRCODE">
				<div class="card-body">
					<h5 class="card-title">Meja ${id}</h5>
				</div>
			</div>
			`);
			// console.log($(".qrcode").html());
		}
	</script>

</body>

</html>
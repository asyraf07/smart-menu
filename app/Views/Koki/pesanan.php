<?= $this->extend('Admin/template/template.php'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
	<h4>Invoice Pesanan</h4>

	<table class="table table-bordered table-hover table-striped" id="daftar-pesanan">

	</table>
</div>

<script>
	const ubahStatus = (pesananId, status) => {
		$.ajax({
			type: "POST", //type of method
			url: "/Koki/ubahStatus", //your page
			data: {
				'id': pesananId,
				'status': status,
			}, // passing the values
			success: function(res) {
				$(`#pesananId-${pesananId}`).remove();
			}
		});
	}

	const loadData = () => {
		$.ajax({
			type: "POST",
			url: "/Koki/loadData",
			success: function(res) {
				console.log(res);
				$(`#daftar-pesanan`).html(res);
			}
		});
	}

	$(document).ready(() => {
		setInterval(loadData, 2000)
	});
</script>

<?= $this->endSection(); ?>
<?= $this->extend('Admin/template/template.php'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
	<?php $brg = $menu ?>
	<form action="/Admin/update_menu/<?= $brg['id']; ?>" method="post" enctype="multipart/form-data">

		<div class="for-group">
			<label>Nama Barang</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $brg['id'] ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $brg['nama'] ?>">
		</div>
		<div class="for-group">
			<label>Keterangan</label>

			<input type="text" name="keterangan" class="form-control" value="<?php echo $brg['keterangan'] ?>">
		</div>
		<div class="for-group">
			<label>Kategori</label>
			<input type="text" name="kategori" class="form-control" value="<?php echo $brg['kategori'] ?>">
		</div>
		<div class="for-group">
			<label>Harga</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $brg['harga'] ?>">
		</div>
		<div class="for-group">
			<label>Stok</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $brg['stok'] ?>">
		</div>

		<div class="for-group row mb-3">
			<label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
			<div class="d-flex">
				<div class="col-sm-2">
					<img src="/img/menu/<?= $brg['gambar']; ?>" class="img-thumbnail img-preview">
				</div>
				<div class="col-sm-8">
					<div class="input-group mb-3">
						<input type="file" class="form-control" id="gambar" name="gambar" value="<?= old('gambar'); ?>" onchange="previewImage()">
					</div>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

	</form>

</div>

<?= $this->endSection(); ?>
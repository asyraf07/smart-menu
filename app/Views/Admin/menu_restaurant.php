<?= $this->extend('Admin/template/template.php'); ?>

<?= $this->section('content'); ?>

<div class="row container-fluid">
	<button class="btn btm-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Menu</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>GAMBAR</th>
			<th>NAMA MAKANAN</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php $no = 1;
		foreach ($menu as $mn) :
		?> <tr>
				<td><?php echo $no++ ?></td>
				<td><img src="/img/menu/<?= $mn['gambar']; ?>" alt="" width="100px"></td>
				<td><?php echo $mn['nama'] ?></td>
				<td><?php echo $mn['keterangan'] ?></td>
				<td><?php echo $mn['kategori'] ?></td>
				<td><?php echo $mn['harga'] ?></td>
				<td><?php echo $mn['stok'] ?></td>
				<td>
					<a href="/Admin/menu/edit/<?= $mn['id']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
				</td>
				<td>
					<form action="/Admin/menu/hapus/<?= $mn['id']; ?>" method="POST">
						<?= csrf_field(); ?>
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-trash"></i></button>
					</form>
				</td>
			</tr>

		<?php endforeach; ?>

	</table>
</div>



<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Input Menu</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"></span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/Admin/tambah_menu" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Makanan</label>
						<input type="text" name="nama" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" required name="kategori">
							<option>Makanan</option>
							<option>Minuman</option>
							<option>Snack</option>
							<option>Desert</option>
							<option>Lainnya</option>
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="number" name="harga" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Gambar Barang</label>
						<input type="file" name="gambar" class="form-control">
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>
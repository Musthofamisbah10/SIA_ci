<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
	<form method="post" action="<?php echo base_url(); ?>jurusan/aksi_input">
		<div class="form-group">
			<label for="jurusan">Kode Fakultas</label>
			<input class="form-control" type="text" name="kode_jurusan" placeholder="Masukan kode fakultas">
			<!-- form validasi -->
			<?php echo form_error('kode_jurusan', '<div class="text-danger small ml-3">'); ?>
		</div>
		<div class="form-group">
			<label for="nama_jurusan">Nama Fakultas</label>
			<input class="form-control" type="text" name="nama_jurusan" placeholder="Masukan nama fakultas">
			<!-- form validasi -->
			<?php echo form_error('nama_jurusan', '<div class="text-danger small ml-3">'); ?>
		</div>
		<!-- button simpan jurusan -->
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
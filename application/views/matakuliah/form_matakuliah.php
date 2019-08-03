<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
  <form action="<?php echo base_url(); ?>matakuliah/input_aksi" method="post">
  	<div class="form-group">
  		<label for="kode_matakuliah">Kode Matakuliah</label>
  		<input type="text" class="form-control" name="kode_matakuliah" placeholder="Masukan data matakuliah">
  		<!-- validasi -->
  		<?php echo form_error('kode_matakuliah', '<div class="text-danger small ml-3">'); ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_matakuliah">Nama Matakuliah</label>
  		<input type="text" class="form-control" name="nama_matakuliah" placeholder="Masukan nama matakuliah">
  		<!-- validasi -->
  		<?php echo form_error('nama_matakuliah', '<div class="text-danger small ml-3">'); ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_prodi">Nama Program Studi</label>
  			<select name="nama_prodi" class="form-control">
  				<option>-- Program Studi --</option>
  				<?php foreach ($prodi as $prod): ?>
  					<option value="<?php echo $prod->nama_prodi ?>"><?php echo $prod->nama_prodi ?></option>
  				<?php endforeach; ?>
  			</select>
  	</div>

  	<!-- button simpan prodi -->
		<button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
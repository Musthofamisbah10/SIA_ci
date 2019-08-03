<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
  <form action="<?php echo base_url(); ?>prodi/aksi_input" method="post">
  	<div class="form-group">
  		<label for="kode_prodi">Kode Prodi</label>
  		<input type="text" class="form-control" name="kode_prodi" placeholder="Masukan kode prodi">
  		<!-- form validasi -->
  		<?php echo form_error('kode_prodi', '<div class="text-danger small ml-3">') ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_prodi">Nama Prodi</label>
  		<input type="text" class="form-control" name="nama_prodi" placeholder="Masukan nama prodi">
  		<!-- form validasi -->
  		<?php echo form_error('nama_prodi', '<div class="text-danger small ml-3">') ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_prodi">Nama Jurusan</label>
  		<select name="nama_jurusan" class="form-control">
  			<option>-- Pilih Jurusan --</option>
  			<?php foreach ($jurusan as $jrs): ?>
  				<option value="<?php echo $jrs->nama_jurusan ?>"><?php echo $jrs->nama_jurusan ?></option>
  			<?php endforeach; ?>
  		</select>
  	</div>

  	<!-- button simpan prodi -->
		<button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
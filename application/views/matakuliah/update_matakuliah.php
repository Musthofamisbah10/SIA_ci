<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
  <form action="<?php echo base_url(); ?>matakuliah/update" method="post">
    <input type="hidden" class="form-control" name="kode_matakuliah" value="<?php echo $matakuliah->kode_matakuliah ?>">
  	<div class="form-group">
  		<label for="kode_matakuliah">Kode Matakuliah</label>
  		<input type="text" class="form-control" name="kode_matakuliah" value="<?php echo $matakuliah->kode_matakuliah ?>">
  		<!-- validasi -->
  		<?php echo form_error('kode_matakuliah', '<div class="text-danger small ml-3">'); ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_matakuliah">Nama Matakuliah</label>
  		<input type="text" class="form-control" name="nama_matakuliah" value="<?php echo $matakuliah->nama_matakuliah ?>">
  		<!-- validasi -->
  		<?php echo form_error('nama_matakuliah', '<div class="text-danger small ml-3">'); ?>
  	</div>
  	<div class="form-group">
  		<label for="nama_prodi">Nama Program Studi</label>
  			<select name="id_prodi" class="form-control">
  				<?php foreach ($prodi as $prod): ?>
            <?php if ($prod == $prodi->id_prodi): ?>
              <option value="<?php echo $prod->id_prodi ?>" selected><?php echo $prod->nama_prodi ?></option>
            <?php else: ?>
              <option value="<?php echo $prod->id_prodi ?>"><?php echo $prod->nama_prodi ?></option>
            <?php endif ?>
  				<?php endforeach; ?>
  			</select>
  	</div>

  	<!-- button simpan prodi -->
		<button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
  	
  	<?php foreach ($jurusan as $jrs): ?>
  			<form action="<?php echo base_url(); ?>jurusan/update_aksi" method="post">
          <input type="hidden" name="id_jurusan" value="<?php echo $jrs->id_jurusan ?>">
  				<div class="form-groub">
  					<label for="kode_jurusan">Kode Jurusan</label>
  					<!-- input hidden, karna tidak perlu untuk di tampilkan -->
  					<input type="hidden" name="kode_jurusan" value="<?php echo $jrs->kode_jurusan ?>">
  					<input type="text" name="kode_jurusan" class="form-control" value="<?php echo $jrs->kode_jurusan; ?>">
  				</div>
  				<div class="form-groub">
  					<label for="nama_jurusan">Nama Jurusan</label>
  					<input type="text" name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan; ?>">
  				</div>
  				<button type="submit" class="btn btn-primary mt-2">Simpan</button>
  			</form>
  	<?php endforeach; ?>

</div>
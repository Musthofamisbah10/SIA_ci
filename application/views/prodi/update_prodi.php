<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>
  			<form action="<?php echo base_url(); ?>prodi/update" method="post">
        	<input type="hidden" name="id_prodi" value="<?php echo $prodi->id_prodi ?>">
  				<div class="form-groub">
  					<label for="kode_prodi">Kode Prodi</label>
  					<input type="text" name="kode_prodi" class="form-control" value="<?php echo $prodi->kode_prodi ?>">
  				</div>
  				<div class="form-groub">
  					<label for="nama_prodi">Nama Prodi</label>
  					<input type="text" name="nama_prodi" class="form-control" value="<?php echo $prodi->nama_prodi ?>">
  				</div>
  				<div class="form-groub">
  					<label for="nama_jurusan">Nama Fakultas</label>
  					<select name="id_jurusan" class="form-control">
  						<?php foreach ($jurusan as $jur): ?>
                  <?php if ($jur->id_jurusan == $jurusan->id_jurusan): ?>
                    <option value="<?php echo $jur->id_jurusan ?>" selected> <?php echo $jur->nama_jurusan ?> </option>
                  <?php else: ?>
                    <option value="<?php echo $jur->id_jurusan ?>" > <?php echo $jur->nama_jurusan ?> </option>
                  <?php endif; ?>
  						<?php endforeach; ?>
  					</select>
  				</div>
  				<button type="submit" class="btn btn-primary mt-2">Simpan</button>
  			</form>

</div>
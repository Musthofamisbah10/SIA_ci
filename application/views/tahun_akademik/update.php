<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>

  <form action="<?php echo base_url(); ?>tahun_akademik/update" method="post">
  	<input type="hidden" name="id_th_akdm" value="<?php echo $tahun_akademik->id_th_akdm ?>">
  	<div class="form-gorub">
  		<label for="tahun_akademik">Tahun Akademik</label>
  		<input type="text" name="tahun_akademik" class="form-control" value="<?php echo $tahun_akademik->tahun_akademik ?>">
  	</div>
  	<div class="form-group">
  		<label for="semester">Semester</label>
  		<input type="text" name="semester" class="form-control" value="<?php echo $tahun_akademik->semester ?>">
  	</div>
  	<div class="form-group">
  		<label for="status">Status</label>
  		<input type="text" name="status" class="form-control" value="<?php echo $tahun_akademik->status ?>">
  	</div>

  	<button type="submit" class="btn btn-primary mt-2">Simpan</button>
  </form>
</div>
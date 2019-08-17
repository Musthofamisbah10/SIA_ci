<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i>
		<?php echo $alert; ?>
	</div>

	<form action="<?php echo base_url(); ?>tahun_akademik/saveInput" method="post">
		<div class="form-group">
			<label for="tahun_akademik">Tahun Akademik</label>
			<input type="text" class="form-control" name="tahun_akademik" placeholder="Masukkan tahun akademik">
			<!-- form validaton -->
			<?php echo form_error('tahun_akademik', '<div class="text-danger small ml-3">'); ?>
		</div>
		<div class="form-group">
			<label for="semester">Semester</label>
			<input type="text" class="form-control" name="semester" placeholder="Masukkan semester">
			<!-- form validaton -->
			<?php echo form_error('semester', '<div class="text-danger small ml-3">'); ?>
		</div>
		<div class="form-group">
			<label for="status">Status</label>
			<input type="text" class="form-control" name="status" placeholder="Masukkan Status">
			<!-- form validaton -->
			<?php echo form_error('status', '<div class="text-danger small ml-3">'); ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>
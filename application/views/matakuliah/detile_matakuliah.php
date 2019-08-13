<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>

  <table class="table table-hover table-striped table-bordered">
	<?php foreach ($matakuliah as $mtkl): ?>
		<tr>
			<th>Kode Matakuliah</th>
			<td><?php echo $mtkl->kode_matakuliah; ?></td>
		</tr>
		<tr>
			<th>Nama Matakuliah</th>
			<td><?php echo $mtkl->nama_matakuliah; ?></td>
		</tr>
		<tr>
			<th>Sks</th>
			<td><?php echo $mtkl->sks; ?></td>
		</tr>
		<tr>
			<th>Kode Matakuliah</th>
			<td><?php echo $mtkl->semester; ?></td>
		</tr>
		<tr>
			<th>Nama Program Studi</th>
			<td><?php echo $mtkl->id_prodi; ?></td>
		</tr>
	<?php endforeach; ?>
  </table>
  <?php echo anchor('matakuliah', '<div class="btn btn-danger">Keluar</div>'); ?>
</div>
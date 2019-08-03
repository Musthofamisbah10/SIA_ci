<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>

	<!-- button tambah -->
	<?php echo anchor('jurusan/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Fakultas</button>'); ?>

	<!-- flash data -->
	<?php echo $this->session->flashdata('pesan'); ?>

  <!-- menampilkn data jurusan -->
  <table class="table table-bordered table-striped table-hover">
  	<tr>
  		<th>No</th>
  		<th>Kode</th>
  		<th>Nama Fakultas</th>
  		<th colspan="2">Aksi</th>
  	</tr>

		<?php
		$no =1;
		foreach ($jurusan as $jrs): ?>
			<tr>
				<td width="20px"><?php echo $no++; ?></td>
				<td><?php echo $jrs->kode_jurusan; ?></td>
				<td><?php echo $jrs->nama_jurusan; ?></td>
				<td width="20px"><?php echo anchor('jurusan/update/'. $jrs->id_jurusan, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
				<td width="20px"><?php echo anchor('jurusan/delete/'. $jrs->id_jurusan, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
			</tr>
		<?php endforeach; ?>

  </table>
</div>
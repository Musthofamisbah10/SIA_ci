<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i>
		<?php echo $alert; ?>
	</div>

	<!-- tambah data -->
	<?php echo anchor('prodi/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Prodi</button>'); ?>
	
	<!-- flash data -->
	<?php echo $this->session->flashdata('pesan'); ?>

	<!-- sheacrh -->
	<div class="row">
		<div class="col-md-4">
			<form action="<?php echo base_url() ?>prodi" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Search program studi" name="keyword" autocomplete="off" autofocus>
				  <div class="input-group-append">
				  	<button class="btn btn-primary" type="submit">Search</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<!-- menampilkan data jurusan -->
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Kode Prodi</th>
			<th>Program Studi</th>
			<th>Fakultas</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
		$no = 1;
		foreach ($prodi as $prd): ?>
			<tr>
				<td width="20px"><?php echo $no++ ?></td>
				<td><?php echo $prd->kode_prodi; ?></td>
				<td><?php echo $prd->nama_prodi; ?></td>
				<td><?php echo $prd->nama_jurusan; ?></td>
				<td width="20px"><?php echo anchor('prodi/edit/'. $prd->id_prodi, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
				<td width="20px"><?php echo anchor('prodi/delete/'. $prd->id_prodi, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
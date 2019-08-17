<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>

  <?php echo anchor('mahasiswa/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Mahasiswa</button>'); ?>
  <?php echo $this->session->flashdata('pesan'); ?>

  <table class="table table-bordered table-hover table-striped">
  	<tr>
  		<th>No</th>
  		<th>Nama Mahasiswa</th>
  		<th>Alamat</th>
  		<th>Email</th>
  		<th colspan="3">Aksi</th>
  	</tr>
	
	<?php $no = 1; foreach ($mahasiswa as $mhs): ?>
		<tr>
			<td width="20px"><?php echo $no++; ?></td>
			<td><?php echo $mhs->nama_lengkap; ?></td>
			<td><?php echo $mhs->alamat; ?></td>
			<td><?php echo $mhs->email; ?></td>
			<td width="20px"><?php echo anchor('mahasiswa/detile/' . $mhs->id_mahasiswa, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></td>
			<td width="20px"><?php echo anchor('mahasiswa/edit/' . $mhs->id_mahasiswa, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
			<td width="20px"><?php echo anchor('mahasiswa/delete/' . $mhs->id_mahasiswa, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		</tr>
	<?php endforeach; ?>
  </table>
</div>
<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	  <i class="fas fa-university"></i>
	  <?php echo $alert; ?>
  </div>

	<?php echo anchor('matakuliah/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Matakuliah</button>'); ?>

  <?php echo $this->session->flashdata('pesan'); ?>

  <table class="table table-bordered table-hover table-striped">
  	<tr>
  		<th>No</th>
  		<th>Kode Matakuliah</th>
  		<th>Nama Matakuliah</th>
  		<th>Program Studi</th>
  		<th colspan="3">Aksi</th>
  	</tr>

  	<?php $no = 1; foreach ($matakuliah as $matkul): ?>
  		<tr>
  			<td width="20px"><?php echo $no++ ?></td>
  			<td><?php echo $matkul->kode_matakuliah ?></td>
  			<td><?php echo $matkul->nama_matakuliah ?></td>
  			<td><?php echo $matkul->nama_prodi ?></td>
        <td width="20px"><?php echo anchor('matakuliah/detile/' . $matkul->kode_matakuliah, '<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></td>
  			<td width="20px"><?php echo anchor('matakuliah/edit/' . $matkul->kode_matakuliah, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
  			<td width="20px"><?php echo anchor('matakuliah/delete/' . $matkul->kode_matakuliah, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
  		</tr>
  	<?php endforeach; ?>
  </table>
</div>
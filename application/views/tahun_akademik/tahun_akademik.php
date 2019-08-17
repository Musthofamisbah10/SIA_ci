<div class="container-fluid">
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i>
		<?php echo $alert; ?>
	</div>

	<!-- tambah data -->
	<?php echo anchor('tahun_akademik/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i> Tambah Tahun Akademik</button>'); ?>

	<!-- flash data -->
	<?php echo $this->session->flashdata('pesan'); ?>

	<table class="table table-hover table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Tahun Akademik</th>
			<th>Semester</th>
			<th>Status</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php $no = 1; foreach ($tahun_akademik as $akdm): ?>
			<tr>
				<td width="20px"><?php echo $no++; ?></td>
				<td><?php echo $akdm->tahun_akademik; ?></td>
				<td><?php echo $akdm->semester; ?></td>
				<td><?php echo $akdm->status; ?></td>
				<td width="20px"><?php echo anchor('tahun_akademik/edit/'. $akdm->id_th_akdm, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
				<td width="20px"><?php echo anchor('tahun_akademik/delete/'. $akdm->id_th_akdm, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
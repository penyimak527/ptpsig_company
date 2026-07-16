<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div>
			<h1 class="h3 mb-0 text-gray-800"><?php echo $page_label; ?></h1>
			<p class="mb-0 text-gray-600"><?php echo $page_description; ?></p>
		</div>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
			<i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data <?php echo $page_label; ?></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<?php foreach ($columns as $column) : ?>
								<th><?php echo $column; ?></th>
							<?php endforeach; ?>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($rows as $index => $row) : ?>
							<tr>
								<td><?php echo $index + 1; ?></td>
								<?php foreach ($fields as $field) : ?>
									<td>
										<?php if ($field === 'status') : ?>
											<span class="badge badge-<?php echo $row[$field] === 'aktif' || $row[$field] === 'publish' ? 'success' : 'secondary'; ?>"><?php echo $row[$field]; ?></span>
										<?php else : ?>
											<?php echo $row[$field]; ?>
										<?php endif; ?>
									</td>
								<?php endforeach; ?>
								<td>
									<a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

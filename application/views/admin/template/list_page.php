<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div>
			<h1 class="h3 mb-0 text-gray-800"><?php echo $page_label; ?></h1>
			<p class="mb-0 text-gray-600"><?php echo $page_description; ?></p>
		</div>
		<button type="button" class="btn btn-sm btn-primary shadow-sm" id="btnAdd">
			<i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
		</button>
	</div>

	<div class="alert alert-info py-2">
		Data dikelola dengan AJAX. Upload gambar/foto akan disimpan sesuai folder konten masing-masing.
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
							<th style="width: 60px;">No</th>
							<?php foreach ($crud['columns'] as $column) : ?>
								<th><?php echo $column; ?></th>
							<?php endforeach; ?>
							<th style="width: 110px;">Aksi</th>
						</tr>
					</thead>
					<tbody id="tableBody">
						<tr>
							<td colspan="<?php echo count($crud['columns']) + 2; ?>" class="text-center">Memuat data...</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="crudModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<form id="crudForm" enctype="multipart/form-data" class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Form <?php echo $page_label; ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="hidden" name="<?php echo $crud['primary_key']; ?>" id="field_<?php echo $crud['primary_key']; ?>">
				<div class="row">
					<?php foreach ($crud['fields'] as $field) : ?>
						<?php
						$is_file = !empty($crud['file_field']) && $crud['file_field'] === $field;
						$is_textarea = in_array($field, array('ringkasan', 'deskripsi', 'bio'));
						$is_status = $field === 'status';
						$is_tipe = $field === 'tipe';
						$is_role = $field === 'role';
						$is_number = in_array($field, array('urutan', 'parent_id'));
						$is_date = $field === 'tanggal';
						$is_password = !empty($crud['password_field']) && $crud['password_field'] === $field;
						$label = ucwords(str_replace('_', ' ', $field));
						?>
						<div class="col-md-<?php echo $is_textarea ? '12' : '6'; ?>">
							<div class="form-group">
								<label for="field_<?php echo $field; ?>"><?php echo $label; ?></label>
								<?php if ($is_file) : ?>
									<input type="file" class="form-control-file" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>" accept="image/*">
									<small class="form-text text-muted" id="current_<?php echo $field; ?>"></small>
								<?php elseif ($is_textarea) : ?>
									<textarea class="form-control" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>" rows="4"></textarea>
								<?php elseif ($is_status) : ?>
									<select class="form-control" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>">
										<?php foreach ($crud['status_options'] as $status_option) : ?>
											<option value="<?php echo $status_option; ?>"><?php echo $status_option; ?></option>
										<?php endforeach; ?>
									</select>
								<?php elseif ($is_tipe) : ?>
									<select class="form-control" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>">
										<option value="visi">visi</option>
										<option value="misi">misi</option>
									</select>
								<?php elseif ($is_role) : ?>
									<select class="form-control" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>">
										<option value="admin">admin</option>
										<option value="superadmin">superadmin</option>
									</select>
								<?php else : ?>
									<input type="<?php echo $is_date ? 'date' : ($is_number ? 'number' : ($is_password ? 'password' : 'text')); ?>" class="form-control" name="<?php echo $field; ?>" id="field_<?php echo $field; ?>" <?php echo $is_password ? 'placeholder="Kosongkan jika tidak diganti"' : ''; ?>>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="alert alert-danger d-none" id="formMessage"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var crudUrl = '<?php echo $crud_url; ?>';
		var primaryKey = '<?php echo $crud['primary_key']; ?>';
		var columns = <?php echo json_encode(array_keys($crud['columns'])); ?>;
		var fields = <?php echo json_encode($crud['fields']); ?>;
		var fileField = '<?php echo !empty($crud['file_field']) ? $crud['file_field'] : ''; ?>';
		var tableBody = document.getElementById('tableBody');
		var form = document.getElementById('crudForm');
		var message = document.getElementById('formMessage');

		function escapeHtml(value) {
			if (value === null || value === undefined) {
				return '';
			}
			return String(value).replace(/[&<>"']/g, function (item) {
				return {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'}[item];
			});
		}

		function badge(value) {
			var good = value === 'aktif' || value === 'publish' || value === 'superadmin';
			return '<span class="badge badge-' + (good ? 'success' : 'secondary') + '">' + escapeHtml(value) + '</span>';
		}

		function loadData() {
			fetch(crudUrl + '/list_data')
				.then(function (response) { return response.json(); })
				.then(function (result) {
					var rows = result.data || [];
					if (!rows.length) {
						tableBody.innerHTML = '<tr><td colspan="' + (columns.length + 2) + '" class="text-center">Belum ada data.</td></tr>';
						return;
					}

					tableBody.innerHTML = rows.map(function (row, index) {
						var cells = columns.map(function (column) {
							var value = row[column] || '';
							return '<td>' + (column === 'status' || column === 'role' ? badge(value) : escapeHtml(value)) + '</td>';
						}).join('');
						return '<tr><td>' + (index + 1) + '</td>' + cells + '<td><button class="btn btn-sm btn-warning btnEdit" data-id="' + row[primaryKey] + '"><i class="fas fa-edit"></i></button> <button class="btn btn-sm btn-danger btnDelete" data-id="' + row[primaryKey] + '"><i class="fas fa-trash"></i></button></td></tr>';
					}).join('');
				});
		}

		function resetForm() {
			form.reset();
			document.getElementById('field_' + primaryKey).value = '';
			message.classList.add('d-none');
			message.innerHTML = '';
			if (fileField) {
				document.getElementById('current_' + fileField).innerHTML = '';
			}
		}

		document.getElementById('btnAdd').addEventListener('click', function () {
			resetForm();
			$('#crudModal').modal('show');
		});

		tableBody.addEventListener('click', function (event) {
			var editButton = event.target.closest('.btnEdit');
			var deleteButton = event.target.closest('.btnDelete');

			if (editButton) {
				resetForm();
				fetch(crudUrl + '/get/' + editButton.getAttribute('data-id'))
					.then(function (response) { return response.json(); })
					.then(function (result) {
						var row = result.data || {};
						document.getElementById('field_' + primaryKey).value = row[primaryKey] || '';
						fields.forEach(function (field) {
							var input = document.getElementById('field_' + field);
							if (!input || input.type === 'file') {
								if (input && input.type === 'file' && row[field]) {
									document.getElementById('current_' + field).innerHTML = 'File saat ini: ' + escapeHtml(row[field]);
								}
								return;
							}
							if (field === 'password_hash') {
								input.value = '';
							} else {
								input.value = row[field] || '';
							}
						});
						$('#crudModal').modal('show');
					});
			}

			if (deleteButton && confirm('Hapus data ini?')) {
				fetch(crudUrl + '/delete/' + deleteButton.getAttribute('data-id'), {method: 'POST'})
					.then(function (response) { return response.json(); })
					.then(function () { loadData(); });
			}
		});

		form.addEventListener('submit', function (event) {
			event.preventDefault();
			var formData = new FormData(form);

			fetch(crudUrl + '/save', {method: 'POST', body: formData})
				.then(function (response) { return response.json(); })
				.then(function (result) {
					if (!result.status) {
						message.classList.remove('d-none');
						message.innerHTML = result.message || 'Data gagal disimpan.';
						return;
					}
					$('#crudModal').modal('hide');
					loadData();
				});
		});

		loadData();
	});
</script>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div>
			<h1 class="h3 mb-1 text-gray-800">Kegiatan</h1>
			<p class="mb-0 text-gray-600">Kelola kegiatan yang tampil pada website umum.</p>
		</div>
		<a href="<?php echo site_url('admin/kegiatan/tambah'); ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus mr-1"></i> Tambah Kegiatan</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6></div>
		<div class="card-body">
			<div class="row"><div class="col-md-4"><div class="input-group mb-3"><input type="text" class="form-control" id="cari" placeholder="Cari judul, klien, brand, layanan, atau kategori"><div class="input-group-append"><span class="input-group-text bg-primary text-white"><i class="fas fa-search"></i></span></div></div></div></div>
			<div id="data_kegiatan"></div>
			<div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 mt-3">
				<div id="pagination"></div>
				<div class="d-flex align-items-center"><label class="mb-0 mr-2" for="jumlah_data">Tampilkan</label><select class="form-control form-control-sm" id="jumlah_data" style="width:80px"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="ml-2">entri</span></div>
			</div>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	$('#cari').on('keyup', kegiatan);
	$('#jumlah_data').on('change', function () { paging($('#data_kegiatan .card-kegiatan'), parseInt(this.value, 10)); });
	kegiatan();
});

function escapeHtml(value) {
	return String(value || '').replace(/[&<>"']/g, function (item) { return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[item]; });
}

function kegiatan() {
	$.ajax({
		url: '<?php echo site_url('admin/kegiatan/kegiatan_result'); ?>',
		type: 'POST',
		dataType: 'json',
		data: {search: $('#cari').val()},
		success: function (result) {
			var rows = result.data || [], html = '';
			if (!rows.length) {
				html = '<div class="alert alert-light border text-center mb-0">Belum ada data kegiatan.</div>';
			} else {
				rows.forEach(function (item) {
					var image = item.gambar ? '<?php echo base_url(); ?>' + item.gambar : '<?php echo $admin_asset_path; ?>/img/undraw_posting_photo.svg';
					html += `<div class="card-kegiatan border rounded mb-3 p-3"><div class="row align-items-center"><div class="col-md-2 mb-3 mb-md-0"><img src="${escapeHtml(image)}" alt="${escapeHtml(item.judul)}" class="img-fluid rounded" style="width:100%;height:96px;object-fit:cover"></div><div class="col-md-7"><div class="small text-muted mb-1">${escapeHtml(item.tanggal)} &middot; ${escapeHtml(item.kategori)}</div><h5 class="mb-1 text-gray-900">${escapeHtml(item.judul)}</h5><p class="mb-0 text-muted">Klien: ${escapeHtml(item.klien)} &middot; Brand: ${escapeHtml(item.brand)}</p><p class="mb-0 text-muted small">${escapeHtml(item.layanan)}</p></div><div class="col-md-3 mt-3 mt-md-0"><div class="admin-record-meta"><span class="badge badge-${item.status === 'publish' ? 'success' : 'secondary'}">${escapeHtml(item.status)}</span><div class="admin-action-group"><a href="<?php echo site_url('admin/kegiatan/edit'); ?>/${item.id_kegiatan}" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a><button type="button" class="btn btn-sm btn-danger" onclick="hapusKegiatan(${item.id_kegiatan})" title="Hapus"><i class="fas fa-trash"></i></button></div></div></div></div></div>`;
				});
			}
			$('#data_kegiatan').html(html);
			paging($('#data_kegiatan .card-kegiatan'), parseInt($('#jumlah_data').val(), 10));
		}
	});
}

function paging($selector, jumlahTampil) {
	$('#pagination').empty();
	if (!$selector.length) return;
	window.tp = new Pagination('#pagination', {
		itemsCount: $selector.length,
		pageSize: jumlahTampil || 10,
		onPageChange: function (page) {
			var start = page.pageSize * (page.currentPage - 1), end = start + page.pageSize;
			$selector.hide();
			for (var i = start; i < end; i++) $selector.eq(i).show();
		}
	});
}

function hapusKegiatan(id) {
	if (!confirm('Hapus kegiatan ini beserta gambarnya?')) return;
	$.ajax({url: '<?php echo site_url('admin/kegiatan/hapus'); ?>/' + id, type: 'POST', dataType: 'json', success: function (result) { if (result.status) kegiatan(); else alert('Data gagal dihapus.'); }});
}
</script>

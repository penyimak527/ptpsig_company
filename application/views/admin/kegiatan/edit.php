<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$activity_date = DateTime::createFromFormat('d:m:Y', (string) $item['tanggal']);
$activity_date_input = $activity_date !== FALSE ? $activity_date->format('Y-m-d') : (string) $item['tanggal'];
?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Kegiatan</h1>
		<a href="<?php echo site_url('admin/kegiatan'); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a>
	</div>
	<form id="form-edit" enctype="multipart/form-data">
		<input type="hidden" name="id_kegiatan" value="<?php echo (int) $item['id_kegiatan']; ?>">
		<div class="card shadow mb-4"><div class="card-body">
			<div class="form-group"><label>Judul Kegiatan</label><input class="form-control" name="judul" required value="<?php echo htmlspecialchars($item['judul'], ENT_QUOTES, 'UTF-8'); ?>"></div>
			<div class="row">
				<div class="col-md-4"><div class="form-group"><label>Nama Klien</label><input class="form-control" name="klien" required value="<?php echo htmlspecialchars($item['klien'], ENT_QUOTES, 'UTF-8'); ?>"></div></div>
				<div class="col-md-4"><div class="form-group"><label>Kategori/Industri</label><input class="form-control" name="kategori" required value="<?php echo htmlspecialchars($item['kategori'], ENT_QUOTES, 'UTF-8'); ?>"></div></div>
				<div class="col-md-4"><div class="form-group"><label>Tanggal Kegiatan</label><input type="date" class="form-control" name="tanggal" required value="<?php echo htmlspecialchars($activity_date_input, ENT_QUOTES, 'UTF-8'); ?>"><small class="form-text text-muted">Disimpan dalam format dd:mm:yyyy.</small></div></div>
			</div>
			<div class="form-group"><label>Ringkasan</label><textarea class="form-control" name="ringkasan" rows="3" maxlength="500" required><?php echo htmlspecialchars($item['ringkasan'], ENT_QUOTES, 'UTF-8'); ?></textarea><small class="form-text text-muted">Ditampilkan pada kartu dan pembuka halaman detail.</small></div>
			<div class="row">
				<div class="col-md-8"><div class="form-group"><label>Gambar Utama</label><input type="file" class="dropify" name="gambar" accept="image/jpeg,image/png,image/webp" data-max-file-size="4M" data-default-file="<?php echo base_url($item['gambar']); ?>"><small class="form-text text-muted">Biarkan gambar lama jika tidak ingin menggantinya.</small></div></div>
				<div class="col-md-4"><div class="form-group"><label>Status</label><select class="form-control" name="status"><option value="draft" <?php echo $item['status'] === 'draft' ? 'selected' : ''; ?>>Draft</option><option value="publish" <?php echo $item['status'] === 'publish' ? 'selected' : ''; ?>>Publish</option></select></div></div>
			</div>
		</div></div>

		<div class="d-flex align-items-center justify-content-between mb-3">
			<div><h2 class="h5 mb-1 text-gray-800">Bagian Isi Kegiatan</h2><p class="mb-0 text-muted">Semua bagian berikut ditampilkan secara dinamis sesuai urutannya.</p></div>
			<button type="button" class="btn btn-sm btn-outline-primary" id="tambah-bagian"><i class="fas fa-plus mr-1"></i> Tambah Bagian</button>
		</div>
		<div id="daftar-bagian"></div>
		<div class="alert alert-danger d-none" id="formMessage"></div>
		<button type="submit" class="btn btn-primary mb-4" id="btn-update"><i class="fas fa-save mr-1"></i> Simpan Perubahan</button>
	</form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
	var sectionIndex = 0;
	var editors = {};
	var initialSections = <?php echo json_encode($bagian); ?>;
	$('.dropify').dropify({messages:{default:'Seret gambar atau klik untuk memilih',replace:'Seret gambar atau klik untuk mengganti',remove:'Hapus',error:'Terjadi kesalahan'}});

	function escapeHtml(value) {
		return String(value || '').replace(/[&<>"']/g, function (item) { return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[item]; });
	}

	function addSection(data) {
		data = data || {};
		var index = sectionIndex++;
		var defaultFile = data.gambar ? ' data-default-file="<?php echo base_url(); ?>' + escapeHtml(data.gambar) + '"' : '';
		var html = '<div class="card shadow-sm mb-3 kegiatan-section" data-index="' + index + '">' +
			'<div class="card-header py-2 d-flex align-items-center justify-content-between"><strong class="section-label">Bagian Kegiatan</strong><div class="btn-group">' +
			'<button type="button" class="btn btn-sm btn-light section-up" title="Naik"><i class="fas fa-arrow-up"></i></button>' +
			'<button type="button" class="btn btn-sm btn-light section-down" title="Turun"><i class="fas fa-arrow-down"></i></button>' +
			'<button type="button" class="btn btn-sm btn-outline-danger section-remove" title="Hapus"><i class="fas fa-trash"></i></button></div></div>' +
			'<div class="card-body"><input type="hidden" name="bagian_id[' + index + ']" value="' + escapeHtml(data.id_bagian) + '">' +
			'<div class="form-group"><label>Judul Bagian</label><input class="form-control" name="bagian_judul[' + index + ']" value="' + escapeHtml(data.judul) + '" placeholder="Contoh: Tantangan atau Solusi" required></div>' +
			'<div class="form-group"><label>Isi Bagian</label><div class="section-editor" id="editor-bagian-' + index + '" style="min-height:240px"></div><input type="hidden" name="bagian_konten[' + index + ']" id="konten-bagian-' + index + '"></div>' +
			'<div class="form-group mb-0"><label>Gambar Bagian <span class="text-muted font-weight-normal">(opsional)</span></label><input type="file" class="dropify section-image" name="bagian_gambar_' + index + '" accept="image/jpeg,image/png,image/webp" data-max-file-size="4M"' + defaultFile + '></div>' +
			'</div></div>';
		$('#daftar-bagian').append(html);
		editors[index] = new Quill('#editor-bagian-' + index, {theme:'snow', placeholder:'Tulis isi bagian kegiatan...', modules:{toolbar:[['bold','italic','underline','strike'],[{header:[1,2,3,false]}],[{list:'ordered'},{list:'bullet'}],[{align:[]}],['blockquote','link'],['clean']]}});
		if (data.konten) editors[index].clipboard.dangerouslyPasteHTML(data.konten);
		$('#daftar-bagian .kegiatan-section:last .dropify').dropify({messages:{default:'Seret gambar atau klik untuk memilih',replace:'Seret gambar atau klik untuk mengganti',remove:'Hapus',error:'Terjadi kesalahan'}});
		refreshLabels();
	}

	function refreshLabels() {
		$('#daftar-bagian .kegiatan-section').each(function (position) { $(this).find('.section-label').text('Bagian ' + (position + 1)); });
	}

	$('#tambah-bagian').on('click', function () { addSection(); });
	$('#daftar-bagian').on('click', '.section-remove', function () {
		if ($('.kegiatan-section').length === 1) { alert('Kegiatan harus memiliki minimal satu bagian isi.'); return; }
		var card = $(this).closest('.kegiatan-section'), index = card.data('index'); delete editors[index]; card.remove(); refreshLabels();
	}).on('click', '.section-up', function () {
		var card = $(this).closest('.kegiatan-section'); card.prev('.kegiatan-section').before(card); refreshLabels();
	}).on('click', '.section-down', function () {
		var card = $(this).closest('.kegiatan-section'); card.next('.kegiatan-section').after(card); refreshLabels();
	});

	if (initialSections.length) initialSections.forEach(addSection); else addSection();
	$('#form-edit').on('submit', function (event) {
		event.preventDefault();
		var valid = true;
		$('.kegiatan-section').each(function () {
			var index = $(this).data('index'), content = editors[index].getText().trim() ? editors[index].root.innerHTML : '';
			$('#konten-bagian-' + index).val(content);
			if (!content) valid = false;
		});
		if (!valid) { $('#formMessage').removeClass('d-none').text('Isi pada setiap bagian kegiatan wajib diisi.'); return; }
		var button = $('#btn-update').prop('disabled', true).text('Menyimpan...');
		$.ajax({url:'<?php echo site_url('admin/kegiatan/edit'); ?>', type:'POST', data:new FormData(this), processData:false, contentType:false, dataType:'json', success:function (result) { if (result.status) window.location.href='<?php echo site_url('admin/kegiatan'); ?>'; else { $('#formMessage').removeClass('d-none').text(result.message || 'Data gagal diperbarui.'); button.prop('disabled', false).html('<i class="fas fa-save mr-1"></i> Simpan Perubahan'); } }, error:function () { $('#formMessage').removeClass('d-none').text('Terjadi kesalahan saat memperbarui data.'); button.prop('disabled', false).html('<i class="fas fa-save mr-1"></i> Simpan Perubahan'); }});
	});
});
</script>

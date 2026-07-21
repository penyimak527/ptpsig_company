<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div>
			<h1 class="h3 mb-1 text-gray-800">Struktur Organisasi</h1>
			<p class="mb-0 text-gray-600">Unggah satu gambar bagan struktur organisasi yang ditampilkan pada website umum.</p>
		</div>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Bagan Struktur Organisasi</h6></div>
		<div class="card-body">
			<form id="formStruktur" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-8">
						<div class="form-group mb-lg-0">
							<label>Gambar Bagan</label>
							<input type="file" class="dropify" name="foto" accept="image/jpeg,image/png,image/webp" data-max-file-size="6M" <?php echo !empty($item['foto']) ? 'data-default-file="' . base_url($item['foto']) . '"' : 'required'; ?>>
							<small class="form-text text-muted">Gunakan gambar yang jelas dan beresolusi tinggi. Format JPG, PNG, atau WebP maksimal 6 MB.</small>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="border rounded p-3 h-100 d-flex flex-column justify-content-between">
							<div><h6 class="font-weight-bold text-gray-800">Status Bagan</h6><p class="text-muted mb-3"><?php echo !empty($item['foto']) ? 'Bagan sudah tersedia. Pilih gambar baru hanya jika ingin menggantinya.' : 'Belum ada bagan struktur organisasi yang diunggah.'; ?></p></div>
							<button type="submit" class="btn btn-primary align-self-start" id="simpanStruktur"><i class="fas fa-save mr-1"></i> Simpan Bagan</button>
						</div>
					</div>
				</div>
				<div class="alert alert-danger d-none mt-3 mb-0" id="pesanStruktur"></div>
			</form>
		</div>
	</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
	$('.dropify').dropify({messages:{default:'Seret gambar bagan atau klik untuk memilih',replace:'Seret gambar atau klik untuk mengganti',remove:'Hapus',error:'Terjadi kesalahan'}});
	$('#formStruktur').on('submit', function (event) {
		event.preventDefault();
		var button = $('#simpanStruktur').prop('disabled', true);
		$('#pesanStruktur').addClass('d-none').removeClass('alert-success').addClass('alert-danger');
		$.ajax({
			url: '<?php echo site_url('admin/struktur_organisasi/save'); ?>',
			type: 'POST',
			data: new FormData(this),
			processData: false,
			contentType: false,
			dataType: 'json',
			success: function (result) {
				if (result.status) {
					$('#pesanStruktur').removeClass('d-none alert-danger').addClass('alert-success').text(result.message);
					setTimeout(function () { window.location.reload(); }, 700);
				} else {
					$('#pesanStruktur').removeClass('d-none').text(result.message || 'Bagan gagal disimpan.');
				}
			},
			error: function () { $('#pesanStruktur').removeClass('d-none').text('Terjadi kesalahan saat menyimpan bagan.'); },
			complete: function () { button.prop('disabled', false); }
		});
	});
});
</script>

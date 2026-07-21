<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4"><h1 class="h3 mb-0 text-gray-800">Tambah Team</h1><a href="<?php echo site_url('admin/team'); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a></div>
	<div class="card shadow mb-4"><div class="card-body">
		<form id="formTambahTeam" enctype="multipart/form-data">
			<div class="row"><div class="col-md-6"><div class="form-group"><label>Nama</label><input type="text" class="form-control" name="nama" required></div></div><div class="col-md-6"><div class="form-group"><label>Jabatan</label><input type="text" class="form-control" name="jabatan" required></div></div></div>
			<div class="form-group"><label>Bio Singkat</label><textarea class="form-control" name="bio" rows="4"></textarea></div>
			<div class="row"><div class="col-md-6"><div class="form-group"><label>Instagram</label><input type="url" class="form-control" name="instagram" placeholder="https://instagram.com/username"></div></div><div class="col-md-6"><div class="form-group"><label>LinkedIn</label><input type="url" class="form-control" name="linkedin" placeholder="https://linkedin.com/in/username"></div></div></div>
			<div class="row"><div class="col-md-8"><div class="form-group"><label>Foto</label><input type="file" class="dropify" name="foto" accept="image/jpeg,image/png,image/webp" data-max-file-size="4M" required></div></div><div class="col-md-4"><div class="form-group"><label>Urutan</label><input type="number" min="0" class="form-control" name="urutan" value="0"></div><div class="form-group"><label>Status</label><select class="form-control" name="status"><option value="aktif">Aktif</option><option value="nonaktif">Nonaktif</option></select></div></div></div>
			<div class="alert alert-danger d-none" id="pesanTeam"></div><button type="submit" class="btn btn-primary" id="simpanTeam"><i class="fas fa-save mr-1"></i> Simpan Team</button>
		</form>
	</div></div>
</div>
<script>
document.addEventListener('DOMContentLoaded',function(){$('.dropify').dropify({messages:{default:'Seret foto atau klik untuk memilih',replace:'Seret foto atau klik untuk mengganti',remove:'Hapus',error:'Terjadi kesalahan'}});$('#formTambahTeam').on('submit',function(event){event.preventDefault();var button=$('#simpanTeam').prop('disabled',true);$('#pesanTeam').addClass('d-none');$.ajax({url:'<?php echo site_url('admin/team/tambah'); ?>',type:'POST',data:new FormData(this),processData:false,contentType:false,dataType:'json',success:function(result){if(result.status)window.location.href='<?php echo site_url('admin/team'); ?>';else $('#pesanTeam').removeClass('d-none').text(result.message||'Data gagal disimpan.');},error:function(){$('#pesanTeam').removeClass('d-none').text('Terjadi kesalahan saat menyimpan data.');},complete:function(){button.prop('disabled',false);}});});});
</script>

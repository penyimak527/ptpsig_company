<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4"><h1 class="h3 mb-0 text-gray-800">Tambah Admin User</h1><a href="<?php echo site_url('admin/admin_user'); ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a></div>
	<div class="card shadow mb-4"><div class="card-body">
		<form id="formTambahAdmin" enctype="multipart/form-data">
			<div class="row"><div class="col-md-6"><div class="form-group"><label>Nama Lengkap</label><input type="text" class="form-control" name="nama" required></div></div><div class="col-md-6"><div class="form-group"><label>Username</label><input type="text" class="form-control" name="username" required autocomplete="off"></div></div></div>
			<div class="row"><div class="col-md-8"><div class="form-group"><label>Password</label><input type="password" class="form-control" name="password_hash" required minlength="8" autocomplete="new-password"><small class="form-text text-muted">Minimal 8 karakter.</small></div></div><div class="col-md-4"><div class="form-group"><label>Status</label><select class="form-control" name="status"><option value="aktif">Aktif</option><option value="nonaktif">Nonaktif</option></select></div></div></div>
			<div class="form-group"><label>Foto Profil</label><input type="file" class="dropify" name="foto" accept="image/jpeg,image/png,image/webp" data-max-file-size="4M"></div>
			<div class="alert alert-danger d-none" id="pesanAdmin"></div><button type="submit" class="btn btn-primary" id="simpanAdmin"><i class="fas fa-save mr-1"></i> Simpan Admin</button>
		</form>
	</div></div>
</div>
<script>
document.addEventListener('DOMContentLoaded',function(){$('.dropify').dropify({messages:{default:'Seret foto atau klik untuk memilih',replace:'Seret foto atau klik untuk mengganti',remove:'Hapus',error:'Terjadi kesalahan'}});$('#formTambahAdmin').on('submit',function(event){event.preventDefault();var button=$('#simpanAdmin').prop('disabled',true);$('#pesanAdmin').addClass('d-none');$.ajax({url:'<?php echo site_url('admin/admin_user/tambah'); ?>',type:'POST',data:new FormData(this),processData:false,contentType:false,dataType:'json',success:function(result){if(result.status)window.location.href='<?php echo site_url('admin/admin_user'); ?>';else $('#pesanAdmin').removeClass('d-none').text(result.message||'Data gagal disimpan.');},error:function(){$('#pesanAdmin').removeClass('d-none').text('Terjadi kesalahan saat menyimpan data.');},complete:function(){button.prop('disabled',false);}});});});
</script>

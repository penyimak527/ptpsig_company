<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div><h1 class="h3 mb-1 text-gray-800">Team</h1><p class="mb-0 text-gray-600">Kelola anggota team yang tampil pada website umum.</p></div>
		<a href="<?php echo site_url('admin/team/tambah'); ?>" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus mr-1"></i> Tambah Team</a>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Data Team</h6></div>
		<div class="card-body">
			<div class="row"><div class="col-md-5 col-lg-4"><div class="input-group mb-3"><input type="text" class="form-control" id="cariTeam" placeholder="Cari nama atau jabatan"><div class="input-group-append"><span class="input-group-text bg-primary text-white"><i class="fas fa-search"></i></span></div></div></div></div>
			<div class="table-responsive"><table class="table table-bordered table-hover" width="100%"><thead><tr><th style="width:60px">No</th><th>Anggota</th><th>Jabatan</th><th style="width:80px">Urutan</th><th style="width:90px">Status</th><th style="width:110px">Aksi</th></tr></thead><tbody id="dataTeam"><tr><td colspan="6" class="text-center">Memuat data...</td></tr></tbody></table></div>
			<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mt-3"><div id="paginationTeam"></div><div class="d-flex align-items-center mt-3 mt-md-0"><label class="mb-0 mr-2" for="jumlahTeam">Tampilkan</label><select class="form-control form-control-sm" id="jumlahTeam" style="width:80px"><option value="10">10</option><option value="25">25</option><option value="50">50</option></select><span class="ml-2">entri</span></div></div>
		</div>
	</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
	var semuaTeam = [];
	function escapeHtml(value){return String(value||'').replace(/[&<>"']/g,function(item){return{'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'}[item];});}
	function tampilkanTeam(){var keyword=$('#cariTeam').val().toLowerCase(),rows=semuaTeam.filter(function(item){return [item.nama,item.jabatan].join(' ').toLowerCase().indexOf(keyword)!==-1;}),html='';if(!rows.length)html='<tr><td colspan="6" class="text-center">Belum ada data team.</td></tr>';rows.forEach(function(item,index){var foto=item.foto?'<?php echo base_url(); ?>'+item.foto:'<?php echo $admin_asset_path; ?>/img/undraw_profile.svg';html+='<tr class="baris-team"><td>'+(index+1)+'</td><td><div class="d-flex align-items-center"><img src="'+escapeHtml(foto)+'" alt="" class="rounded-circle mr-2" style="width:44px;height:44px;object-fit:cover"><strong>'+escapeHtml(item.nama)+'</strong></div></td><td>'+escapeHtml(item.jabatan)+'</td><td>'+escapeHtml(item.urutan)+'</td><td><span class="badge badge-'+(item.status==='aktif'?'success':'secondary')+'">'+escapeHtml(item.status)+'</span></td><td><div class="admin-action-group"><a href="<?php echo site_url('admin/team/edit'); ?>/'+item.id_team+'" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a><button type="button" class="btn btn-sm btn-danger btn-hapus" data-id="'+item.id_team+'" title="Hapus"><i class="fas fa-trash"></i></button></div></td></tr>';});$('#dataTeam').html(html);pagingTeam($('#dataTeam .baris-team'),parseInt($('#jumlahTeam').val(),10));}
	function muatTeam(){$.ajax({url:'<?php echo site_url('admin/team/list_data'); ?>',type:'POST',dataType:'json',success:function(result){semuaTeam=result.data||[];tampilkanTeam();},error:function(){$('#dataTeam').html('<tr><td colspan="6" class="text-center text-danger">Data gagal dimuat.</td></tr>');}});}
	function pagingTeam($selector,jumlah){$('#paginationTeam').empty();if(!$selector.length)return;window.paginationTeam=new Pagination('#paginationTeam',{itemsCount:$selector.length,pageSize:jumlah||10,onPageChange:function(page){var start=page.pageSize*(page.currentPage-1),end=start+page.pageSize;$selector.hide();for(var i=start;i<end;i++)$selector.eq(i).show();}});}
	$('#cariTeam').on('keyup',tampilkanTeam);$('#jumlahTeam').on('change',tampilkanTeam);$('#dataTeam').on('click','.btn-hapus',function(){var id=$(this).data('id');if(!confirm('Hapus anggota team beserta fotonya?'))return;$.ajax({url:'<?php echo site_url('admin/team/hapus'); ?>/'+id,type:'POST',dataType:'json',success:function(result){if(result.status)muatTeam();else alert('Data gagal dihapus.');}});});muatTeam();
});
</script>

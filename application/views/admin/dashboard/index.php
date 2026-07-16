<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="<?php echo site_url(); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank">
			<i class="fas fa-external-link-alt fa-sm text-white-50"></i> Lihat Website
		</a>
	</div>

	<div class="row">
		<?php foreach ($stats as $stat) : ?>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-<?php echo $stat['color']; ?> shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-<?php echo $stat['color']; ?> text-uppercase mb-1"><?php echo $stat['label']; ?></div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $stat['count']; ?></div>
							</div>
							<div class="col-auto">
								<i class="fas <?php echo $stat['icon']; ?> fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Kegiatan Terbaru</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered mb-0">
							<thead>
								<tr>
									<th>Judul</th>
									<th>Klien</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($recent_kegiatan as $item) : ?>
									<tr>
										<td><?php echo $item['judul']; ?></td>
										<td><?php echo $item['klien']; ?></td>
										<td><span class="badge badge-success"><?php echo $item['status']; ?></span></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Catatan Database</h6>
				</div>
				<div class="card-body">
					<p>Struktur tabel tersedia di file SQL project. Setelah database diimport dan konfigurasi database diisi, data admin dapat diarahkan ke tabel asli.</p>
					<a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/kegiatan'); ?>">Kelola Konten</a>
				</div>
			</div>
		</div>
	</div>
</div>

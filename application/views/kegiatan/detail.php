<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title"><?php echo $activity['title']; ?></h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item"><a href="<?php echo site_url('home/kegiatan'); ?>">Kegiatan</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php echo $activity['title']; ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-blog-details-area pyramid-section-compact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog-details-box">
					<div class="top-content">
						<div class="thumb">
							<img src="<?php echo $asset_path; ?>/<?php echo $activity['image']; ?>" alt="<?php echo $activity['title']; ?>">
						</div>
						<ul>
							<li><i class="fal fa-user-circle"></i> <?php echo $activity['client']; ?></li>
							<li><i class="fal fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($activity['date'])); ?></li>
						</ul>
						<h3 class="title"><?php echo $activity['title']; ?></h3>
						<p><?php echo $activity['description']; ?></p>
						<p><?php echo $activity['excerpt']; ?> Informasi lengkap kegiatan dapat diperbarui melalui data admin ketika modul admin sudah dibuat.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pyramid-meta-list">
					<ul>
						<li><strong>Klien</strong><span><?php echo $activity['client']; ?></span></li>
						<li><strong>Kategori</strong><span><?php echo $activity['category']; ?></span></li>
						<li><strong>Tanggal</strong><span><?php echo date('d M Y', strtotime($activity['date'])); ?></span></li>
						<li><strong>Perusahaan</strong><span><?php echo $company['name']; ?></span></li>
					</ul>
					<a class="main-btn mt-30" href="<?php echo site_url('home/kegiatan'); ?>">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Legalitas</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Legalitas</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-about-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="infetech-about-thumb animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
					<img src="<?php echo $asset_path; ?>/images/company-thumb.png" alt="Legalitas <?php echo $company['name']; ?>">
					<img class="thumb" src="<?php echo $asset_path; ?>/images/company-thumb-2.png" alt="Legalitas <?php echo $company['name']; ?>">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="infetech-about-content">
					<span>Legalitas Perusahaan</span>
					<h3 class="title"><?php echo $company['legal_name']; ?></h3>
					<p>Halaman ini menampilkan informasi umum legalitas yang aman untuk publik. Nomor atau dokumen sensitif tidak ditampilkan sebelum tersedia data dan izin resmi.</p>
					<ul>
						<li><i class="fas fa-check-circle"></i> Bentuk perusahaan: Perseroan Terbatas.</li>
						<li><i class="fas fa-check-circle"></i> Bidang usaha: solusi digital, website, aplikasi, integrasi sistem, dan teknologi bisnis.</li>
						<li><i class="fas fa-check-circle"></i> Tahun pendirian: <?php echo $company['established']; ?>.</li>
					</ul>
					<a href="<?php echo site_url('kontak'); ?>" class="main-btn">Hubungi Kami</a>
				</div>
			</div>
		</div>
	</div>
</section>

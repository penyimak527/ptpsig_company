<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Struktur Organisasi</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-feature-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title section-title-2">
					<span>Profile</span>
					<h4 class="title">Susunan peran utama di Piramidsoft.</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Struktur ini dibuat sebagai gambaran awal pembagian peran internal. Nama, foto, dan jabatan final dapat disesuaikan melalui data resmi perusahaan.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($struktur_organisasi as $index => $item) : ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-infetech-feature-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="<?php echo $index * 200; ?>ms">
						<div class="icon">
							<img src="<?php echo $asset_path; ?>/images/icon/service-icon-<?php echo ($index % 3) + 1; ?>.png" alt="<?php echo $item['division']; ?>">
						</div>
						<div class="content">
							<h4 class="title"><a href="#"><?php echo $item['name']; ?></a></h4>
							<span><?php echo $item['division']; ?></span>
							<p><?php echo $item['description']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

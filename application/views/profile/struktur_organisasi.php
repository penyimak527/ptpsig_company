<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
if (!function_exists('pyramid_public_image_url')) {
	function pyramid_public_image_url($path, $asset_path, $base_path)
	{
		return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
	}
}
?>
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
			<?php if (empty($struktur_organisasi)) : ?>
				<div class="col-lg-8">
					<div class="pyramid-meta-list text-center">
						<p>Data struktur organisasi belum tersedia. Silakan tambahkan melalui halaman admin.</p>
					</div>
				</div>
			<?php endif; ?>
			<?php foreach ($struktur_organisasi as $index => $item) : ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-infetech-feature-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="<?php echo $index * 200; ?>ms">
						<div class="icon">
							<img src="<?php echo pyramid_public_image_url($item['image'], $asset_path, $base_path); ?>" alt="<?php echo $item['position']; ?>">
						</div>
						<div class="content">
							<h4 class="title"><a href="#"><?php echo $item['position']; ?></a></h4>
							<span><?php echo $item['division']; ?></span>
							<p><?php echo $item['description']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

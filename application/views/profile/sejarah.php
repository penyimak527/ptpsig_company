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
					<h2 class="title">Sejarah</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sejarah</li>
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
					<img src="<?php echo $asset_path; ?>/images/about-thumb-1.jpg" alt="Sejarah Piramidsoft">
					<img class="thumb" src="<?php echo $asset_path; ?>/images/about-thumb-2.jpg" alt="Sejarah Piramidsoft">
					<div class="about-box">
						<h4 class="title">Sejak</h4>
						<span><?php echo $company['established']; ?></span>
					</div>
					<img class="about-logo" src="<?php echo $asset_path; ?>/images/about-logo.png" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="infetech-about-content">
					<span>Profile</span>
					<h3 class="title">Perjalanan Piramidsoft sebagai partner digital.</h3>
					<p>Informasi tahun berdiri dan riwayat resmi akan disesuaikan setelah data final tersedia. Sementara ini halaman sejarah menampilkan alur pengenalan perusahaan secara umum.</p>
					<ul>
						<?php if (empty($sejarah)) : ?>
							<li><i class="fas fa-check-circle"></i> Data sejarah belum tersedia. Silakan tambahkan melalui halaman admin.</li>
						<?php endif; ?>
						<?php foreach ($sejarah as $item) : ?>
							<li><i class="fas fa-check-circle"></i> <strong><?php echo $item['year']; ?>:</strong> <?php echo $item['title']; ?> - <?php echo $item['description']; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

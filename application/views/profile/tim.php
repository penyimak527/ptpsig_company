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
					<h2 class="title">Tim Pyramid</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Tim</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-team-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Team</span>
					<h4 class="title">Orang-orang yang mengembangkan solusi digital Pyramid.</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (empty($teams)) : ?>
				<div class="col-lg-8 mx-auto">
					<div class="pyramid-meta-list text-center">
						<p>Data tim belum tersedia. Silakan tambahkan anggota tim melalui halaman admin.</p>
					</div>
				</div>
			<?php endif; ?>
			<?php foreach ($teams as $index => $team) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-tema-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 150; ?>ms">
						<div class="top-line"></div>
						<div class="thumb">
							<img src="<?php echo pyramid_public_image_url($team['image'], $asset_path, $base_path); ?>" alt="<?php echo $team['name']; ?>">
						</div>
						<div class="content">
							<h4 class="title"><?php echo $team['name']; ?></h4>
							<span><?php echo $team['position']; ?></span>
							<?php if (!empty($team['bio'])) : ?>
								<p class="pyramid-card-text"><?php echo $team['bio']; ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

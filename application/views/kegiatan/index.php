<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
if (!function_exists('pyramid_public_image_url')) {
	function pyramid_public_image_url($path, $asset_path, $base_path)
	{
		if (empty($path)) {
			$path = 'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-client.PNG';
		}
		return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
	}
}
?>
<section class="breadcrumb-area pyramid-activity-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Kegiatan Piramidsoft</h2>
					<nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Kegiatan</li></ol></nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="daftar-kegiatan" class="pyramid-portfolio-section">
	<div class="container">
		<div class="pyramid-portfolio-heading">
			<span>Dokumentasi Kegiatan</span>
			<h3>Perjalanan Piramidsoft bersama klien dan partner.</h3>
		</div>
		<div class="pyramid-portfolio-grid">
			<?php if (empty($activities)) : ?>
				<div class="pyramid-empty-state">
					<p>Belum ada kegiatan yang dipublikasikan.</p>
				</div>
			<?php endif; ?>
			<?php foreach ($activities as $activity) : ?>
				<?php $activity_image = !empty($activity['image']) ? $activity['image'] : 'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-client.PNG'; ?>
				<article class="pyramid-portfolio-card animated wow fadeInUp" data-wow-duration="1200ms">
					<a class="pyramid-portfolio-cover" href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>" aria-label="Lihat detail <?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>">
						<img src="<?php echo pyramid_public_image_url($activity_image, $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
					</a>
					<div class="pyramid-portfolio-body">
						<span class="pyramid-portfolio-category"><?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></span>
						<h3><a href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>"><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
						<p><?php echo htmlspecialchars($activity['client'], ENT_QUOTES, 'UTF-8'); ?> - <?php echo date('Y', strtotime($activity['date_iso'])); ?></p>
						<a class="pyramid-portfolio-link" href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>">Selengkapnya <span aria-hidden="true">&rarr;</span></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

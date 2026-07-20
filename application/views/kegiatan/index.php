<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
if (!function_exists('pyramid_public_image_url')) {
	function pyramid_public_image_url($path, $asset_path, $base_path)
	{
		return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
	}
}
?>
<section class="pyramid-portfolio-hero">
	<div class="container pyramid-portfolio-hero-wrap">
		<div class="pyramid-portfolio-hero-copy">
			<span class="pyramid-eyebrow">Kegiatan Piramidsoft</span>
			<h1>Kegiatan dan kolaborasi yang menjadi <strong>bukti kerja nyata.</strong></h1>
			<p>Piramidsoft membangun hubungan kerja melalui diskusi, pendampingan, pengembangan sistem, dan pelayanan teknologi yang terarah.</p>
			<a class="main-btn" href="#daftar-kegiatan">Lihat Semua Kegiatan</a>
		</div>
		<div class="pyramid-portfolio-visual">
			<img src="<?php echo $asset_path; ?>/img_pyramid/ASSET WEB PROFILE/FOTO TIM/makan-w-tim.jpg" alt="Tim Piramidsoft">
			<span class="pyramid-float-label pyramid-float-label-one">Kolaborasi Aktif</span>
			<span class="pyramid-float-label pyramid-float-label-two">Pendampingan Responsif</span>
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
				<article class="pyramid-portfolio-card animated wow fadeInUp" data-wow-duration="1200ms">
					<a class="pyramid-portfolio-cover" href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>" aria-label="Lihat detail <?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>">
						<img src="<?php echo pyramid_public_image_url($activity['image'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
					</a>
					<div class="pyramid-portfolio-body">
						<span class="pyramid-portfolio-category"><?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></span>
						<h3><a href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>"><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
						<p><?php echo htmlspecialchars($activity['client'], ENT_QUOTES, 'UTF-8'); ?> - <?php echo date('Y', strtotime($activity['date'])); ?></p>
						<a class="pyramid-portfolio-link" href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>">Selengkapnya <span aria-hidden="true">&rarr;</span></a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

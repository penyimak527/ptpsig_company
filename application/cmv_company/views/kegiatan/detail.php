<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
if (!function_exists('pyramid_public_image_url')) {
	function pyramid_public_image_url($path, $asset_path, $base_path)
	{
		return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
	}
}
?>
<section class="pyramid-detail-section">
	<div class="container">
		<nav class="pyramid-detail-breadcrumb" aria-label="Breadcrumb">
			<a href="<?php echo site_url(); ?>">Beranda</a>
			<span aria-hidden="true">/</span>
			<a href="<?php echo site_url('kegiatan'); ?>">Kegiatan</a>
			<span aria-hidden="true">/</span>
			<span aria-current="page"><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></span>
		</nav>
		<div class="pyramid-detail-layout">
			<aside class="pyramid-detail-facts">
				<div class="pyramid-detail-fact">
					<span>Klien</span>
					<strong><?php echo htmlspecialchars($activity['client'], ENT_QUOTES, 'UTF-8'); ?></strong>
				</div>
				<div class="pyramid-detail-fact">
					<span>Industri</span>
					<strong><?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></strong>
				</div>
				<div class="pyramid-detail-fact">
					<span>Tahun</span>
					<strong><?php echo date('Y', strtotime($activity['date_iso'])); ?></strong>
				</div>
			</aside>
			<article class="pyramid-detail-content">
				<header class="pyramid-detail-hero">
					<span class="pyramid-detail-label">Studi Kegiatan &middot; <?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></span>
					<h1><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
					<p class="pyramid-detail-summary"><?php echo htmlspecialchars($activity['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
				</header>
				<figure class="pyramid-detail-cover">
					<img src="<?php echo pyramid_public_image_url($activity['image'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>">
				</figure>
				<div class="pyramid-detail-story">
					<?php foreach ($activity['sections'] as $section) : ?>
						<section class="pyramid-story-row">
							<h2><?php echo htmlspecialchars($section['judul'], ENT_QUOTES, 'UTF-8'); ?></h2>
							<div class="pyramid-story-content">
								<div class="pyramid-rich-content ql-editor"><?php echo $section['konten']; ?></div>
								<?php if (!empty($section['gambar'])) : ?>
									<figure class="pyramid-story-image"><img src="<?php echo pyramid_public_image_url($section['gambar'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($section['judul'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy"></figure>
								<?php endif; ?>
							</div>
						</section>
					<?php endforeach; ?>
				</div>
			</article>
		</div>
	</div>
</section>

<section class="pyramid-detail-cta">
	<div class="container">
		<div class="pyramid-consultation">
			<div>
				<span class="pyramid-eyebrow">Punya kebutuhan unik?</span>
				<h2>Diskusikan website atau sistem yang ingin Anda bangun.</h2>
				<p>Tim Piramidsoft membantu memetakan kebutuhan, alur kerja, dan pilihan pengembangan yang sesuai untuk bisnis Anda.</p>
			</div>
			<a class="main-btn" href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $company['phone']); ?>" target="_blank" rel="noopener noreferrer">Diskusikan Kebutuhan</a>
		</div>
	</div>
</section>

<?php
$related_activities = array();
foreach ($activities as $related_activity) {
	if ($related_activity['slug'] !== $activity['slug']) {
		$related_activities[] = $related_activity;
	}
	if (count($related_activities) === 3) {
		break;
	}
}
?>
<?php if (!empty($related_activities)) : ?>
	<section class="pyramid-related-section">
		<div class="container">
			<div class="pyramid-portfolio-heading">
				<span>Kegiatan Terkait</span>
				<h3>Kegiatan Piramidsoft lainnya.</h3>
			</div>
			<div class="pyramid-portfolio-grid">
				<?php foreach ($related_activities as $related_activity) : ?>
					<article class="pyramid-portfolio-card">
						<a class="pyramid-portfolio-cover" href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>">
							<img src="<?php echo pyramid_public_image_url($related_activity['image'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($related_activity['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
						</a>
						<div class="pyramid-portfolio-body">
							<span class="pyramid-portfolio-category"><?php echo htmlspecialchars($related_activity['category'], ENT_QUOTES, 'UTF-8'); ?></span>
							<h3><a href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>"><?php echo htmlspecialchars($related_activity['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3>
							<p><?php echo htmlspecialchars($related_activity['client'], ENT_QUOTES, 'UTF-8'); ?> - <?php echo date('Y', strtotime($related_activity['date_iso'])); ?></p>
							<a class="pyramid-portfolio-link" href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>">Selengkapnya <span aria-hidden="true">&rarr;</span></a>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

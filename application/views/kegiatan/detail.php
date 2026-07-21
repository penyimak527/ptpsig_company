<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
if (!function_exists('pyramid_public_image_url')) {
	function pyramid_public_image_url($path, $asset_path, $base_path)
	{
		return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
	}
}
$activity_year = !empty($activity['date_iso']) ? date('Y', strtotime($activity['date_iso'])) : '-';
?>
<section class="pyramid-detail-section">
	<div class="container">
		<nav class="pyramid-detail-breadcrumb" aria-label="Breadcrumb">
			<a href="<?php echo site_url(); ?>">Beranda</a><span>/</span>
			<a href="<?php echo site_url('kegiatan'); ?>">Portofolio</a><span>/</span>
			<span aria-current="page"><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></span>
		</nav>
		<div class="pyramid-detail-layout">
			<aside class="pyramid-detail-facts">
				<div class="pyramid-detail-fact"><span>Klien</span><strong><?php echo htmlspecialchars($activity['client'], ENT_QUOTES, 'UTF-8'); ?></strong></div>
				<div class="pyramid-detail-fact"><span>Industri</span><strong><?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></strong></div>
				<div class="pyramid-detail-fact"><span>Layanan</span><strong><?php echo htmlspecialchars($activity['service'], ENT_QUOTES, 'UTF-8'); ?></strong></div>
				<div class="pyramid-detail-fact"><span>Brand</span><strong><?php echo htmlspecialchars($activity['brand'], ENT_QUOTES, 'UTF-8'); ?></strong></div>
				<div class="pyramid-detail-fact"><span>Tahun</span><strong><?php echo $activity_year; ?></strong></div>
			</aside>
			<article class="pyramid-detail-content">
				<header class="pyramid-detail-hero">
					<span class="pyramid-detail-label"><?php echo htmlspecialchars($activity['detail_label'], ENT_QUOTES, 'UTF-8'); ?></span>
					<h1><?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
					<p class="pyramid-detail-summary"><?php echo htmlspecialchars($activity['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
				</header>
				<figure class="pyramid-detail-cover"><img src="<?php echo pyramid_public_image_url($activity['image'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($activity['title'], ENT_QUOTES, 'UTF-8'); ?>"></figure>
				<div class="pyramid-detail-story">
					<?php foreach ($activity['sections'] as $section) : ?>
						<section class="pyramid-story-row">
							<h2><?php echo htmlspecialchars($section['judul'], ENT_QUOTES, 'UTF-8'); ?></h2>
							<div class="pyramid-story-content">
								<div class="pyramid-rich-content ql-editor"><?php echo $section['konten']; ?></div>
								<?php if (!empty($section['gambar'])) : ?><figure class="pyramid-story-image"><img src="<?php echo pyramid_public_image_url($section['gambar'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($section['judul'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy"></figure><?php endif; ?>
							</div>
						</section>
					<?php endforeach; ?>
				</div>
			</article>
		</div>
	</div>
</section>
<section class="pyramid-detail-cta"><div class="container"><div class="pyramid-consultation"><div><span class="pyramid-detail-cta-label">Punya kebutuhan unik?</span><h2>Diskusikan Website atau Sistem yang<br>Ingin Anda Bangun</h2><p>Kami bantu memetakan kebutuhan, alur kerja, dan pilihan pengembangan yang paling masuk akal untuk project Anda.</p></div><a class="main-btn" href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $company['phone']); ?>" target="_blank" rel="noopener noreferrer">Konsultasi Project</a></div></div></section>
<?php
$related_activities = array();
foreach ($activities as $related_activity) {
	if ($related_activity['slug'] !== $activity['slug'] && $related_activity['category'] === $activity['category']) $related_activities[] = $related_activity;
	if (count($related_activities) === 3) break;
}
if (count($related_activities) < 3) {
	foreach ($activities as $related_activity) {
		if ($related_activity['slug'] !== $activity['slug'] && !in_array($related_activity, $related_activities, TRUE)) $related_activities[] = $related_activity;
		if (count($related_activities) === 3) break;
	}
}
?>
<?php if (!empty($related_activities)) : ?>
<section class="pyramid-related-section"><div class="container"><div class="pyramid-related-heading"><span>Portofolio Terkait</span><h3>Project Lain dalam Kategori <?php echo htmlspecialchars($activity['category'], ENT_QUOTES, 'UTF-8'); ?></h3></div><div class="pyramid-portfolio-grid">
<?php foreach ($related_activities as $related_activity) : ?><article class="pyramid-portfolio-card"><a class="pyramid-portfolio-cover" href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>"><img src="<?php echo pyramid_public_image_url($related_activity['image'], $asset_path, $base_path); ?>" alt="<?php echo htmlspecialchars($related_activity['title'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy"></a><div class="pyramid-portfolio-body"><span class="pyramid-portfolio-category"><?php echo htmlspecialchars($related_activity['category'], ENT_QUOTES, 'UTF-8'); ?></span><h3><a href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>"><?php echo htmlspecialchars($related_activity['title'], ENT_QUOTES, 'UTF-8'); ?></a></h3><p><?php echo htmlspecialchars($related_activity['client'], ENT_QUOTES, 'UTF-8'); ?> - <?php echo date('Y', strtotime($related_activity['date_iso'])); ?></p><a class="pyramid-portfolio-link" href="<?php echo site_url('kegiatan/detail/' . $related_activity['slug']); ?>">Selengkapnya <span>&rarr;</span></a></div></article><?php endforeach; ?>
</div></div></section><?php endif; ?>

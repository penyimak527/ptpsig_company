<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $structure = !empty($struktur_organisasi) ? $struktur_organisasi[0] : NULL; ?>
<section class="breadcrumb-area pyramid-structure-hero">
	<div class="container">
		<div class="row"><div class="col-lg-12"><div class="breadcrumb-item text-center"><h2 class="title">Struktur Organisasi</h2><nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li></ol></nav></div></div></div>
	</div>
</section>

<section class="pyramid-structure-page">
	<div class="container">
		<div class="row justify-content-center"><div class="col-xl-10"><div class="section-title text-center"><span>Profile Perusahaan</span><h3 class="title">Bagan Struktur Organisasi Piramidsoft</h3><p>Susunan organisasi yang menjadi dasar koordinasi, tanggung jawab, dan kolaborasi antarbagian di Piramidsoft.</p></div></div></div>
		<?php if ($structure !== NULL) : ?>
			<div class="pyramid-structure-chart"><img src="<?php echo strpos($structure['image'], 'upload/') === 0 ? $base_path . '/' . $structure['image'] : $asset_path . '/' . $structure['image']; ?>" alt="Bagan Struktur Organisasi Piramidsoft"></div>
		<?php else : ?>
			<div class="pyramid-structure-empty"><i class="fas fa-sitemap"></i><h4>Bagan belum tersedia</h4><p>Struktur organisasi resmi akan ditampilkan setelah gambar bagan diunggah melalui halaman admin.</p></div>
		<?php endif; ?>
	</div>
</section>

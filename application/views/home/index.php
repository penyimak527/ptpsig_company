<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
function pyramid_image_url($path, $asset_path, $base_path)
{
	return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
}
?>
<section id="beranda" class="infetech-banner-area infetech-banner-slide">
	<div class="infetech-banner-slide-active item-1 pyramid-hero-panel">
		<div class="pyramid-hero-collage" aria-hidden="true" style="background-image: url('<?php echo $asset_path; ?>/img_pyramid/hero/hero-collage-1.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="infetech-banner-content">
						<h4 class="title" data-animation="fadeInDown" data-delay=".1s">Company Profile Piramidsoft</h4>
						<h1 class="" data-animation="fadeInLeft" data-delay=".3s">IT Solutions <img src="<?php echo $asset_path; ?>/images/banner-icon.png" alt=""> <br> Services</h1>
						<a class="main-btn" data-animation="fadeInUp" data-delay=".6s" href="#tentang">Kenali Kami</a>
						<img class="banner-arrow" data-animation="fadeInRight" data-delay=".9s" src="<?php echo $asset_path; ?>/images/banner-arrow.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="infetech-banner-slide-active item-2 pyramid-hero-panel">
		<div class="pyramid-hero-collage" aria-hidden="true" style="background-image: url('<?php echo $asset_path; ?>/img_pyramid/hero/hero-collage-2.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="infetech-banner-content">
						<h4 class="title" data-animation="fadeInDown" data-delay=".1s">Website, Aplikasi, dan Sistem Digital</h4>
						<h1 class="" data-animation="fadeInLeft" data-delay=".3s">Digital <img src="<?php echo $asset_path; ?>/images/banner-icon.png" alt=""> <br> Solutions</h1>
						<a class="main-btn" data-animation="fadeInUp" data-delay=".6s" href="#layanan">Lihat Layanan</a>
						<img class="banner-arrow" data-animation="fadeInRight" data-delay=".9s" src="<?php echo $asset_path; ?>/images/banner-arrow.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="infetech-banner-slide-active item-3 pyramid-hero-panel">
		<div class="pyramid-hero-collage" aria-hidden="true" style="background-image: url('<?php echo $asset_path; ?>/img_pyramid/hero/hero-collage-3.jpg');"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="infetech-banner-content">
						<h4 class="title" data-animation="fadeInDown" data-delay=".1s">Tim, Legalitas, Lokasi, dan Partner</h4>
						<h1 class="" data-animation="fadeInLeft" data-delay=".3s">Trusted <img src="<?php echo $asset_path; ?>/images/banner-icon.png" alt=""> <br> Company</h1>
						<a class="main-btn" data-animation="fadeInUp" data-delay=".6s" href="#legalitas">Lihat Profil</a>
						<img class="banner-arrow" data-animation="fadeInRight" data-delay=".9s" src="<?php echo $asset_path; ?>/images/banner-arrow.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="tentang" class="infetech-about-area pyramid-section-compact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="infetech-about-thumb pyramid-about-gallery animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
					<img class="pyramid-about-photo-main" src="<?php echo $asset_path; ?>/img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-13.jpg" alt="Tim Piramidsoft">
					<img class="thumb pyramid-about-photo-secondary" src="<?php echo $asset_path; ?>/img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-erzora-kosmetik.jpg" alt="Kegiatan bersama klien">
					<img class="pyramid-about-corner-logo" src="<?php echo $asset_path; ?>/img_pyramid/logo/LOGO PYRAMID SAJA.png" alt="Logo Pyramid">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="infetech-about-content">
					<span>Tentang Perusahaan</span>
					<h3 class="title">Piramidsoft hadir sebagai partner teknologi untuk digitalisasi bisnis.</h3>
					<p>Piramidsoft berfokus pada pengembangan solusi digital yang membantu operasional bisnis menjadi lebih efisien, profesional, dan siap berkembang. Informasi resmi mengenai tahun berdiri, badan hukum, dan profil legal akan dilengkapi setelah data final tersedia.</p>
					<div class="row">
						<div class="col-md-6">
							<div class="about-card">
								<div class="icon">
									<img src="<?php echo $asset_path; ?>/images/icon/icon-1.png" alt="">
								</div>
								<div class="content">
									<h4 class="title">Digitalisasi Bisnis</h4>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-card">
								<div class="icon">
									<img src="<?php echo $asset_path; ?>/images/icon/icon-2.png" alt="">
								</div>
								<div class="content">
									<h4 class="title">Solusi Custom</h4>
								</div>
							</div>
						</div>
					</div>
					<ul>
						<li><i class="fas fa-check-circle"></i> Website company profile, landing page, dan sistem informasi.</li>
						<li><i class="fas fa-check-circle"></i> Aplikasi web/mobile, POS, ERP custom, dan integrasi sistem.</li>
						<li><i class="fas fa-check-circle"></i> Maintenance, pengembangan fitur, dan konsultasi teknologi.</li>
					</ul>
					<a href="<?php echo site_url('profil/sejarah'); ?>" class="main-btn">Selengkapnya Tentang Pyramid</a>
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
					<span>Keunggulan Pyramid</span>
					<h4 class="title">Pendekatan teknologi yang fokus pada kebutuhan bisnis.</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Pyramid membantu bisnis, institusi, dan organisasi membangun solusi digital yang relevan, mudah digunakan, dan dapat dikembangkan.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item">
					<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt="Pendekatan Strategis"></div>
					<div class="content">
						<h4 class="title"><a href="#">Pendekatan Strategis</a></h4>
						<p>Setiap solusi dimulai dari pemahaman kebutuhan bisnis dan tujuan pengguna.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item">
					<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-2.png" alt="Solusi Kustom"></div>
					<div class="content">
						<h4 class="title"><a href="#">Solusi Kustom</a></h4>
						<p>Pengembangan dibuat menyesuaikan proses, skala, dan karakter operasional klien.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item">
					<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-3.png" alt="Pengalaman Pengguna"></div>
					<div class="content">
						<h4 class="title"><a href="#">Pengalaman Pengguna</a></h4>
						<p>Antarmuka dirancang agar mudah digunakan dan mendukung produktivitas.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item">
					<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt="Dukungan Berkelanjutan"></div>
					<div class="content">
						<h4 class="title"><a href="#">Dukungan Berkelanjutan</a></h4>
						<p>Tim membantu perawatan, peningkatan, dan pengembangan sistem jangka panjang.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="layanan" class="infetech-service-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Layanan Kami</span>
					<h4 class="title">Solusi digital untuk kebutuhan bisnis, lembaga, dan brand yang ingin berkembang.</h4>
				</div>
			</div>
		</div>
		<div class="row pyramid-service-row">
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="single-infetech-serice-item pyramid-service-card animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
					<div class="thumb"><img src="<?php echo $asset_path; ?>/img_pyramid/layanan/1.png" alt="Konsultasi Profesional"></div>
					<div class="content">
						<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt=""></div>
						<h3 class="title"><a href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Konsultasi Profesional</a></h3>
						<p class="pyramid-card-text">Merancang strategi digital yang efektif dan memilih teknologi yang tepat.</p>
						<a class="pyramid-small-btn" href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="single-infetech-serice-item pyramid-service-card animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
					<div class="thumb"><img src="<?php echo $asset_path; ?>/img_pyramid/layanan/2.png" alt="Pengembangan Kustom"></div>
					<div class="content">
						<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-2.png" alt=""></div>
						<h3 class="title"><a href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Pengembangan Kustom</a></h3>
						<p class="pyramid-card-text">Solusi aplikasi web dan mobile yang dirancang untuk kebutuhan bisnis.</p>
						<a class="pyramid-small-btn" href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="single-infetech-serice-item pyramid-service-card animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
					<div class="thumb"><img src="<?php echo $asset_path; ?>/img_pyramid/layanan/3.png" alt="Integrasi Sistem"></div>
					<div class="content">
						<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-3.png" alt=""></div>
						<h3 class="title"><a href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Integrasi Sistem</a></h3>
						<p class="pyramid-card-text">Mengintegrasikan berbagai sistem dan aplikasi dalam satu platform.</p>
						<a class="pyramid-small-btn" href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Selengkapnya</a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6">
				<div class="single-infetech-serice-item pyramid-service-card animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="thumb"><img src="<?php echo $asset_path; ?>/img_pyramid/layanan/4.png" alt="Dukungan Pemeliharaan"></div>
					<div class="content">
						<div class="icon"><img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt=""></div>
						<h3 class="title"><a href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Dukungan Pemeliharaan</a></h3>
						<p class="pyramid-card-text">Memastikan aplikasi tetap optimal dan aman dalam jangka panjang.</p>
						<a class="pyramid-small-btn" href="https://jasawebsitemurah.net/" target="_blank" rel="noopener noreferrer">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-feature-area pyramid-section-compact pyramid-technology-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title section-title-2">
					<span>Teknologi</span>
					<h4 class="title">Membangun masa depan dengan teknologi terkini.</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Pyramid menggunakan teknologi web, mobile, cloud, dan payment integration untuk memastikan solusi berjalan cepat, aman, dan mudah dikembangkan.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center pyramid-equal-row">
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item pyramid-equal-card pyramid-tech-card">
					<div class="content">
						<h4 class="title"><a href="#">Mobile Development</a></h4>
						<p>Capai pengguna melalui perangkat favorit mereka.</p>
						<div class="pyramid-tech-icons">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_mobile_dev/1.png" alt="Mobile Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_mobile_dev/2.png" alt="Mobile Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_mobile_dev/3.png" alt="Mobile Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_mobile_dev/4.png" alt="Mobile Development">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item pyramid-equal-card pyramid-tech-card">
					<div class="content">
						<h4 class="title"><a href="#">Web Development</a></h4>
						<p>Bangun produk digital dan integrasikan proses bisnis di web.</p>
						<div class="pyramid-tech-icons">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_web_dev/1.png" alt="Web Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_web_dev/2.png" alt="Web Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_web_dev/3.png" alt="Web Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_web_dev/4.png" alt="Web Development">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item pyramid-equal-card pyramid-tech-card">
					<div class="content">
						<h4 class="title"><a href="#">Cloud Development</a></h4>
						<p>Percepat transformasi digital dengan solusi berbasis cloud.</p>
						<div class="pyramid-tech-icons">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_cloud_dev/1.png" alt="Cloud Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_cloud_dev/2.png" alt="Cloud Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_cloud_dev/3.png" alt="Cloud Development">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_cloud_dev/4.png" alt="Cloud Development">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-infetech-feature-item pyramid-equal-card pyramid-tech-card">
					<div class="content">
						<h4 class="title"><a href="#">Payment Integration</a></h4>
						<p>Dukung efisiensi transaksi keuangan bisnis.</p>
						<div class="pyramid-tech-icons">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_payment/1.png" alt="Payment Integration">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_payment/2.png" alt="Payment Integration">
							<img src="<?php echo $asset_path; ?>/img_pyramid/tech_payment/3.png" alt="Payment Integration">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="legalitas" class="infetech-cta-area pyramid-legal-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="infetech-cta-box pyramid-legal-box animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="cta-content">
						<span class="pyramid-legal-label">Legalitas Perusahaan</span>
						<h2 class="title">PT Pyramidsoft Indonesia Group</h2>
						<p>Informasi legalitas perusahaan ditampilkan pada beranda sebagai bagian dari pengenalan resmi Pyramid.</p>
						<ul>
							<li><i class="fas fa-check-circle"></i> Identitas badan usaha: PT Pyramidsoft Indonesia Group.</li>
							<li><i class="fas fa-check-circle"></i> Informasi dan dokumen resmi dapat dikonfirmasi melalui kontak perusahaan.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="brand" class="infetech-sponser-area">
	<div class="container">
		<div class="row infetech-sponser-slide">
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/0187d9dfdd0694b592053acd8af559f4.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/0778d17fcf7963c4c64955a6e3e54315.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/0942c2a7db4ded282a9980d502b7a2b4.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/21eac2c4b7de033bd0b6aef9bdc31862.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/2e522e90e04296115a9f057dc7741b69.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/3522897f017be6ae19962c1cf37102e2.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/3df21e34398bdbcde1d75b03dfe5dda2.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/43be820cac11f30adbb15f9aeef3919d.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/4afa0034acbd524c02d247c0de57ade5.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/54ab1944739e31248ab92ae4ef3f0152.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/5f512c3662a0db595a5366bc0a94aa12.png" alt="Brand client Piramidsoft"></div></div>
			<div class="col-lg-3"><div class="infetech-sponser-item"><img src="<?php echo $asset_path; ?>/img_pyramid/klien/5f68e7bff328992035ae53b7c936c14a.png" alt="Brand client Piramidsoft"></div></div>
		</div>
	</div>
</div>

<section id="tim" class="infetech-team-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center mb-50">
			<div class="col-lg-6">
				<div class="section-title">
					<span>Tim Pyramid</span>
					<h4 class="title">Orang-orang yang mengelola pengembangan dan pendampingan digital.</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Tim Pyramid bekerja bersama dalam pengembangan, implementasi, dan pendampingan solusi digital untuk klien.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (empty($teams)) : ?>
				<div class="col-lg-12">
					<div class="pyramid-meta-list text-center">
						<p>Data tim belum tersedia. Silakan tambahkan anggota tim melalui halaman admin.</p>
					</div>
				</div>
			<?php endif; ?>
			<?php foreach (array_slice($teams, 0, 3) as $index => $team) : ?>
				<?php $team_image = !empty($team['image']) ? $team['image'] : 'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-13.jpg'; ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-tema-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="top-line"></div>
						<div class="thumb">
							<img src="<?php echo pyramid_image_url($team_image, $asset_path, $base_path); ?>" alt="<?php echo $team['name']; ?>">
						</div>
						<div class="content">
							<h4 class="title"><?php echo $team['name']; ?></h4>
							<span><?php echo $team['position']; ?></span>
							<?php if (!empty($team['linkedin']) || !empty($team['instagram'])) : ?>
								<div class="share-icon">
									<i class="fas fa-share-alt"></i>
									<ul>
										<?php if (!empty($team['linkedin'])) : ?>
											<li><a href="<?php echo $team['linkedin']; ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a></li>
										<?php endif; ?>
										<?php if (!empty($team['instagram'])) : ?>
											<li><a href="<?php echo $team['instagram']; ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
										<?php endif; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center mt-40">
				<a class="main-btn pyramid-home-outline-btn" href="<?php echo site_url('profil/tim'); ?>">Lihat Seluruh Tim</a>
			</div>
		</div>
	</div>
</section>

<section class="infetech-blog-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center mb-55">
					<span>Kegiatan</span>
					<h4 class="title">Beberapa aktivitas dan proses kerja Piramidsoft bersama klien.</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (empty($activities)) : ?>
				<div class="col-lg-12">
					<div class="pyramid-meta-list text-center">
						<p>Belum ada kegiatan yang dipublikasikan.</p>
					</div>
				</div>
			<?php endif; ?>
			<?php foreach (array_slice($activities, 0, 3) as $index => $activity) : ?>
				<?php $activity_image = !empty($activity['image']) ? $activity['image'] : 'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-client.PNG'; ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="thumb">
							<a href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>"><img src="<?php echo pyramid_image_url($activity_image, $asset_path, $base_path); ?>" alt="<?php echo $activity['title']; ?>"></a>
							<span><?php echo $activity['category']; ?></span>
						</div>
						<div class="content">
							<div class="blog-meta">
								<ul>
									<li><i class="fal fa-user-circle"></i> <?php echo $activity['client']; ?></li>
									<li><i class="fal fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($activity['date_iso'])); ?></li>
								</ul>
								<h4 class="title"><a href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>"><?php echo $activity['title']; ?></a></h4>
								<a href="<?php echo site_url('kegiatan/detail/' . $activity['slug']); ?>">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center mt-40">
				<a class="main-btn pyramid-home-outline-btn" href="<?php echo site_url('kegiatan'); ?>">Lihat Semua Kegiatan</a>
			</div>
		</div>
	</div>
</section>

<!-- <section class="infetech-video-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="video-content animated wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
					<div class="play-btn">
						<a class="video-popup" href="#"><i class="fas fa-play"></i></a>
					</div>
					<span>Ringkasan Perusahaan</span>
					<h2 class="title">Save Time and Money with a Top IT Solution Agency</h2>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="video-content-wrapper animated wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms">
					<div class="video-content-box">
						<div class="item">
							<h4 class="title">3+</h4>
							<span>Layanan utama <br> tersedia</span>
						</div>
					</div>
					<div class="video-content-box item-2 animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="item">
							<h4 class="title">6+</h4>
							<span>Kategori solusi <br> digital</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="infetech-blog-area pt-115 pb-120">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<span>Informasi Perusahaan</span>
					<h4 class="title">News & Articles</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
					<div class="thumb">
						<a href="#tentang"><img src="<?php echo $asset_path; ?>/images/blog-1.jpg" alt=""></a>
						<span>Profil</span>
					</div>
					<div class="content">
						<div class="blog-meta">
							<ul>
								<li><i class="fal fa-user-circle"></i> by Piramidsoft</li>
								<li><i class="fal fa-comments"></i> Company</li>
							</ul>
							<h4 class="title"><a href="#tentang">Profil perusahaan dan sejarah berdiri.</a></h4>
							<a href="#tentang">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
					<div class="thumb">
						<a href="#legalitas"><img src="<?php echo $asset_path; ?>/images/blog-2.jpg" alt=""></a>
						<span>Legal</span>
					</div>
					<div class="content">
						<div class="blog-meta">
							<ul>
								<li><i class="fal fa-user-circle"></i> by Piramidsoft</li>
								<li><i class="fal fa-comments"></i> Legalitas</li>
							</ul>
							<h4 class="title"><a href="#legalitas">Legalitas, lokasi, dan struktur organisasi.</a></h4>
							<a href="#legalitas">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
					<div class="thumb">
						<a href="#brand"><img src="<?php echo $asset_path; ?>/images/blog-3.jpg" alt=""></a>
						<span>Brand</span>
					</div>
					<div class="content">
						<div class="blog-meta">
							<ul>
								<li><i class="fal fa-user-circle"></i> by Piramidsoft</li>
								<li><i class="fal fa-comments"></i> Partner</li>
							</ul>
							<h4 class="title"><a href="#brand">Brand partner yang bekerja sama.</a></h4>
							<a href="#brand">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="infetech-cta-2-area pt-100 pb-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9">
				<div class="cta-content">
					<p>Layanan lengkap akan diarahkan ke website jasa website murah.</p>
					<h2 class="title">Looking for the Best IT Business Solutions?</h2>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="cta-btn text-right">
					<a class="main-btn" href="https://jasawebsitemurah.net/">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section> -->

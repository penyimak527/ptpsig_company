<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
function pyramid_image_url($path, $asset_path, $base_path)
{
	return strpos($path, 'upload/') === 0 ? $base_path . '/' . $path : $asset_path . '/' . $path;
}
?>
<section id="beranda" class="pyramid-hero-collage">
	<div class="pyramid-collage-grid">
		<?php foreach ($hero_images as $index => $image) : ?>
			<img class="<?php echo $index % 5 === 0 ? 'wide' : ($index % 4 === 0 ? 'tall' : ''); ?>" src="<?php echo pyramid_image_url($image, $asset_path, $base_path); ?>" alt="Aktivitas Piramidsoft">
		<?php endforeach; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="pyramid-hero-content">
					<h4>Company Profile <?php echo $company['name']; ?></h4>
					<h1>Partner Digital untuk Bisnis yang Tumbuh</h1>
					<p><?php echo $company['legal_name']; ?> memperkenalkan tim, layanan, legalitas, lokasi, struktur organisasi, visi misi, dan kegiatan perusahaan secara profesional.</p>
					<a class="main-btn" href="#tentang">Kenali Kami</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="tentang" class="infetech-about-area pyramid-section-compact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="infetech-about-thumb animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
					<img src="<?php echo $asset_path; ?>/images/about-thumb-1.jpg" alt="">
					<img class="thumb" src="<?php echo $asset_path; ?>/images/about-thumb-2.jpg" alt="">
					<div class="about-box">
						<h4 class="title">Sejak</h4>
						<span><?php echo $company['established']; ?></span>
					</div>
					<img class="about-logo" src="<?php echo $asset_path; ?>/images/about-logo.png" alt="">
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
					<a href="#legalitas" class="main-btn">Lihat Profil</a>
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
		<div class="row">
			<?php foreach ($services as $index => $service) : ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-infetech-serice-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="thumb">
							<img src="<?php echo pyramid_image_url($service['image'], $asset_path, $base_path); ?>" alt="<?php echo $service['title']; ?>">
						</div>
						<div class="content">
							<div class="icon">
								<img src="<?php echo $asset_path; ?>/images/icon/<?php echo $service['icon']; ?>" alt="">
							</div>
							<h3 class="title"><a href="<?php echo $company['service_url']; ?>"><?php echo $service['title']; ?></a></h3>
							<p class="pyramid-card-text"><?php echo $service['description']; ?></p>
							<a class="pyramid-small-btn" href="<?php echo $company['service_url']; ?>">Selengkapnya</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="infetech-feature-area pyramid-section-compact">
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
		<div class="row justify-content-center">
			<?php foreach ($tech_groups as $tech) : ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-infetech-feature-item">
						<div class="content">
							<h4 class="title"><a href="#"><?php echo $tech['title']; ?></a></h4>
							<p><?php echo $tech['description']; ?></p>
							<div class="row g-2">
								<?php for ($i = 1; $i <= min($tech['total'], 4); $i++) : ?>
									<div class="col-3">
										<img src="<?php echo $asset_path; ?>/img_pyramid/<?php echo $tech['folder']; ?>/<?php echo $i; ?>.png" alt="<?php echo $tech['title']; ?>" style="max-width: 42px;">
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div id="legalitas" class="infetech-cta-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="infetech-cta-box animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="row">
						<div class="col-lg-3">
							<div class="cta-thumb">
								<img src="<?php echo $asset_path; ?>/images/cta-thumb.png" alt="">
							</div>
						</div>
						<div class="col-lg-9">
							<div class="cta-content">
								<h2 class="title">Legalitas, lokasi, dan kontak resmi <?php echo $company['name']; ?></h2>
								<div class="row align-items-center">
									<div class="col-lg-8">
										<ul>
											<li><i class="fas fa-check-circle"></i> Nama legal perusahaan: <?php echo $company['legal_name']; ?>.</li>
											<li><i class="fas fa-check-circle"></i> Tahun berdiri: <?php echo $company['established']; ?>.</li>
											<li><i class="fas fa-check-circle"></i> Lokasi kantor: <?php echo $company['address']; ?>.</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<a href="#kontak" class="main-btn ml-30">Kontak Kami</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section id="struktur" class="infetech-project-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center mb-55">
			<div class="col-lg-6">
				<div class="section-title">
					<span>Struktur Organisasi</span>
					<h4 class="title">Improve & Enhance Our Tech Projects</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Susunan tim akan membantu pengunjung memahami peran leadership, management, development, dan support di Piramidsoft.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid pl-160 pr-160">
		<div class="row infetech-project-slide">
			<?php foreach ($struktur_organisasi as $structure) : ?>
				<div class="col-lg-3">
					<div class="single-project-item">
						<img src="<?php echo pyramid_image_url($structure['image'], $asset_path, $base_path); ?>" alt="<?php echo $structure['position']; ?>">
						<div class="single-project-overlay">
							<h4 class="title"><?php echo $structure['position']; ?></h4>
							<span><?php echo $structure['division']; ?></span>
							<a href="#tim"><i class="fal fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div id="brand" class="infetech-sponser-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center mb-55">
					<span>Pelanggan Kami</span>
					<h4 class="title">Berbagai Macam Industri dan Bisnis yang Telah Mempercayai Kami</h4>
				</div>
			</div>
		</div>
		<div class="row infetech-sponser-slide">
			<?php foreach ($brands as $brand) : ?>
				<div class="col-lg-3">
					<div class="infetech-sponser-item">
						<img src="<?php echo $asset_path; ?>/<?php echo $brand; ?>" alt="Brand client Piramidsoft">
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<!-- <section class="infetech-testimonial-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center mb-55">
					<span>Profil Perusahaan</span>
					<h3 class="title">What They’re Talking?</h3>
				</div>
			</div>
		</div>
		<div class="row infetech-testimonial-slide">
			<div class="col-lg-6">
				<div class="single-testimonial-box">
					<div class="single-testimonial-user">
						<div class="thumb">
							<img src="<?php echo $asset_path; ?>/images/testimonial-thumb-1.png" alt="">
						</div>
						<div class="user-content">
							<h5 class="title">Piramidsoft</h5>
							<span>Digital Partner</span>
							<img src="<?php echo $asset_path; ?>/images/testimonial-shape.png" alt="">
						</div>
					</div>
					<div class="single-testimonial-item">
						<ul>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<p>Piramidsoft membantu klien mengenalkan profil perusahaan, membangun sistem digital, dan mengelola kebutuhan teknologi secara profesional.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="single-testimonial-box">
					<div class="single-testimonial-user">
						<div class="thumb">
							<img src="<?php echo $asset_path; ?>/images/testimonial-thumb-2.png" alt="">
						</div>
						<div class="user-content">
							<h5 class="title">Layanan Digital</h5>
							<span>Website & System</span>
							<img src="<?php echo $asset_path; ?>/images/testimonial-shape.png" alt="">
						</div>
					</div>
					<div class="single-testimonial-item">
						<ul>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
							<li><i class="fas fa-star"></i></li>
						</ul>
						<p>Detail brand partner, legalitas, visi-misi, dan struktur organisasi akan dilengkapi setelah data final diberikan.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section id="tim" class="infetech-team-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center mb-50">
			<div class="col-lg-6">
				<div class="section-title">
					<span>Our Expert People</span>
					<h4 class="title">Meet Our Professional Team Members</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Foto dan nama asli tim akan dipasang setelah file dan data final dikirim. Area ini memakai layout team bawaan template.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($teams as $index => $team) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-tema-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="top-line"></div>
						<div class="thumb">
							<img src="<?php echo pyramid_image_url($team['image'], $asset_path, $base_path); ?>" alt="<?php echo $team['name']; ?>">
						</div>
						<div class="content">
							<h4 class="title"><?php echo $team['name']; ?></h4>
							<span><?php echo $team['position']; ?></span>
							<div class="share-icon">
								<i class="fas fa-share-alt"></i>
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
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
			<?php foreach (array_slice($activities, 0, 3) as $index => $activity) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="thumb">
							<a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>"><img src="<?php echo pyramid_image_url($activity['image'], $asset_path, $base_path); ?>" alt="<?php echo $activity['title']; ?>"></a>
							<span><?php echo $activity['category']; ?></span>
						</div>
						<div class="content">
							<div class="blog-meta">
								<ul>
									<li><i class="fal fa-user-circle"></i> <?php echo $activity['client']; ?></li>
									<li><i class="fal fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($activity['date'])); ?></li>
								</ul>
								<h4 class="title"><a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>"><?php echo $activity['title']; ?></a></h4>
								<a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>">Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center mt-40">
				<a class="main-btn" href="<?php echo site_url('home/kegiatan'); ?>">Lihat Semua Kegiatan</a>
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
					<a class="main-btn" href="<?php echo $company['service_url']; ?>">Learn More</a>
				</div>
			</div>
		</div>
	</div>
</section> -->

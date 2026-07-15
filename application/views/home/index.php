<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="beranda" class="infetech-banner-area infetech-banner-slide">
	<div class="infetech-banner-slide-active item-1">
		<div class="item-1"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="infetech-banner-content">
						<h4 class="title" data-animation="fadeInDown" data-delay=".1s">Company Profile <?php echo $company['name']; ?></h4>
						<h1 class="" data-animation="fadeInLeft" data-delay=".3s">IT Solutions <img src="<?php echo $asset_path; ?>/images/banner-icon.png" alt=""> <br> Services</h1>
						<a class="main-btn" data-animation="fadeInUp" data-delay=".6s" href="#tentang">Kenali Kami</a>
						<img class="banner-arrow" data-animation="fadeInRight" data-delay=".9s" src="<?php echo $asset_path; ?>/images/banner-arrow.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="infetech-banner-slide-active item-2">
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
	<div class="infetech-banner-slide-active item-3">
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

<section id="tentang" class="infetech-about-area">
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

<section id="layanan" class="infetech-service-area">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $index => $service) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-infetech-serice-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="<?php echo $index * 300; ?>ms">
						<div class="thumb">
							<img src="<?php echo $asset_path; ?>/images/<?php echo $service['image']; ?>" alt="">
						</div>
						<div class="content">
							<div class="icon">
								<img src="<?php echo $asset_path; ?>/images/icon/<?php echo $service['icon']; ?>" alt="">
							</div>
							<h3 class="title"><a href="<?php echo $company['service_url']; ?>"><?php echo $service['title']; ?></a></h3>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="infetech-feature-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title section-title-2">
					<span>Visi, Misi, dan Fokus</span>
					<h4 class="title">Dealing in all Professional IT Services</h4>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title pl-100">
					<p>Piramidsoft menyiapkan layanan teknologi yang membantu perusahaan, lembaga, sekolah, dan pelaku usaha mengenalkan profil serta membangun sistem digital.</p>
				</div>
			</div>
		</div>
		<div class="row infetech-feature-slide">
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Visi <br> Perusahaan</a></h4>
						<p>Menjadi partner digital terpercaya.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-2.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Misi <br> Utama</a></h4>
						<p>Menghadirkan solusi digital tepat guna.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-3.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Legalitas <br> Usaha</a></h4>
						<p>Data resmi perusahaan akan dilengkapi.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Struktur <br> Tim</a></h4>
						<p>Peran organisasi ditampilkan jelas.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-2.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Brand <br> Partner</a></h4>
						<p>Logo kerja sama akan ditampilkan.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="single-infetech-feature-item">
					<div class="icon">
						<img src="<?php echo $asset_path; ?>/images/icon/service-icon-3.png" alt="">
					</div>
					<div class="content">
						<h4 class="title"><a href="#">Digital <br> Support</a></h4>
						<p>Pendampingan dan maintenance sistem.</p>
					</div>
				</div>
			</div>
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
								<h2 class="title">Legalitas, lokasi, dan kontak resmi Piramidsoft</h2>
								<div class="row align-items-center">
									<div class="col-lg-8">
										<ul>
											<li><i class="fas fa-check-circle"></i> Nama legal perusahaan: menunggu data resmi.</li>
											<li><i class="fas fa-check-circle"></i> NIB/AHU/NPWP: menunggu data yang boleh dipublikasikan.</li>
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

<section id="struktur" class="infetech-project-area pt-115 ">
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
			<?php
			$structures = array(
				array('image' => 'project-1.jpg', 'title' => 'Leadership', 'label' => 'DIREKTUR / FOUNDER'),
				array('image' => 'project-2.jpg', 'title' => 'Management', 'label' => 'PROJECT / OPERATION'),
				array('image' => 'project-3.jpg', 'title' => 'Development', 'label' => 'WEB / MOBILE / SYSTEM'),
				array('image' => 'project-4.jpg', 'title' => 'Support', 'label' => 'MAINTENANCE / QA'),
				array('image' => 'project-2.jpg', 'title' => 'Brand Partner', 'label' => 'CLIENT / PARTNER'),
			);
			foreach ($structures as $structure) :
			?>
				<div class="col-lg-3">
					<div class="single-project-item">
						<img src="<?php echo $asset_path; ?>/images/<?php echo $structure['image']; ?>" alt="">
						<div class="single-project-overlay">
							<h4 class="title"><?php echo $structure['title']; ?></h4>
							<span><?php echo $structure['label']; ?></span>
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
		<div class="row infetech-sponser-slide">
			<?php foreach ($brands as $brand) : ?>
				<div class="col-lg-3">
					<div class="infetech-sponser-item">
						<img src="<?php echo $asset_path; ?>/images/<?php echo $brand; ?>" alt="">
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<section class="infetech-testimonial-area">
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
</section>

<section id="tim" class="infetech-team-area">
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
							<img src="<?php echo $asset_path; ?>/images/<?php echo $team['image']; ?>" alt="">
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

<section class="infetech-video-area">
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
</section>

<section class="infetech-blog-area pt-115 pb-120">
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
</section>

<section class="infetech-cta-2-area pt-100 pb-100">
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
</section>

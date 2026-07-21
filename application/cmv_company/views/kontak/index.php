<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Kontak</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Kontak</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-contact-area pyramid-section-compact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title">
					<span>Hubungi Kami</span>
					<h4 class="title">Diskusikan kebutuhan digital Anda bersama tim Pyramid.</h4>
					<p>Gunakan informasi kontak resmi berikut untuk konsultasi mengenai website, aplikasi, integrasi sistem, dan transformasi digital.</p>
				</div>
				<div class="pyramid-meta-list">
					<ul>
						<li><strong>WhatsApp</strong><span><?php echo $company['phone']; ?></span></li>
						<li><strong>Email</strong><span><?php echo $company['email']; ?></span></li>
						<li><strong>Alamat</strong><span><?php echo $company['address']; ?></span></li>
						<li><strong>Jam</strong><span>Senin - Sabtu: 08.00 - 17.00 WIB</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="home-contact-thumb">
					<img src="<?php echo $asset_path; ?>/images/home-contact-thumb.jpg" alt="Kontak <?php echo $company['name']; ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Lokasi</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Lokasi</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-contact-info-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Lokasi Perusahaan</span>
					<h4 class="title">Kantor utama dan representatif Pyramid.</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="pyramid-meta-list mb-30">
					<h4 class="title">Kantor Utama</h4>
					<ul>
						<li><strong>Alamat</strong><span><?php echo $company['address']; ?></span></li>
						<li><strong>Kontak</strong><span><?php echo $company['phone']; ?></span></li>
						<li><strong>Email</strong><span><?php echo $company['email']; ?></span></li>
					</ul>
					<a class="main-btn mt-30" href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($company['address']); ?>" target="_blank" rel="noopener noreferrer">Petunjuk Arah</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="pyramid-meta-list mb-30">
					<h4 class="title">Kantor Representatif</h4>
					<ul>
						<li><strong>Alamat</strong><span><?php echo $company['branch_address']; ?></span></li>
						<li><strong>Jam</strong><span>Senin - Sabtu: 08.00 - 17.00 WIB</span></li>
					</ul>
					<a class="main-btn mt-30" href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($company['branch_address']); ?>" target="_blank" rel="noopener noreferrer">Petunjuk Arah</a>
				</div>
			</div>
		</div>
	</div>
</section>

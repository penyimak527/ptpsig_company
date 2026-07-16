<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Visi Misi</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-service-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Profile</span>
					<h4 class="title">Arah dan komitmen Piramidsoft dalam memberikan solusi digital.</h4>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="single-infetech-serice-item">
					<div class="thumb">
						<img src="<?php echo $asset_path; ?>/images/service-1.jpg" alt="<?php echo $visi_misi['visi']['title']; ?>">
					</div>
					<div class="content">
						<div class="icon">
							<img src="<?php echo $asset_path; ?>/images/icon/service-icon-1.png" alt="">
						</div>
						<h3 class="title"><a href="#"><?php echo $visi_misi['visi']['title']; ?></a></h3>
						<p class="pyramid-card-text"><?php echo $visi_misi['visi']['description']; ?></p>
					</div>
				</div>
			</div>
			<?php foreach ($visi_misi['misi'] as $index => $mission) : ?>
				<div class="col-lg-6 col-md-6">
					<div class="single-infetech-serice-item">
						<div class="thumb">
							<img src="<?php echo $asset_path; ?>/images/service-<?php echo ($index % 3) + 1; ?>.jpg" alt="<?php echo $mission['title']; ?>">
						</div>
						<div class="content">
							<div class="icon">
								<img src="<?php echo $asset_path; ?>/images/icon/service-icon-<?php echo ($index % 3) + 1; ?>.png" alt="">
							</div>
							<h3 class="title"><a href="#"><?php echo $mission['title']; ?></a></h3>
							<p class="pyramid-card-text"><?php echo $mission['description']; ?></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

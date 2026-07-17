<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Company profile Piramidsoft, mitra digital untuk pengembangan website, aplikasi, integrasi sistem, dan solusi teknologi bisnis.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo $asset_path; ?>/images/favicon.png" type="image/png">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/default.css">
	<link rel="stylesheet" href="<?php echo $asset_path; ?>/css/style.css">
	<style>
		.pyramid-section-compact {
			padding-top: 80px !important;
			padding-bottom: 80px !important;
		}

		.pyramid-card-text {
			font-size: 15px;
			line-height: 26px;
			color: #6c6a72;
			margin: 12px 0 18px;
		}

		.pyramid-small-btn {
			display: inline-block;
			background: #f2f4f8;
			color: #0e1f35;
			font-size: 14px;
			font-weight: 700;
			padding: 9px 18px;
		}

		.pyramid-small-btn:hover {
			background: #0e1f35;
			color: #fff;
		}

		.pyramid-meta-list {
			background: #f2f4f8;
			padding: 30px;
		}

		.pyramid-meta-list li {
			display: flex;
			justify-content: space-between;
			gap: 20px;
			border-bottom: 1px solid #dfe3ea;
			padding: 12px 0;
			color: #6c6a72;
		}

		.pyramid-meta-list li:last-child {
			border-bottom: 0;
		}

		.pyramid-meta-list strong {
			color: #0e1f35;
		}

		.pyramid-hero-collage {
			position: relative;
			min-height: 760px;
			background: #0d1424;
			overflow: hidden;
			display: flex;
			align-items: center;
			padding-top: 130px;
			padding-bottom: 70px;
		}

		.pyramid-hero-collage::before {
			content: "";
			position: absolute;
			inset: 0;
			background: linear-gradient(90deg, rgba(13, 20, 36, .95) 0%, rgba(13, 20, 36, .78) 42%, rgba(13, 20, 36, .28) 100%);
			z-index: 1;
		}

		.pyramid-hero-content {
			position: relative;
			z-index: 2;
			max-width: 670px;
			padding-top: 60px;
		}

		.pyramid-hero-content h4 {
			color: #fff;
			font-weight: 700;
			margin-bottom: 18px;
		}

		.pyramid-hero-content h1 {
			color: #fff;
			font-size: 74px;
			line-height: 82px;
			font-weight: 800;
			margin-bottom: 26px;
		}

		.pyramid-hero-content p {
			color: #d9deea;
			font-size: 18px;
			line-height: 30px;
			margin-bottom: 34px;
		}

		.pyramid-collage-grid {
			position: absolute;
			top: 115px;
			right: 0;
			width: 58%;
			height: calc(100% - 115px);
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-auto-rows: 150px;
			gap: 8px;
			transform: rotate(-3deg) scale(1.08);
			z-index: 0;
		}

		.pyramid-collage-grid img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border-radius: 6px;
			filter: saturate(1.05);
		}

		.pyramid-collage-grid .wide {
			grid-column: span 2;
		}

		.pyramid-collage-grid .tall {
			grid-row: span 2;
		}

		@media (max-width: 991px) {
			.pyramid-hero-collage {
				min-height: 680px;
				padding-top: 120px;
			}

			.pyramid-hero-content h1 {
				font-size: 46px;
				line-height: 56px;
			}

			.pyramid-collage-grid {
				width: 100%;
				opacity: .35;
				grid-auto-rows: 120px;
			}
		}
	</style>
	
</head>

<body>
	<div class="preloader">
		<div class="lds-ellipsis">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="search-popup">
		<button class="close-search style-two"><span class="fal fa-times"></span></button>
		<button class="close-search"><span class="fal fa-long-arrow-up"></span></button>
		<form method="post" action="#">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Cari informasi" required="">
				<button type="submit"><i class="fal fa-search"></i></button>
			</div>
		</form>
	</div>

	<div class="off_canvars_overlay"></div>
	<div class="offcanvas_menu">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="offcanvas_menu_wrapper">
						<div class="canvas_close">
							<a href="javascript:void(0)"><i class="fa fa-times"></i></a>
						</div>
						<div class="offcanvas-social">
							<ul class="text-center">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
							</ul>
						</div>
						<div id="menu" class="text-left ">
							<ul class="offcanvas_main_menu">
								<?php foreach ($menus as $menu) : ?>
									<li class="<?php echo !empty($menu['children']) ? 'menu-item-has-children' : ''; ?>">
										<a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a>
										<?php if (!empty($menu['children'])) : ?>
											<ul class="sub-menu">
												<?php foreach ($menu['children'] as $child) : ?>
													<li><a href="<?php echo $child['url']; ?>"><?php echo $child['label']; ?></a></li>
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="offcanvas_footer">
							<span><a href="mailto:<?php echo $company['email']; ?>"><i class="fa fa-envelope-o"></i> <?php echo $company['email']; ?></a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="infetech-header-area header-sticky">
		<div class="header-wrapper">
			<div class="templates-logo">
				<!-- <a href="#beranda"><img src="<?php echo $asset_path; ?>/images/logo-white.png" alt="<?php echo $company['name']; ?>"></a> -->
				<a href="<?php echo site_url(); ?>#beranda"><img src="<?php echo $asset_path; ?>/img_pyramid/logo/logo_pyramid_putih.png" alt="<?php echo $company['name']; ?>" style="width: 90px;"></a>
			</div>
			<div class="header-box">
				<div class="header-topbar">
					<div class="row g-0 align-items-center ">
						<div class="col-lg-6">
							<div class="header-topbar-text">
								<p>Company Profile <?php echo $company['name']; ?></p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="header-topbar-info-wrapper">
								<div class="header-topbar-info">
									<ul>
										<li><i class="fas fa-envelope"></i> <?php echo $company['email']; ?></li>
										<li><i class="fas fa-clock"></i> Senin - Sabtu: 08.00 - 17.00 WIB</li>
									</ul>
								</div>
								<div class="header-topbar-social">
									<ul>
										<li><i class="fab fa-facebook-f"></i></li>
										<li><i class="fab fa-instagram"></i></li>
										<li><i class="fab fa-linkedin-in"></i></li>
										<li><i class="fab fa-whatsapp"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-main-nav">
					<div class="header-main-nav-box">
						<ul>
							<?php foreach ($menus as $menu) : ?>
								<li class="<?php echo !empty($menu['children']) ? 'menu-item-has-children' : ''; ?>">
									<a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a>
									<?php if (!empty($menu['children'])) : ?>
										<ul class="sub-menu">
											<?php foreach ($menu['children'] as $child) : ?>
												<li><a href="<?php echo $child['url']; ?>"><?php echo $child['label']; ?></a></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="header-main-info">
						<div class="header-mini-btn">
							<ul>
								<li><a class="search-box-btn" href="#"><i class="fal fa-search"></i></a></li>
								<li><a class="toggle-bar canvas_open" href="#"><i class="fal fa-bars"></i></a></li>
							</ul>
						</div>
						<div class="header-main-info-contact">
							<div class="icon">
								<img src="<?php echo $asset_path; ?>/images/icon/phone.svg" alt="">
							</div>
							<div class="content">
								<span>Konsultasi</span>
								<a href="#kontak">Hubungi Kami</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

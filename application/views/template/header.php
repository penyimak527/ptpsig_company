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
									<li class="menu-item-has-children active"><a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a></li>
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
				<a href="#beranda"><img src="<?php echo $asset_path; ?>/img_pyramid/logo/logo_pyramid_putih.png" alt="<?php echo $company['name']; ?>" style="width: 90px;"></a>
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
								<li><a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a></li>
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

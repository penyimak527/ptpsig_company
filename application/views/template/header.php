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
		:root {
			--pyramid-primary: #0b376d;
			--pyramid-primary-dark: #071f3f;
			--pyramid-secondary: #2f6fae;
			--pyramid-primary-soft: #eef4fa;
			--pyramid-border: #dbe5f0;
		}

		.infetech-header-area,
		.infetech-header-area .header-wrapper {
			background: #fff;
		}

		.infetech-header-area .header-wrapper {
			align-items: stretch;
			border-bottom: 2px solid var(--pyramid-primary-soft);
		}

		.infetech-header-area .templates-logo {
			display: flex;
			flex: 0 0 180px;
			align-items: center;
			justify-content: center;
			height: auto !important;
			min-height: 93px;
			align-self: stretch;
			padding: 12px 30px !important;
			background: var(--pyramid-primary-dark);
		}

		.infetech-header-area .templates-logo img {
			width: 100px !important;
			max-width: 100%;
		}

		.infetech-header-area .header-box .header-topbar .header-topbar-text p {
			line-height: 30px;
			margin-bottom: 0;
		}

		.header-topbar-info-wrapper .header-topbar-social {
			background: var(--pyramid-primary-soft);
			padding: 5px 36px;
		}

		.header-topbar-info-wrapper .header-topbar-social ul li,
		.header-topbar-info-wrapper .header-topbar-info ul li i {
			color: var(--pyramid-primary);
		}

		.header-main-nav {
			height: 62px;
			background: #fff;
		}

		.header-main-nav-box ul li {
			padding: 18px 0;
			margin-right: 32px;
		}

		.header-main-nav-box ul li a {
			font-size: 15px;
		}

		.header-main-nav-box ul li a::before {
			background: var(--pyramid-primary);
		}

		.header-main-nav-box ul li .sub-menu > li:hover > a {
			background-color: var(--pyramid-primary);
		}

		.header-main-info .header-main-info-contact {
			padding-left: 52px;
			margin-right: 46px;
		}

		.header-main-info .header-main-info-contact .icon {
			width: 40px;
			height: 40px;
			line-height: 40px;
			background: var(--pyramid-primary);
		}

		.header-main-info .header-main-info-contact .icon img {
			max-width: 19px;
		}

		.header-main-info .header-main-info-contact .content a {
			font-size: 16px;
		}

		.header-main-info .header-mini-btn {
			margin-right: 20px;
		}

		.header-main-info .header-mini-btn::before {
			height: 38px;
		}

		.header-main-info .header-mini-btn ul li a {
			font-size: 18px;
			margin-right: 22px;
		}

		.main-btn,
		.search-popup .form-group button,
		.infetech-about-thumb .about-box,
		.single-infetech-serice-item .content .icon,
		.single-infetech-feature-item .icon,
		.single-blog-item .thumb span,
		.single-blog-item .content .blog-meta > a,
		.single-tema-item .share-icon > i,
		.go-top-area .go-top {
			background-color: var(--pyramid-primary) !important;
			border-color: var(--pyramid-primary) !important;
		}

		.main-btn::before {
			background-color: var(--pyramid-primary-dark) !important;
		}

		.main-btn:hover {
			background-color: #fff !important;
			color: var(--pyramid-primary) !important;
			border-color: var(--pyramid-primary) !important;
		}

		.main-btn:hover::before {
			opacity: 0 !important;
		}

		.section-title span,
		.infetech-about-content > span,
		.single-infetech-serice-item .content .title a:hover,
		.single-blog-item .content .blog-meta .title a:hover,
		.footer-info ul li i,
		.breadcrumb-item nav ol li a {
			color: var(--pyramid-primary) !important;
		}

		.section-title .title,
		.infetech-about-content > .title,
		.single-infetech-serice-item .content .title a,
		.single-blog-item .content .blog-meta .title a,
		.single-tema-item .content .title,
		.header-main-nav-box ul li a:hover {
			color: var(--pyramid-primary-dark) !important;
		}

		.section-title p {
			color: #66778b;
		}

		.section-title span::before,
		.infetech-about-content > span::before,
		.single-blog-item .thumb span,
		.footer-copyright {
			background-color: var(--pyramid-primary) !important;
		}

		.single-infetech-feature-item .icon,
		.single-infetech-serice-item .content .icon,
		.single-tema-item .share-icon > i,
		.go-top-area .go-top {
			background-color: var(--pyramid-primary) !important;
		}

		.single-infetech-feature-item .icon svg path {
			fill: #fff !important;
		}

		.infetech-about-content ul li i,
		.single-project-overlay a,
		.single-blog-item .content .blog-meta ul li i {
			color: var(--pyramid-primary) !important;
		}

		.infetech-about-content .about-card .icon img,
		.single-infetech-serice-item .content .icon img {
			filter: hue-rotate(285deg) saturate(0.7) brightness(0.72);
		}

		.infetech-about-content .about-card .icon::before {
			background: var(--pyramid-primary-soft) !important;
		}

		.infetech-cta-box,
		.infetech-cta-2-area,
		.infetech-footer-area {
			background-color: var(--pyramid-primary-dark) !important;
		}

		.infetech-footer-area {
			padding: 82px 0 72px;
			background-color: #0b376d !important;
			background-image: none !important;
		}

		.infetech-footer-area .title::before,
		.footer-newsletter .input-box button {
			background: #73a6d5 !important;
		}

		.footer-about p,
		.footer-newsletter p,
		.footer-nav ul li a,
		.footer-info ul li {
			color: #cfdeed;
		}

		.footer-nav ul li a:hover,
		.footer-copyright p a:hover {
			color: #fff !important;
		}

		.footer-about ul li a {
			background: #082b54;
			color: #d9e7f4;
		}

		.footer-about ul li a:hover {
			background: var(--pyramid-secondary);
			color: #fff;
		}

		.footer-info ul li i {
			color: #8db9df !important;
		}

		.footer-newsletter .main-btn {
			background: #fff !important;
			border-color: #fff !important;
			color: var(--pyramid-primary) !important;
		}

		.footer-newsletter .main-btn::before {
			background: var(--pyramid-secondary) !important;
		}

		.footer-newsletter .main-btn:hover {
			background: var(--pyramid-secondary) !important;
			border-color: var(--pyramid-secondary) !important;
			color: #fff !important;
		}

		.footer-newsletter .main-btn:hover::before {
			opacity: 1 !important;
		}

		.footer-copyright {
			padding: 24px 0;
			background: #092f5d !important;
			border-top: 1px solid rgba(255, 255, 255, 0.12);
		}

		.footer-copyright p {
			color: #d6e3ef;
			margin-bottom: 0;
		}

		.go-top-area .go-top::before,
		.go-top-wrap .go-top-btn,
		.go-top-wrap .go-top-btn::after,
		.offcanvas-social ul li a:hover {
			background: var(--pyramid-secondary) !important;
			border-color: var(--pyramid-secondary) !important;
		}

		.infetech-cta-box {
			background-image: none;
		}

		.infetech-cta-box::before {
			background-image: linear-gradient(135deg, var(--pyramid-primary), var(--pyramid-primary-dark));
			opacity: 1;
		}

		.infetech-cta-box .cta-thumb img {
			width: 120px;
			height: 120px;
			object-fit: contain;
		}

		.infetech-feature-area::before {
			filter: hue-rotate(285deg) saturate(0.65);
		}

		.infetech-feature-area {
			background: var(--pyramid-primary-dark);
		}

		.infetech-feature-area .section-title span {
			color: #8db9df !important;
		}

		.infetech-feature-area .section-title span::before {
			background: #8db9df !important;
		}

		.infetech-feature-area .section-title p {
			color: #c5d5e5;
		}

		.single-infetech-feature-item {
			background: #092b55;
		}

		.single-infetech-feature-item .content p {
			color: #c5d5e5;
		}

		.breadcrumb-area::after {
			position: absolute;
			content: '';
			inset: 0;
			background: rgba(7, 31, 63, 0.82);
			z-index: -1;
		}

		.pyramid-section-compact {
			padding-top: 75px !important;
			padding-bottom: 75px !important;
		}

		.infetech-about-area.pyramid-section-compact {
			margin-bottom: 0;
		}

		.pyramid-hero-panel {
			background-image: none !important;
		}

		.infetech-banner-area .pyramid-hero-panel::before {
			display: none;
		}

		.infetech-banner-area .pyramid-hero-panel::after {
			width: 100%;
			background: linear-gradient(90deg, rgba(7, 31, 63, 0.86), rgba(7, 31, 63, 0.62));
			z-index: -1;
		}

		.pyramid-hero-collage {
			position: absolute;
			inset: 0;
			display: grid;
			grid-template-columns: 1.8fr 1fr 1fr;
			grid-template-rows: 1fr 1fr;
			gap: 3px;
			z-index: -2;
			background: var(--pyramid-primary-dark);
		}

		.pyramid-hero-collage span {
			background-size: cover;
			background-position: center;
		}

		.pyramid-hero-collage span:first-child {
			grid-row: 1 / 3;
		}

		.infetech-banner-area {
			margin-bottom: 0;
			margin-top: 93px;
		}

		.breadcrumb-area {
			margin-top: 93px;
		}

		.infetech-banner-area .infetech-banner-content {
			height: 650px;
			z-index: 2;
		}

		.infetech-banner-area .infetech-banner-content h1 {
			font-size: 72px;
			line-height: 1.08;
			letter-spacing: 0;
		}

		.infetech-banner-area .infetech-banner-content h1 img {
			filter: hue-rotate(290deg) saturate(0.8);
		}

		.pyramid-service-row,
		.pyramid-equal-row {
			row-gap: 30px;
		}

		.pyramid-service-card,
		.pyramid-equal-card {
			height: 100%;
			margin-bottom: 0;
		}

		.pyramid-service-card {
			display: flex;
			flex-direction: column;
			background: #fff;
			border-bottom: 3px solid var(--pyramid-primary);
			box-shadow: 0 12px 35px rgba(7, 31, 63, 0.09);
			overflow: hidden;
		}

		.pyramid-service-card .thumb img {
			width: 100%;
			height: 205px;
			object-fit: cover;
		}

		.pyramid-service-card .content {
			top: 0;
			margin: -20px 16px 0;
			padding: 54px 22px 26px;
			min-height: 265px;
			flex: 1;
			box-shadow: none;
		}

		.pyramid-service-card .content .icon {
			top: 0;
			right: 20px;
			bottom: auto;
			transform: translateY(-50%);
		}

		.pyramid-service-card .content .title {
			font-size: 20px;
			line-height: 28px;
			min-height: 56px;
		}

		.pyramid-facts-area {
			background: var(--pyramid-primary-soft);
		}

		.pyramid-facts-area .single-infetech-feature-item {
			background: #fff;
			border: 1px solid var(--pyramid-border);
			box-shadow: none;
			margin-top: 20px;
		}

		.pyramid-facts-area .single-infetech-feature-item .content {
			padding: 32px 20px;
		}

		.pyramid-facts-area .single-infetech-feature-item .content .title {
			margin-top: 0;
		}

		.pyramid-facts-area .single-infetech-feature-item .content .title a {
			color: var(--pyramid-primary-dark);
		}

		.pyramid-facts-area .single-infetech-feature-item .content p {
			color: #6c6a72;
			margin-bottom: 0;
		}

		.pyramid-tech-icons {
			display: flex;
			align-items: center;
			flex-wrap: wrap;
			gap: 12px;
			margin-top: 24px;
		}

		.pyramid-tech-icons img {
			width: 44px;
			height: 44px;
			object-fit: contain;
			background: #fff;
			padding: 7px;
		}

		.pyramid-technology-area {
			background-color: var(--pyramid-primary-dark);
		}

		.pyramid-technology-area .pyramid-tech-card {
			background: rgba(255, 255, 255, 0.06);
			border: 1px solid rgba(255, 255, 255, 0.12);
			margin-top: 35px;
			padding: 30px;
			text-align: left;
		}

		.pyramid-technology-area .pyramid-tech-card .content {
			padding: 0;
		}

		.pyramid-technology-area .pyramid-tech-card .content .title {
			margin-top: 0;
			margin-bottom: 14px;
		}

		.pyramid-technology-area .pyramid-tech-card:hover {
			background: var(--pyramid-primary);
			transform: translateY(-6px);
		}

		.pyramid-technology-area .pyramid-tech-card:hover .content .title a,
		.pyramid-technology-area .pyramid-tech-card:hover .content p {
			color: #fff;
		}

		.pyramid-legal-area {
			padding: 0 0 75px;
			background: #fff;
		}

		.pyramid-legal-box {
			padding: 58px 65px;
			background-image: none;
		}

		.pyramid-legal-box .pyramid-legal-label {
			display: inline-block;
			color: #fff;
			font-size: 14px;
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 1px;
			margin-bottom: 12px;
		}

		.pyramid-legal-box .cta-content .title {
			margin-bottom: 12px;
		}

		.pyramid-legal-box .cta-content p {
			color: rgba(255, 255, 255, 0.78);
			margin-bottom: 18px;
		}

		.pyramid-legal-box .cta-content ul {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 12px 30px;
		}

		.pyramid-legal-box .cta-content ul li {
			line-height: 26px;
		}

		.infetech-sponser-area .infetech-sponser-item img {
			max-width: 150px;
			max-height: 70px;
			width: auto;
		}

		.infetech-sponser-area .infetech-sponser-item:hover {
			background: var(--pyramid-primary-soft);
		}

		.infetech-team-area::before {
			opacity: 0.12;
			filter: grayscale(1) sepia(1) saturate(3) hue-rotate(165deg);
		}

		.single-tema-item .top-line {
			background: transparent !important;
		}

		.single-tema-item .top-line::before,
		.single-tema-item .top-line::after {
			background: var(--pyramid-primary) !important;
		}

		.single-tema-item .thumb img {
			height: 360px;
			object-fit: cover;
			object-position: center top;
		}

		.single-project-item > img {
			height: 379px;
			object-fit: cover;
			object-position: center;
		}

		.single-project-item .single-project-overlay::before {
			background-image: linear-gradient(0deg, rgba(11, 55, 109, 0.94), rgba(11, 55, 109, 0) 68%);
		}

		.single-project-item .single-project-overlay span {
			color: #8eb9e1;
		}

		.infetech-project-slide .slick-dots li.slick-active button,
		.infetech-project-slide-2 .slick-dots li.slick-active button {
			background: var(--pyramid-primary) !important;
		}

		.pyramid-about-photo-main {
			width: 100%;
			height: 500px;
			object-fit: cover;
		}

		@media (min-width: 992px) {
			.infetech-about-area .pyramid-about-gallery {
				display: grid;
				grid-template-columns: minmax(0, 1.3fr) minmax(175px, 0.7fr);
				gap: 24px;
				align-items: end;
				padding-right: 18px;
			}
		}

		.infetech-about-thumb .pyramid-about-photo-secondary {
			position: static !important;
			width: 100%;
			height: 310px;
			object-fit: cover;
		}

		.infetech-about-area .pyramid-about-gallery .about-box {
			top: auto;
			left: 48%;
			bottom: 38px;
			padding: 22px 32px;
		}

		.infetech-about-area .infetech-about-thumb .about-logo {
			top: 24px;
			right: 6px;
			width: 82px;
			height: 82px;
			object-fit: contain;
			background: #fff;
			padding: 14px;
			border-radius: 50%;
			box-shadow: 0 12px 30px rgba(7, 31, 63, 0.14);
		}

		.pyramid-direction-section {
			padding: 75px 0;
			background: #fff;
		}

		.pyramid-direction-grid {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			gap: 30px;
			align-items: stretch;
		}

		.pyramid-direction-card {
			position: relative;
			overflow: hidden;
			padding: 44px;
			border: 1px solid var(--pyramid-border);
			border-radius: 6px;
			background: #fff;
			box-shadow: 0 16px 45px rgba(7, 31, 63, 0.07);
		}

		.pyramid-direction-vision {
			background: var(--pyramid-primary-dark);
			border-color: var(--pyramid-primary-dark);
		}

		.pyramid-direction-card > span {
			display: block;
			color: var(--pyramid-secondary);
			font-size: 13px;
			font-weight: 800;
			text-transform: uppercase;
			margin-bottom: 10px;
		}

		.pyramid-direction-vision > span {
			color: #9fc5e6;
		}

		.pyramid-direction-card h3 {
			color: var(--pyramid-primary-dark);
			font-size: 34px;
			margin-bottom: 18px;
		}

		.pyramid-direction-card > p,
		.pyramid-mission-list p {
			color: #6c6a72;
			line-height: 1.8;
			margin-bottom: 0;
		}

		.pyramid-direction-vision h3,
		.pyramid-direction-vision > p {
			color: #fff;
		}

		.pyramid-direction-number {
			position: absolute;
			top: 26px;
			right: 30px;
			color: rgba(11, 55, 109, 0.08);
			font-size: 72px;
			font-weight: 800;
			line-height: 1;
		}

		.pyramid-direction-vision .pyramid-direction-number {
			color: rgba(255, 255, 255, 0.08);
		}

		.pyramid-mission-list {
			counter-reset: pyramid-mission;
			margin: 0;
			padding: 0;
		}

		.pyramid-mission-list li {
			position: relative;
			padding: 18px 0 18px 46px;
			border-top: 1px solid var(--pyramid-border);
			counter-increment: pyramid-mission;
		}

		.pyramid-mission-list li::before {
			position: absolute;
			left: 0;
			top: 18px;
			content: counter(pyramid-mission, decimal-leading-zero);
			color: var(--pyramid-primary);
			font-weight: 800;
		}

		.pyramid-mission-list strong {
			display: block;
			color: var(--pyramid-primary-dark);
			font-size: 17px;
			margin-bottom: 5px;
		}

		.pyramid-portfolio-hero {
			margin-top: 95px;
			padding: 78px 0;
			background: var(--pyramid-primary-soft);
		}

		.pyramid-portfolio-hero-wrap {
			display: grid;
			grid-template-columns: minmax(0, 1.05fr) minmax(340px, 0.75fr);
			gap: 70px;
			align-items: center;
		}

		.pyramid-eyebrow {
			display: inline-block;
			color: var(--pyramid-primary);
			font-size: 13px;
			font-weight: 800;
			text-transform: uppercase;
			margin-bottom: 14px;
		}

		.pyramid-portfolio-hero-copy h1 {
			color: var(--pyramid-primary-dark);
			font-size: 52px;
			line-height: 1.16;
			margin-bottom: 20px;
		}

		.pyramid-portfolio-hero-copy h1 strong {
			color: var(--pyramid-secondary);
		}

		.pyramid-portfolio-hero-copy p {
			max-width: 680px;
			color: #607087;
			font-size: 17px;
			line-height: 1.8;
			margin-bottom: 28px;
		}

		.pyramid-portfolio-visual {
			position: relative;
			max-width: 390px;
			justify-self: end;
		}

		.pyramid-portfolio-visual img {
			width: 100%;
			aspect-ratio: 4 / 5;
			object-fit: cover;
			object-position: center 66%;
			border-radius: 6px;
			box-shadow: 0 22px 55px rgba(7, 31, 63, 0.16);
		}

		.pyramid-float-label {
			position: absolute;
			display: block;
			padding: 11px 16px;
			border: 1px solid var(--pyramid-border);
			border-radius: 6px;
			background: #fff;
			color: var(--pyramid-primary-dark);
			font-size: 13px;
			font-weight: 800;
			box-shadow: 0 12px 32px rgba(7, 31, 63, 0.12);
		}

		.pyramid-float-label-one {
			left: -46px;
			top: 42px;
		}

		.pyramid-float-label-two {
			right: -24px;
			bottom: 46px;
		}

		.pyramid-client-area {
			padding-top: 75px;
			padding-bottom: 75px;
			background: #fff;
		}

		.pyramid-client-area .infetech-sponser-item {
			background: var(--pyramid-primary-soft);
			border: 1px solid var(--pyramid-border);
		}

		.pyramid-client-area .infetech-sponser-item img {
			max-height: 72px;
			width: auto;
			margin: 0 auto;
		}

		.pyramid-card-text {
			font-size: 15px;
			line-height: 26px;
			color: #6c6a72;
			margin: 12px 0 18px;
		}

		.pyramid-small-btn {
			display: inline-block;
			background: var(--pyramid-primary-soft);
			color: var(--pyramid-primary);
			font-size: 14px;
			font-weight: 700;
			padding: 9px 18px;
		}

		.pyramid-small-btn:hover {
			background: var(--pyramid-primary);
			color: #fff;
		}

		.pyramid-meta-list {
			background: var(--pyramid-primary-soft);
			border-left: 4px solid var(--pyramid-primary);
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
			color: var(--pyramid-primary-dark);
		}

		.pyramid-portfolio-section {
			padding: 80px 0;
			background: #fff;
		}

		.pyramid-portfolio-heading {
			max-width: 760px;
			margin: 0 auto 44px;
			text-align: center;
		}

		.pyramid-portfolio-heading span,
		.pyramid-detail-label {
			display: inline-block;
			color: var(--pyramid-primary);
			font-size: 14px;
			font-weight: 700;
			text-transform: uppercase;
			margin-bottom: 10px;
		}

		.pyramid-portfolio-heading h3 {
			color: var(--pyramid-primary-dark);
			font-size: 38px;
			line-height: 1.25;
			margin-bottom: 12px;
		}

		.pyramid-portfolio-heading p {
			color: #6c6a72;
			margin-bottom: 0;
		}

		.pyramid-portfolio-grid {
			display: grid;
			grid-template-columns: repeat(3, minmax(0, 1fr));
			gap: 28px;
		}

		.pyramid-portfolio-card {
			display: flex;
			flex-direction: column;
			min-width: 0;
			max-width: 100%;
			background: #fff;
			border: 1px solid var(--pyramid-border);
			border-radius: 6px;
			overflow: hidden;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		.pyramid-portfolio-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 16px 40px rgba(7, 31, 63, 0.12);
		}

		.pyramid-portfolio-cover {
			display: grid;
			place-items: center;
			aspect-ratio: 4 / 3;
			overflow: hidden;
			background: var(--pyramid-primary-soft);
		}

		.pyramid-portfolio-cover img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.4s ease;
		}

		.pyramid-portfolio-card:hover .pyramid-portfolio-cover img {
			transform: scale(1.025);
		}

		.pyramid-portfolio-body {
			display: flex;
			min-height: 220px;
			flex: 1;
			flex-direction: column;
			align-items: flex-start;
			padding: 26px 28px 28px;
		}

		.pyramid-portfolio-category {
			display: inline-flex;
			align-items: center;
			gap: 7px;
			padding: 7px 11px;
			border: 1px solid #cfe2fa;
			border-radius: 999px;
			background: #eaf3ff;
			color: var(--pyramid-primary);
			font-size: 11px;
			font-weight: 700;
			text-transform: uppercase;
			margin-bottom: 0;
		}

		.pyramid-portfolio-category::before {
			width: 6px;
			height: 6px;
			border-radius: 50%;
			background: var(--pyramid-secondary);
			box-shadow: 0 0 0 3px rgba(47, 111, 174, 0.12);
			content: '';
		}

		.pyramid-portfolio-body h3 {
			font-size: 20px;
			line-height: 1.3;
			margin: 10px 0 12px;
			overflow-wrap: anywhere;
		}

		.pyramid-portfolio-body h3 a {
			color: var(--pyramid-primary-dark);
		}

		.pyramid-portfolio-body h3 a:hover,
		.pyramid-portfolio-link:hover {
			color: var(--pyramid-secondary);
		}

		.pyramid-portfolio-body p {
			margin: auto 0 0;
			padding-top: 14px;
			color: #6c6a72;
			font-size: 14px;
		}

		.pyramid-portfolio-link {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			margin-top: 14px;
			padding-bottom: 3px;
			border-bottom: 2px solid var(--pyramid-primary-dark);
			color: var(--pyramid-primary-dark);
			font-size: 14px;
			font-weight: 700;
		}

		.pyramid-empty-state {
			grid-column: 1 / -1;
			padding: 42px;
			background: var(--pyramid-primary-soft);
			border: 1px solid var(--pyramid-border);
			text-align: center;
		}

		.pyramid-empty-state p {
			margin-bottom: 0;
		}

		.pyramid-detail-section {
			margin-top: 95px;
			padding: 40px 0 80px;
			background: #f8fbff;
		}

		.pyramid-detail-breadcrumb {
			display: flex;
			flex-wrap: wrap;
			gap: 8px;
			max-width: 1180px;
			margin: 0 auto 30px;
			color: #68778b;
			font-size: 13px;
			font-weight: 700;
		}

		.pyramid-detail-breadcrumb a {
			color: var(--pyramid-primary-dark);
		}

		.pyramid-detail-breadcrumb a:hover {
			color: var(--pyramid-secondary);
		}

		.pyramid-detail-layout {
			display: grid;
			grid-template-columns: minmax(210px, 240px) minmax(0, 1fr);
			gap: clamp(34px, 5vw, 68px);
			align-items: start;
			max-width: 1180px;
			margin: 0 auto;
		}

		.pyramid-detail-facts {
			position: sticky;
			top: 112px;
			display: grid;
			overflow: hidden;
			padding: 8px 22px;
			border: 1px solid #dbe6f2;
			border-radius: 20px;
			background: rgba(255, 255, 255, 0.96);
			box-shadow: 0 18px 54px rgba(7, 31, 63, 0.07);
		}

		.pyramid-detail-fact {
			padding: 15px 0;
			border-bottom: 1px solid var(--pyramid-border);
		}

		.pyramid-detail-fact span {
			display: block;
			color: #777580;
			font-size: 11px;
			font-weight: 600;
			text-transform: uppercase;
			margin-bottom: 5px;
		}

		.pyramid-detail-fact strong {
			display: block;
			color: var(--pyramid-primary-dark);
			font-size: 13.5px;
			line-height: 1.45;
		}

		.pyramid-detail-hero {
			position: relative;
			overflow: hidden;
			margin-bottom: 24px;
			padding: clamp(25px, 4vw, 42px);
			border: 1px solid #dbe7f3;
			border-radius: 24px;
			background: #f1f7ff;
			box-shadow: 0 20px 62px rgba(7, 31, 63, 0.07);
		}

		.pyramid-detail-hero h1 {
			color: var(--pyramid-primary-dark);
			font-size: 46px;
			line-height: 1.15;
			margin-bottom: 16px;
		}

		.pyramid-detail-summary {
			max-width: 760px;
			color: #6c6a72;
			font-size: 19px;
			line-height: 1.7;
			margin-bottom: 0;
		}

		.pyramid-detail-cover {
			margin: 0 0 28px;
			aspect-ratio: 4 / 3;
			border: 1px solid #d8e4f0;
			border-radius: 22px;
			background: var(--pyramid-primary-soft);
			overflow: hidden;
			box-shadow: 0 22px 62px rgba(7, 31, 63, 0.08);
		}

		.pyramid-detail-cover img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.pyramid-story-row {
			display: grid;
			grid-template-columns: 150px minmax(0, 1fr);
			gap: 28px;
			padding: 25px 26px;
			border: 1px solid #e0e8f1;
			border-radius: 18px;
			background: #fff;
			box-shadow: 0 10px 34px rgba(7, 31, 63, 0.035);
			margin-bottom: 16px;
		}

		.pyramid-story-row h2 {
			color: var(--pyramid-secondary);
			font-size: 13px;
			font-weight: 800;
			text-transform: uppercase;
			line-height: 1.35;
			margin-bottom: 0;
		}

		.pyramid-story-content p {
			color: #6c6a72;
			line-height: 1.8;
			margin-bottom: 0;
		}

		.pyramid-related-section {
			padding: 70px 0;
			background: var(--pyramid-primary-soft);
		}

		.pyramid-detail-cta {
			border-top: 1px solid #e3eaf2;
			background: #fff;
		}

		.pyramid-consultation {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 32px;
			padding: 36px 0;
		}

		.pyramid-consultation h2 {
			max-width: 720px;
			color: var(--pyramid-primary-dark);
			font-size: 36px;
			line-height: 1.25;
			margin: 0 0 8px;
		}

		.pyramid-consultation p {
			max-width: 720px;
			color: #617187;
			margin-bottom: 0;
		}

		.pyramid-consultation .main-btn {
			flex: 0 0 auto;
		}

		.pyramid-related-section .pyramid-portfolio-heading {
			margin-left: 0;
			text-align: left;
		}

		@media (max-width: 1199px) {
			.header-main-info .header-main-info-contact {
				display: none;
			}

			.infetech-banner-area .infetech-banner-content h1 {
				font-size: 62px;
			}
		}

		@media (max-width: 991px) {
			.pyramid-section-compact {
				padding-top: 60px !important;
				padding-bottom: 60px !important;
			}

			.infetech-banner-area {
				margin-top: 0;
			}

			.infetech-banner-area .infetech-banner-content {
				height: 570px;
			}

			.pyramid-about-photo-main {
				width: 100%;
			}

			.pyramid-direction-grid {
				grid-template-columns: 1fr;
			}

			.pyramid-portfolio-hero-wrap {
				grid-template-columns: minmax(0, 1fr) 300px;
				gap: 42px;
			}

			.pyramid-portfolio-hero-copy h1 {
				font-size: 42px;
			}

			.pyramid-portfolio-grid {
				grid-template-columns: repeat(2, minmax(0, 1fr));
			}

			.pyramid-detail-layout {
				grid-template-columns: 1fr;
				gap: 24px;
			}

			.pyramid-detail-facts {
				position: static;
				grid-template-columns: repeat(5, minmax(0, 1fr));
				padding: 7px 18px;
			}

			.pyramid-detail-fact {
				padding: 13px 10px;
				border-right: 1px solid #e5ecf4;
				border-bottom: 0;
			}

			.pyramid-detail-fact:last-child {
				border-right: 0;
			}

			.pyramid-consultation {
				align-items: flex-start;
				flex-direction: column;
			}

			.footer-newsletter {
				margin-right: 0;
			}
		}

		@media (max-width: 767px) {
			.infetech-header-area .templates-logo {
				display: block;
				width: 100%;
				min-height: 0;
				padding: 10px 24px !important;
			}

			.infetech-header-area .templates-logo img {
				width: 72px !important;
			}

			.pyramid-hero-collage {
				grid-template-columns: 1.4fr 1fr;
			}

			.pyramid-hero-collage span:nth-child(n+4) {
				display: none;
			}

			.infetech-banner-area .infetech-banner-content {
				height: 520px;
				padding-top: 28px;
			}

			.infetech-banner-area .infetech-banner-content h1 {
				font-size: 44px;
			}

			.pyramid-service-card .content {
				min-height: 0;
			}

			.pyramid-legal-box {
				padding: 36px 24px;
			}

			.pyramid-legal-box .cta-content ul {
				grid-template-columns: 1fr;
			}

			.pyramid-technology-area .pyramid-tech-card {
				padding: 24px;
			}

			.infetech-about-area .infetech-about-thumb,
			.infetech-about-content,
			.infetech-about-content .row > [class*="col-"] {
				max-width: 100%;
				min-width: 0;
			}

			.pyramid-about-photo-main {
				height: 390px;
				max-width: 100%;
			}

			.infetech-about-area .pyramid-about-gallery .about-box {
				position: static;
				margin-top: 16px;
				text-align: center;
			}

			.pyramid-direction-section {
				padding: 55px 0;
			}

			.pyramid-direction-card {
				padding: 32px 24px;
			}

			.pyramid-direction-card h3 {
				font-size: 28px;
				padding-right: 48px;
			}

			.pyramid-direction-number {
				top: 22px;
				right: 22px;
				font-size: 58px;
			}

			.pyramid-mission-list li {
				padding-left: 40px;
			}

			.infetech-about-content > .title,
			.infetech-about-content p,
			.infetech-about-content ul li {
				white-space: normal;
				overflow-wrap: anywhere;
			}

			.infetech-about-content ul li {
				line-height: 28px;
				margin-bottom: 10px;
			}

			.pyramid-portfolio-section,
			.pyramid-detail-section,
			.pyramid-related-section {
				padding: 55px 0;
			}

			.pyramid-portfolio-hero {
				margin-top: 120px;
				padding: 54px 0;
			}

			.pyramid-portfolio-hero-wrap {
				grid-template-columns: 1fr;
				gap: 42px;
			}

			.pyramid-portfolio-hero-copy h1 {
				font-size: 36px;
			}

			.pyramid-portfolio-hero-copy p {
				font-size: 16px;
			}

			.pyramid-portfolio-visual {
				width: calc(100% - 32px);
				max-width: 360px;
				justify-self: center;
			}

			.pyramid-float-label-one {
				left: -16px;
			}

			.pyramid-float-label-two {
				right: -16px;
			}

			.pyramid-portfolio-heading h3 {
				font-size: 30px;
			}

			.pyramid-portfolio-grid {
				grid-template-columns: 1fr;
				width: 100%;
				min-width: 0;
			}

			.pyramid-portfolio-card,
			.pyramid-portfolio-body,
			.pyramid-portfolio-body h3 a {
				width: 100%;
				min-width: 0;
				max-width: 100%;
				white-space: normal;
			}

			.pyramid-detail-hero h1 {
				font-size: 34px;
			}

			.pyramid-detail-section {
				margin-top: 120px;
				padding-top: 26px;
			}

			.pyramid-detail-breadcrumb {
				margin-bottom: 22px;
				font-size: 12px;
			}

			.pyramid-detail-facts {
				grid-template-columns: repeat(2, minmax(0, 1fr));
				padding: 7px 16px;
				border-radius: 16px;
			}

			.pyramid-detail-fact {
				padding: 12px 8px;
				border-right: 0;
				border-bottom: 1px solid #e5ecf4;
			}

			.pyramid-detail-fact:nth-last-child(-n+2) {
				border-bottom: 0;
			}

			.pyramid-detail-hero {
				margin-bottom: 18px;
				padding: 23px 20px;
				border-radius: 19px;
			}

			.pyramid-detail-cover {
				margin-bottom: 18px;
				border-radius: 16px;
			}

			.pyramid-detail-summary {
				font-size: 17px;
			}

			.pyramid-story-row {
				grid-template-columns: 1fr;
				gap: 9px;
				padding: 20px;
				border-radius: 15px;
			}

			.pyramid-consultation {
				align-items: stretch;
				padding: 32px 0;
				text-align: center;
			}

			.pyramid-consultation h2 {
				font-size: 28px;
			}

			.pyramid-consultation .main-btn {
				width: 100%;
				padding: 0 20px;
			}

			.infetech-footer-area {
				padding: 58px 0 48px;
			}

			.infetech-footer-area .row > [class*="col-"] {
				margin-bottom: 34px;
			}

			.infetech-footer-area .row > [class*="col-"]:last-child {
				margin-bottom: 0;
			}

			.footer-nav,
			.footer-newsletter,
			.footer-info {
				margin-top: 0;
			}

			.footer-nav ul {
				display: grid;
				grid-template-columns: repeat(2, minmax(0, 1fr));
				gap: 5px 18px;
				text-align: left;
			}

			.footer-newsletter .main-btn {
				width: 100%;
				padding: 0 18px;
			}

			.footer-info ul {
				max-width: 330px;
				margin: 0 auto;
				text-align: left;
			}

			.footer-info ul li {
				justify-content: flex-start;
			}

			.footer-copyright {
				padding: 20px 15px;
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
				<a href="<?php echo site_url(); ?>#beranda"><img src="<?php echo $asset_path; ?>/img_pyramid/logo/logo_pyramid_putih.png" alt="<?php echo $company['name']; ?>"></a>
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
					</div>
				</div>
			</div>
		</div>
	</section>

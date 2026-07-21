<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" href="<?php echo $admin_asset_path; ?>/img_pyramid/logo_pyramid.jpg" type="image/png">
	<link href="<?php echo $admin_asset_path; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $admin_asset_path; ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?php echo $admin_asset_path; ?>/vendor/quill/quill.snow.css" rel="stylesheet">
	<script src="<?php echo $admin_asset_path; ?>/vendor/quill/quill.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet"
		type="text/css" />
	<style>
		.dropify-wrapper {
			min-height: 190px;
			height: 220px;
			border: 1px solid #d1d3e2;
			font-family: inherit;
		}

		.dropify-wrapper .dropify-message {
			top: 50%;
			width: 100%;
			padding: 0 24px;
			transform: translateY(-50%);
		}

		.dropify-wrapper .dropify-message span.file-icon {
			display: block;
			font-size: 34px;
			line-height: 1;
			color: #858796;
		}

		.dropify-wrapper .dropify-message p {
			max-width: 100%;
			margin: 10px auto 0;
			font-size: 15px !important;
			font-weight: 400;
			line-height: 1.4 !important;
			color: #6e707e;
			white-space: normal;
			overflow-wrap: anywhere;
		}

		.dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner p {
			font-size: 13px;
			line-height: 1.4;
		}

		@media (max-width: 575.98px) {
			.dropify-wrapper {
				height: 180px;
				min-height: 180px;
			}

			.dropify-wrapper .dropify-message {
				padding: 0 16px;
			}

			.dropify-wrapper .dropify-message p {
				font-size: 14px !important;
			}
		}

		.admin-record-meta {
			display: flex;
			align-items: center;
			justify-content: flex-end;
			flex-wrap: wrap;
			gap: 8px;
			min-width: 126px;
		}

		.admin-action-group {
			display: inline-flex !important;
			align-items: center;
			justify-content: flex-end;
			flex-wrap: nowrap !important;
			gap: 6px;
			white-space: nowrap;
		}

		.admin-action-group .btn {
			flex: 0 0 auto;
			margin: 0 !important;
		}

		@media (max-width: 767.98px) {
			.admin-record-meta {
				justify-content: flex-start;
			}
		}
	</style>
</head>

<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/dashboard'); ?>">
				<div class="sidebar-brand-icon"><i class="fas fa-layer-group"></i></div>
				<div class="sidebar-brand-text mx-3">Pyramid Admin</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?php echo $active_menu === 'dashboard' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
			</li>
			<hr class="sidebar-divider">
			<div class="sidebar-heading">Konten Website</div>
			<li class="nav-item <?php echo $active_menu === 'kegiatan' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/kegiatan'); ?>"><i class="fas fa-fw fa-calendar-alt"></i><span>Kegiatan</span></a>
			</li>
			<li class="nav-item <?php echo $active_menu === 'struktur_organisasi' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/struktur_organisasi'); ?>"><i class="fas fa-fw fa-sitemap"></i><span>Struktur Organisasi</span></a>
			</li>
			<li class="nav-item <?php echo $active_menu === 'visi_misi' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/visi_misi'); ?>"><i class="fas fa-fw fa-bullseye"></i><span>Visi Misi</span></a>
			</li>
			<li class="nav-item <?php echo $active_menu === 'sejarah' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/sejarah'); ?>"><i class="fas fa-fw fa-history"></i><span>Sejarah</span></a>
			</li>
			<li class="nav-item <?php echo $active_menu === 'team' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/team'); ?>"><i class="fas fa-fw fa-users"></i><span>Team</span></a>
			</li>
			<li class="nav-item <?php echo $active_menu === 'admin_user' ? 'active' : ''; ?>">
				<a class="nav-link" href="<?php echo site_url('admin/admin_user'); ?>"><i class="fas fa-fw fa-user-shield"></i><span>Admin User</span></a>
			</li>
			<hr class="sidebar-divider d-none d-md-block">
			<div class="text-center d-none d-md-inline"><button class="rounded-circle border-0" id="sidebarToggle"></button></div>
		</ul>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url(); ?>" target="_blank"><i class="fas fa-external-link-alt fa-sm fa-fw mr-2 text-gray-400"></i>Lihat Website</a>
						</li>
						<div class="topbar-divider d-none d-sm-block"></div>
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $admin_name; ?></span>
								<img class="img-profile rounded-circle" src="<?php echo $admin_asset_path; ?>/img/undraw_profile.svg" alt="Administrator">
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?php echo site_url('admin/login/logout'); ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
							</div>
						</li>
					</ul>
				</nav>

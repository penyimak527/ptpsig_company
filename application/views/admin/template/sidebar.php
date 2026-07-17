<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin/dashboard'); ?>">
		<div class="sidebar-brand-icon">
			<i class="fas fa-layer-group"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Pyramid Admin</div>
	</a>

	<hr class="sidebar-divider my-0">

	<li class="nav-item <?php echo $active_menu === 'dashboard' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>

	<hr class="sidebar-divider">
	<div class="sidebar-heading">Konten Website</div>

	<li class="nav-item <?php echo $active_menu === 'kegiatan' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/kegiatan'); ?>">
			<i class="fas fa-fw fa-calendar-alt"></i>
			<span>Kegiatan</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active_menu === 'struktur_organisasi' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/struktur_organisasi'); ?>">
			<i class="fas fa-fw fa-sitemap"></i>
			<span>Struktur Organisasi</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active_menu === 'visi_misi' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/visi_misi'); ?>">
			<i class="fas fa-fw fa-bullseye"></i>
			<span>Visi Misi</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active_menu === 'sejarah' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/sejarah'); ?>">
			<i class="fas fa-fw fa-history"></i>
			<span>Sejarah</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active_menu === 'team' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/team'); ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Team</span>
		</a>
	</li>
	<li class="nav-item <?php echo $active_menu === 'admin_user' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?php echo site_url('admin/admin_user'); ?>">
			<i class="fas fa-fw fa-user-shield"></i>
			<span>Admin User</span>
		</a>
	</li>

	<hr class="sidebar-divider d-none d-md-block">
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>

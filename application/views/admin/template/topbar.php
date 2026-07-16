<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url(); ?>" target="_blank">
						<i class="fas fa-external-link-alt fa-sm fa-fw mr-2 text-gray-400"></i>
						Lihat Website
					</a>
				</li>
				<div class="topbar-divider d-none d-sm-block"></div>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
						<img class="img-profile rounded-circle" src="<?php echo $admin_asset_path; ?>/img/undraw_profile.svg">
					</a>
				</li>
			</ul>
		</nav>

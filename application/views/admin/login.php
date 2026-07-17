<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link href="<?php echo $admin_asset_path; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $admin_asset_path; ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 col-lg-6 col-md-8">
				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
							</div>
							<?php if (!empty($error)) : ?>
								<div class="alert alert-danger"><?php echo $error; ?></div>
							<?php endif; ?>
							<form class="user" action="<?php echo site_url('admin/login'); ?>" method="post">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?php echo site_url(); ?>">Kembali ke website</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo $admin_asset_path; ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo $admin_asset_path; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo $admin_asset_path; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?php echo $admin_asset_path; ?>/js/sb-admin-2.min.js"></script>
</body>

</html>

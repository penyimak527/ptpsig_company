<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link href="<?php echo $admin_asset_path; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $admin_asset_path; ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		:root { --login-navy: #071f3f; --login-blue: #0b376d; --login-border: #d7e0e9; }
		* { box-sizing: border-box; }
		body {
			min-height: 100vh;
			margin: 0;
			font-family: "Nunito", sans-serif;
			background-color: var(--login-navy);
			background-image: url('<?php echo base_url('assets/img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-13.jpg'); ?>');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		body::before {
			position: fixed;
			inset: 0;
			content: '';
			background: rgba(4, 19, 38, 0.78);
		}
		.login-page {
			position: relative;
			z-index: 1;
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			padding: 32px 20px;
		}
		.login-panel {
			width: 100%;
			max-width: 440px;
			overflow: hidden;
			background: #fff;
			border: 1px solid rgba(255, 255, 255, 0.2);
			border-radius: 8px;
			box-shadow: 0 22px 60px rgba(0, 0, 0, 0.28);
		}
		.login-brand {
			display: flex;
			align-items: center;
			gap: 16px;
			padding: 24px 32px;
			background: var(--login-navy);
			color: #fff;
		}
		.login-brand img { width: 62px; height: 50px; object-fit: contain; }
		.login-brand strong { display: block; font-size: 19px; line-height: 1.2; }
		.login-brand span { display: block; margin-top: 4px; font-size: 13px; color: #b9cee2; }
		.login-content { padding: 34px 32px 30px; }
		.login-content h1 { margin: 0 0 8px; font-size: 27px; font-weight: 700; color: var(--login-navy); }
		.login-content > p { margin: 0 0 28px; font-size: 14px; line-height: 1.6; color: #647486; }
		.login-alert { padding: 12px 14px; margin-bottom: 20px; font-size: 14px; color: #8e2020; background: #fff1f1; border: 1px solid #f2caca; border-radius: 4px; }
		.login-label { display: block; margin-bottom: 8px; font-size: 14px; font-weight: 600; color: #263b50; }
		.login-field { position: relative; margin-bottom: 20px; }
		.login-field > i {
			position: absolute;
			top: 50%;
			left: 16px;
			color: #7b8b9c;
			transform: translateY(-50%);
		}
		.login-input {
			display: block;
			width: 100%;
			height: 50px;
			padding: 0 48px 0 44px;
			font-size: 15px;
			color: #1f3449;
			background: #fff;
			border: 1px solid var(--login-border);
			border-radius: 5px;
			outline: none;
			transition: border-color .2s, box-shadow .2s;
		}
		.login-input:focus { border-color: var(--login-blue); box-shadow: 0 0 0 3px rgba(11, 55, 109, 0.12); }
		.password-toggle {
			position: absolute;
			top: 50%;
			right: 8px;
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 38px;
			height: 38px;
			padding: 0;
			color: #6d7d8e;
			background: transparent;
			border: 0;
			transform: translateY(-50%);
			cursor: pointer;
		}
		.login-submit {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 9px;
			width: 100%;
			height: 50px;
			margin-top: 4px;
			font-weight: 700;
			color: #fff;
			background: var(--login-blue);
			border: 1px solid var(--login-blue);
			border-radius: 5px;
			cursor: pointer;
			transition: background .2s, border-color .2s;
		}
		.login-submit:hover, .login-submit:focus { color: #fff; background: var(--login-navy); border-color: var(--login-navy); }
		.login-footer { display: flex; justify-content: center; padding-top: 22px; margin-top: 24px; border-top: 1px solid #e6ebf0; }
		.login-footer a { font-size: 14px; font-weight: 600; color: var(--login-blue); }
		.login-footer a:hover { color: var(--login-navy); text-decoration: none; }
		@media (max-width: 575.98px) {
			.login-page { align-items: flex-start; padding: 20px 14px; }
			.login-brand { padding: 20px 22px; }
			.login-brand img { width: 54px; height: 44px; }
			.login-content { padding: 28px 22px 24px; }
			.login-content h1 { font-size: 24px; }
		}
	</style>
</head>
<body>
	<main class="login-page">
		<section class="login-panel" aria-labelledby="login-title">
			<div class="login-brand">
				<img src="<?php echo base_url('assets/img_pyramid/logo/logo_pyramid_putih.png'); ?>" alt="Logo Pyramid">
				<div><strong>Pyramid Admin</strong><span>PT Pyramidsoft Indonesia Group</span></div>
			</div>
			<div class="login-content">
				<h1 id="login-title">Selamat datang</h1>
				<p>Masuk untuk mengelola konten company profile Piramidsoft.</p>
				<?php if (!empty($error)) : ?><div class="login-alert"><i class="fas fa-exclamation-circle mr-2"></i><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div><?php endif; ?>
				<form action="<?php echo site_url('admin/login'); ?>" method="post">
					<label class="login-label" for="username">Username</label>
					<div class="login-field"><i class="fas fa-user"></i><input id="username" type="text" class="login-input" name="username" placeholder="Masukkan username" autocomplete="username" required autofocus></div>
					<label class="login-label" for="password">Password</label>
					<div class="login-field"><i class="fas fa-lock"></i><input id="password" type="password" class="login-input" name="password" placeholder="Masukkan password" autocomplete="current-password" required><button type="button" class="password-toggle" id="togglePassword" aria-label="Tampilkan password"><i class="fas fa-eye"></i></button></div>
					<button type="submit" class="login-submit"><i class="fas fa-sign-in-alt"></i><span>Masuk ke Admin</span></button>
				</form>
				<div class="login-footer"><a href="<?php echo site_url(); ?>"><i class="fas fa-arrow-left mr-2"></i>Kembali ke website</a></div>
			</div>
		</section>
	</main>
	<script>
		document.getElementById('togglePassword').addEventListener('click', function () {
			var input = document.getElementById('password');
			var icon = this.querySelector('i');
			var show = input.type === 'password';
			input.type = show ? 'text' : 'password';
			icon.className = show ? 'fas fa-eye-slash' : 'fas fa-eye';
			this.setAttribute('aria-label', show ? 'Sembunyikan password' : 'Tampilkan password');
		});
	</script>
</body>
</html>

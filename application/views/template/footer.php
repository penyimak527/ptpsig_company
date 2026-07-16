<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<footer id="kontak" class="infetech-footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-about">
						<!-- <a href="#beranda"><img src="<?php echo $asset_path; ?>/images/logo-white.png" alt="<?php echo $company['name']; ?>"></a> -->
						<a href="<?php echo site_url(); ?>#beranda"><img src="<?php echo $asset_path; ?>/img_pyramid/logo/logo_pyramid_putih.png" alt="<?php echo $company['name']; ?>" style="width: 90px;"></a>
						<p>Company profile Piramidsoft untuk memperkenalkan profil perusahaan, legalitas, lokasi, tim, struktur organisasi, visi-misi, layanan, dan brand partner.</p>
						<ul>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="footer-nav">
						<h4 class="title">Links</h4>
						<ul>
							<?php foreach ($menus as $menu) : ?>
								<li><a href="<?php echo $menu['url']; ?>"><?php echo $menu['label']; ?></a></li>
								<?php if (!empty($menu['children'])) : ?>
									<?php foreach ($menu['children'] as $child) : ?>
										<li><a href="<?php echo $child['url']; ?>"><?php echo $child['label']; ?></a></li>
									<?php endforeach; ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-newsletter">
						<h4 class="title">Layanan</h4>
						<p>Piramidsoft melayani website, aplikasi custom, integrasi sistem, dan maintenance.</p>
						<form action="#">
							<div class="input-box">
								<input type="text" placeholder="<?php echo $company['email']; ?>">
								<button><i class="far fa-paper-plane"></i></button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-info">
						<h4 class="title">Contact</h4>
						<ul>
							<li><i class="fas fa-phone"></i><span><?php echo $company['phone']; ?></span></li>
							<li><i class="fas fa-envelope"></i><span><?php echo $company['email']; ?></span></li>
							<li><i class="fas fa-map-marker"></i><span><?php echo $company['address']; ?></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-copyright text-center">
		<p>Copyright <?php echo date('Y'); ?> by <?php echo $company['name']; ?></p>
	</div>

	<div class="go-top-area">
		<div class="go-top-wrap">
			<div class="go-top-btn-wrap">
				<div class="go-top go-top-btn">
					<i class="fal fa-angle-double-up"></i>
					<i class="fal fa-angle-double-up"></i>
				</div>
			</div>
		</div>
	</div>

	<script src="<?php echo $asset_path; ?>/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/jquery.counterup.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/waypoints.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/wow.js"></script>
	<script src="<?php echo $asset_path; ?>/js/circle-progress.js"></script>
	<script src="<?php echo $asset_path; ?>/js/slick.min.js"></script>
	<script src="<?php echo $asset_path; ?>/js/main.js"></script>

</body>

</html>

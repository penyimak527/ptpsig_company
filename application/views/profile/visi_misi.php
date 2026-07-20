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

<section class="pyramid-direction-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Profile</span>
					<h4 class="title">Arah dan komitmen Piramidsoft dalam memberikan solusi digital.</h4>
				</div>
			</div>
		</div>
		<div class="pyramid-direction-grid">
			<article class="pyramid-direction-card pyramid-direction-vision">
				<div class="pyramid-direction-number">01</div>
				<span>Arah Perusahaan</span>
				<h3><?php echo htmlspecialchars($visi_misi['visi']['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
				<p><?php echo htmlspecialchars($visi_misi['visi']['description'], ENT_QUOTES, 'UTF-8'); ?></p>
			</article>
			<article class="pyramid-direction-card pyramid-direction-mission">
				<div class="pyramid-direction-number">02</div>
				<span>Komitmen Perusahaan</span>
				<h3>Misi</h3>
				<?php if (!empty($visi_misi['misi'])) : ?>
					<ol class="pyramid-mission-list">
						<?php foreach ($visi_misi['misi'] as $mission) : ?>
							<li>
								<strong><?php echo htmlspecialchars($mission['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
								<p><?php echo htmlspecialchars($mission['description'], ENT_QUOTES, 'UTF-8'); ?></p>
							</li>
						<?php endforeach; ?>
					</ol>
				<?php else : ?>
					<p>Data misi belum tersedia. Silakan tambahkan melalui halaman admin.</p>
				<?php endif; ?>
			</article>
		</div>
	</div>
</section>

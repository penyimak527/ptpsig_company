<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Kegiatan</h2>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="infetech-blog-area infetech-blog-page-area pyramid-section-compact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center mb-55">
					<span>Kegiatan Kami</span>
					<h4 class="title">Aktivitas Piramidsoft bersama klien dan partner.</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($activities as $index => $activity) : ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-item animated wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="<?php echo $index * 200; ?>ms">
						<div class="thumb">
							<a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>"><img src="<?php echo $asset_path; ?>/<?php echo $activity['image']; ?>" alt="<?php echo $activity['title']; ?>"></a>
							<span><?php echo $activity['category']; ?></span>
						</div>
						<div class="content">
							<div class="blog-meta">
								<ul>
									<li><i class="fal fa-user-circle"></i> <?php echo $activity['client']; ?></li>
									<li><i class="fal fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($activity['date'])); ?></li>
								</ul>
								<h4 class="title"><a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>"><?php echo $activity['title']; ?></a></h4>
								<p class="pyramid-card-text"><?php echo $activity['excerpt']; ?></p>
								<a href="<?php echo site_url('home/detail_kegiatan/' . $activity['slug']); ?>">Selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

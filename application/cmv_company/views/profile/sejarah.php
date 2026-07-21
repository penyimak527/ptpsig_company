<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="breadcrumb-area pyramid-history-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-item text-center">
					<h2 class="title">Sejarah Piramidsoft</h2>
					<nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Sejarah</li></ol></nav>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pyramid-history-page">
	<div class="container">
		<div class="pyramid-history-intro">
			<div class="pyramid-history-meta"><span>Berdiri Sejak</span><strong><?php echo htmlspecialchars($company['established'], ENT_QUOTES, 'UTF-8'); ?></strong></div>
			<div class="pyramid-history-content">
				<div class="section-title"><span>Perjalanan Pyramid</span><h3 class="title"><?php echo htmlspecialchars($sejarah['title'], ENT_QUOTES, 'UTF-8'); ?></h3></div>
				<div class="pyramid-rich-content ql-editor"><?php echo $sejarah['content']; ?></div>
			</div>
		</div>
	</div>
</section>

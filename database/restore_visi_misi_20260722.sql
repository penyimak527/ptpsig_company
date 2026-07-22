USE `piramidsoft_profile`;

CREATE TABLE IF NOT EXISTS `visi_misi` (
	`id_visi_misi` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`visi` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`misi` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`status` ENUM('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
	`created_at` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`updated_at` VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
	PRIMARY KEY (`id_visi_misi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`, `status`, `created_at`, `updated_at`)
SELECT 4,
	'<p>Menjadi perusahaan teknologi terpercaya dan inovatif yang mampu menghadirkan solusi perangkat lunak berkualitas untuk mendukung transformasi digital, meningkatkan efisiensi bisnis, serta memberikan nilai berkelanjutan bagi pelanggan.</p>',
	'<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Mengembangkan perangkat lunak yang inovatif, aman, stabil, dan sesuai dengan kebutuhan pelanggan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Memberikan solusi teknologi yang efektif untuk membantu perusahaan meningkatkan produktivitas dan efisiensi operasional.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Mengutamakan kualitas layanan, ketepatan waktu, serta kepuasan pelanggan dalam setiap proses pengembangan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Membangun hubungan kerja sama jangka panjang yang profesional, transparan, dan saling menguntungkan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Mengembangkan kompetensi sumber daya manusia agar mampu mengikuti perkembangan teknologi dan menghasilkan solusi terbaik.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Berkontribusi dalam mempercepat transformasi digital bagi perusahaan, instansi, dan masyarakat.</li></ol>',
	'aktif', '21:07:2026', NULL
WHERE NOT EXISTS (SELECT 1 FROM `visi_misi` WHERE `id_visi_misi` = 4);

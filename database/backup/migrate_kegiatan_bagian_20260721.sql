USE `piramidsoft_profile`;

CREATE TABLE IF NOT EXISTS `kegiatan_bagian` (
	`id_bagian` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`id_kegiatan` INT UNSIGNED NOT NULL,
	`judul` VARCHAR(180) NOT NULL,
	`konten` LONGTEXT NOT NULL,
	`gambar` VARCHAR(255) DEFAULT NULL,
	`urutan` INT UNSIGNED NOT NULL DEFAULT 0,
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_bagian`),
	KEY `id_kegiatan` (`id_kegiatan`),
	CONSTRAINT `kegiatan_bagian_fk` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `kegiatan_bagian` (`id_kegiatan`, `judul`, `konten`, `urutan`, `created_at`)
SELECT k.`id_kegiatan`, 'Informasi Umum', k.`deskripsi`, 1,
	CASE WHEN k.`created_at` IS NULL OR k.`created_at` = '' THEN DATE_FORMAT(CURDATE(), '%d:%m:%Y') ELSE k.`created_at` END
FROM `kegiatan` k
WHERE k.`deskripsi` IS NOT NULL
	AND TRIM(k.`deskripsi`) <> ''
	AND NOT EXISTS (
		SELECT 1 FROM `kegiatan_bagian` kb WHERE kb.`id_kegiatan` = k.`id_kegiatan`
	);

USE `piramidsoft_profile`;

-- Jalankan satu kali pada database lama. Konten lama digabung menjadi dokumen Quill.
START TRANSACTION;
SET SESSION group_concat_max_len = 1048576;

RENAME TABLE `visi_misi` TO `visi_misi_lama`;
CREATE TABLE `visi_misi` (
	`id_visi_misi` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`visi` LONGTEXT NOT NULL,
	`misi` LONGTEXT NOT NULL,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_visi_misi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `visi_misi` (`visi`, `misi`, `status`)
SELECT
	COALESCE((SELECT `deskripsi` FROM `visi_misi_lama` WHERE `tipe` = 'visi' ORDER BY `urutan`, `id_visi_misi` LIMIT 1), ''),
	COALESCE((SELECT GROUP_CONCAT(CONCAT('<h3>', `judul`, '</h3><p>', `deskripsi`, '</p>') ORDER BY `urutan`, `id_visi_misi` SEPARATOR '') FROM `visi_misi_lama` WHERE `tipe` = 'misi'), ''),
	'aktif'
WHERE EXISTS (SELECT 1 FROM `visi_misi_lama`);

DROP TABLE `visi_misi_lama`;

RENAME TABLE `sejarah` TO `sejarah_lama`;
CREATE TABLE `sejarah` (
	`id_sejarah` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`judul` VARCHAR(180) NOT NULL,
	`konten` LONGTEXT NOT NULL,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sejarah` (`judul`, `konten`, `status`)
SELECT
	'Sejarah Piramidsoft',
	COALESCE(GROUP_CONCAT(CONCAT('<h2>', `tahun`, ' - ', `judul`, '</h2><p>', `deskripsi`, '</p>') ORDER BY `urutan`, `id_sejarah` SEPARATOR ''), ''),
	'aktif'
FROM `sejarah_lama`
HAVING COUNT(*) > 0;

DROP TABLE `sejarah_lama`;

COMMIT;

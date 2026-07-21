CREATE DATABASE IF NOT EXISTS `piramidsoft_profile` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `piramidsoft_profile`;

CREATE TABLE `admin` (
	`id_admin` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(120) NOT NULL,
	`username` VARCHAR(80) NOT NULL,
	`email` VARCHAR(150) NOT NULL,
	`password_hash` VARCHAR(255) NOT NULL,
	`role` ENUM('superadmin','admin') NOT NULL DEFAULT 'admin',
	`foto` VARCHAR(255) DEFAULT NULL,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`last_login` VARCHAR(10) DEFAULT NULL,
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_admin`),
	UNIQUE KEY `username` (`username`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `kegiatan` (
	`id_kegiatan` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`judul` VARCHAR(180) NOT NULL,
	`slug` VARCHAR(200) NOT NULL,
	`klien` VARCHAR(160) DEFAULT NULL,
	`kategori` VARCHAR(120) DEFAULT NULL,
	`tanggal` VARCHAR(10) DEFAULT NULL,
	`gambar` VARCHAR(255) DEFAULT NULL,
	`ringkasan` TEXT,
	`deskripsi` LONGTEXT,
	`status` ENUM('draft','publish') NOT NULL DEFAULT 'draft',
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_kegiatan`),
	UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `kegiatan_bagian` (
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

CREATE TABLE `struktur_organisasi` (
	`id_struktur` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`parent_id` INT UNSIGNED DEFAULT NULL,
	`nama` VARCHAR(140) DEFAULT NULL,
	`jabatan` VARCHAR(140) NOT NULL,
	`divisi` VARCHAR(120) DEFAULT NULL,
	`foto` VARCHAR(255) DEFAULT NULL,
	`deskripsi` TEXT,
	`urutan` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_struktur`),
	KEY `parent_id` (`parent_id`),
	CONSTRAINT `struktur_parent_fk` FOREIGN KEY (`parent_id`) REFERENCES `struktur_organisasi` (`id_struktur`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `visi_misi` (
	`id_visi_misi` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`visi` LONGTEXT NOT NULL,
	`misi` LONGTEXT NOT NULL,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_visi_misi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sejarah` (
	`id_sejarah` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`judul` VARCHAR(180) NOT NULL,
	`konten` LONGTEXT NOT NULL,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `team` (
	`id_team` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(140) NOT NULL,
	`jabatan` VARCHAR(140) NOT NULL,
	`foto` VARCHAR(255) DEFAULT NULL,
	`bio` TEXT,
	`instagram` VARCHAR(255) DEFAULT NULL,
	`linkedin` VARCHAR(255) DEFAULT NULL,
	`urutan` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` VARCHAR(10) NOT NULL,
	`updated_at` VARCHAR(10) DEFAULT NULL,
	PRIMARY KEY (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin` (`nama`, `username`, `email`, `password_hash`, `role`, `status`, `created_at`) VALUES
('Administrator', 'admin', 'admin@piramidsoft.com', '$2y$10$xaPXnMdqkiDQveuv7iq2FO7l7/0olJxkKSRJZa4KjmwBtpsCo5cNe', 'superadmin', 'aktif', DATE_FORMAT(CURDATE(), '%d:%m:%Y'));

-- Konten kegiatan, struktur organisasi, visi misi, sejarah, dan team dikelola melalui halaman admin.

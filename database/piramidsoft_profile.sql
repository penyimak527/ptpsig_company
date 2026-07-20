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
	`last_login` DATETIME DEFAULT NULL,
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
	`tanggal` DATE DEFAULT NULL,
	`gambar` VARCHAR(255) DEFAULT NULL,
	`ringkasan` TEXT,
	`deskripsi` LONGTEXT,
	`status` ENUM('draft','publish') NOT NULL DEFAULT 'draft',
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_kegiatan`),
	UNIQUE KEY `slug` (`slug`)
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
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_struktur`),
	KEY `parent_id` (`parent_id`),
	CONSTRAINT `struktur_parent_fk` FOREIGN KEY (`parent_id`) REFERENCES `struktur_organisasi` (`id_struktur`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `visi_misi` (
	`id_visi_misi` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`tipe` ENUM('visi','misi') NOT NULL,
	`judul` VARCHAR(160) NOT NULL,
	`deskripsi` TEXT NOT NULL,
	`urutan` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_visi_misi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sejarah` (
	`id_sejarah` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`tahun` VARCHAR(40) NOT NULL,
	`judul` VARCHAR(180) NOT NULL,
	`deskripsi` TEXT NOT NULL,
	`gambar` VARCHAR(255) DEFAULT NULL,
	`urutan` INT UNSIGNED NOT NULL DEFAULT 0,
	`status` ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `admin` (`nama`, `username`, `email`, `password_hash`, `role`, `status`) VALUES
('Administrator', 'admin', 'admin@piramidsoft.com', '$2y$10$xaPXnMdqkiDQveuv7iq2FO7l7/0olJxkKSRJZa4KjmwBtpsCo5cNe', 'superadmin', 'aktif');

-- Konten kegiatan, struktur organisasi, visi misi, sejarah, dan team dikelola melalui halaman admin.

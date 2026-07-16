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

INSERT INTO `kegiatan` (`judul`, `slug`, `klien`, `kategori`, `tanggal`, `gambar`, `ringkasan`, `deskripsi`, `status`) VALUES
('Diskusi Kebutuhan Website Profile', 'diskusi-kebutuhan-website-profile', 'Klien UMKM', 'Konsultasi Digital', '2026-07-01', 'upload/kegiatan/diskusi-kebutuhan-website-profile.jpg', 'Sesi pembahasan kebutuhan company profile, struktur konten, dan arah visual website.', 'Kegiatan ini menjadi tahap awal untuk memahami profil bisnis, kebutuhan konten, target pengunjung, dan rencana tampilan website agar hasil akhir lebih sesuai dengan karakter klien.', 'publish'),
('Koordinasi Pengembangan Sistem', 'koordinasi-pengembangan-sistem', 'Klien Operasional', 'Pengembangan Kustom', '2026-07-08', 'upload/kegiatan/koordinasi-pengembangan-sistem.jpg', 'Koordinasi fitur, alur kerja, dan kebutuhan integrasi sistem untuk operasional bisnis.', 'Tim melakukan pemetaan fitur dan proses bisnis agar sistem yang dikembangkan dapat membantu pekerjaan harian, pelaporan, dan pengelolaan data secara lebih rapi.', 'publish'),
('Pendampingan Maintenance Website', 'pendampingan-maintenance-website', 'Brand Partner', 'Maintenance', '2026-07-12', 'upload/kegiatan/pendampingan-maintenance-website.jpg', 'Pendampingan perawatan website, pengecekan tampilan, dan optimasi konten.', 'Kegiatan maintenance dilakukan untuk memastikan website tetap berjalan baik, informasi tetap relevan, serta pengalaman pengguna tetap nyaman saat mengakses halaman utama maupun halaman detail.', 'publish');

INSERT INTO `struktur_organisasi` (`nama`, `jabatan`, `divisi`, `foto`, `deskripsi`, `urutan`, `status`) VALUES
('Nama Direktur', 'Direktur / Founder', 'Leadership', 'upload/struktur_organisasi/direktur-founder.jpg', 'Mengatur arah perusahaan, strategi bisnis, dan pengembangan layanan.', 1, 'aktif'),
('Nama Project Manager', 'Project Manager', 'Management', 'upload/struktur_organisasi/project-manager.jpg', 'Mengelola kebutuhan klien, jadwal pekerjaan, dan koordinasi lintas tim.', 2, 'aktif'),
('Nama Developer', 'Developer Team', 'Development', 'upload/struktur_organisasi/developer-team.jpg', 'Membangun website, aplikasi, integrasi, dan sistem sesuai kebutuhan proyek.', 3, 'aktif'),
('Nama Support', 'Support & Maintenance', 'Support', 'upload/struktur_organisasi/support-maintenance.jpg', 'Menjaga performa layanan, perawatan sistem, dan dukungan teknis lanjutan.', 4, 'aktif');

INSERT INTO `visi_misi` (`tipe`, `judul`, `deskripsi`, `urutan`, `status`) VALUES
('visi', 'Visi Perusahaan', 'Menjadi partner digital terpercaya yang membantu bisnis, lembaga, dan komunitas tumbuh melalui solusi teknologi yang tepat guna.', 1, 'aktif'),
('misi', 'Solusi Tepat Guna', 'Menghadirkan website, aplikasi, dan sistem digital yang sesuai dengan kebutuhan nyata pengguna.', 1, 'aktif'),
('misi', 'Pendampingan Profesional', 'Memberikan arahan, pengembangan, dan pemeliharaan yang terukur dari awal hingga sistem berjalan.', 2, 'aktif'),
('misi', 'Inovasi Berkelanjutan', 'Mengembangkan layanan digital yang aman, mudah digunakan, dan siap mengikuti perkembangan bisnis.', 3, 'aktif');

INSERT INTO `sejarah` (`tahun`, `judul`, `deskripsi`, `gambar`, `urutan`, `status`) VALUES
('Awal Berdiri', 'Piramidsoft Mulai Dibangun', 'Piramidsoft hadir untuk membantu kebutuhan digitalisasi bisnis melalui website, aplikasi, dan sistem informasi.', 'upload/sejarah/awal-berdiri.jpg', 1, 'aktif'),
('Pengembangan Layanan', 'Fokus pada Solusi Digital', 'Layanan diperluas ke pengembangan custom, integrasi sistem, dan dukungan pemeliharaan.', 'upload/sejarah/pengembangan-layanan.jpg', 2, 'aktif'),
('Saat Ini', 'Mitra Teknologi Bisnis', 'Piramidsoft terus memperkenalkan tim, legalitas, struktur, visi misi, dan portofolio kerja kepada publik.', 'upload/sejarah/mitra-teknologi-bisnis.jpg', 3, 'aktif');

INSERT INTO `team` (`nama`, `jabatan`, `foto`, `bio`, `urutan`, `status`) VALUES
('Nama Tim', 'Founder / Director', 'upload/team/founder-director.jpg', 'Profil tim akan disesuaikan setelah data resmi tersedia.', 1, 'aktif'),
('Nama Tim', 'Project Manager', 'upload/team/project-manager.jpg', 'Profil tim akan disesuaikan setelah data resmi tersedia.', 2, 'aktif'),
('Nama Tim', 'Developer', 'upload/team/developer.jpg', 'Profil tim akan disesuaikan setelah data resmi tersedia.', 3, 'aktif');

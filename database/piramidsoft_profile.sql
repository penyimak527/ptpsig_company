/*
 Navicat Premium Data Transfer

 Source Server         : lokalku
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : piramidsoft_profile

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 24/07/2026 08:23:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `last_login` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Administrator', 'admin', '$2y$10$xaPXnMdqkiDQveuv7iq2FO7l7/0olJxkKSRJZa4KjmwBtpsCo5cNe', NULL, NULL, 'aktif', '21:07:2026', '21:07:2026', '21:07:2026');

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan`  (
  `id_kegiatan` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `klien` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kategori` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `layanan` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `brand` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ringkasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `label_detail` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` enum('draft','publish') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE,
  UNIQUE INDEX `slug`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO `kegiatan` VALUES (5, 'Sistem Informasi Akademik SD Kreatif Muhammadiyah', 'sistem-informasi-akademik-sd-kreatif-muhammadiyah', 'SD Kreatif Muhammadiyah Lumajang', 'Sistem Informasi Manajemen', 'Web Application Development', 'SD Kreatif Muhammadiyah', '30:06:2026', 'upload/kegiatan/ba5fbf30ef28cfbbe600668c0124e556.png', 'Sistem informasi akademik berbasis web untuk membantu pengelolaan data siswa, guru, kelas, jadwal pelajaran, jurnal mengajar, penilaian, dan laporan sekolah dalam satu platform terintegrasi.', 'Studi Kasus · Sistem Informasi Akademik', NULL, 'publish', '21:07:2026', NULL);

-- ----------------------------
-- Table structure for kegiatan_bagian
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan_bagian`;
CREATE TABLE `kegiatan_bagian`  (
  `id_bagian` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int UNSIGNED NOT NULL,
  `judul` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `konten` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `urutan` int UNSIGNED NOT NULL DEFAULT 0,
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bagian`) USING BTREE,
  INDEX `id_kegiatan`(`id_kegiatan`) USING BTREE,
  CONSTRAINT `kegiatan_bagian_fk` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kegiatan_bagian
-- ----------------------------
INSERT INTO `kegiatan_bagian` VALUES (2, 5, 'Informasi Umum', '<p>Sistem Informasi Akademik SD Kreatif Muhammadiyah dikembangkan sebagai pusat pengelolaan data sekolah yang dapat digunakan oleh admin, guru, dan pihak terkait. Sistem ini membantu proses administrasi akademik agar lebih terstruktur, cepat, dan mudah dipantau.</p><p><br></p><p>Seluruh data utama seperti siswa, guru, kelas, mata pelajaran, jadwal, tahun ajaran, jurnal guru, dan penilaian dikelola dalam satu aplikasi berbasis web.</p>', NULL, 1, '21:07:2026', NULL);
INSERT INTO `kegiatan_bagian` VALUES (3, 5, 'Tantangan', '<p>Tantangan utama dalam pengembangan sistem adalah menyatukan banyak proses akademik yang saling terhubung, seperti pembagian kelas, jadwal pelajaran, jurnal guru, semester aktif, penilaian siswa, dan laporan.</p><p><br></p><p>Sistem juga harus mampu menyesuaikan tahun ajaran dan semester aktif, menjaga konsistensi data, serta tetap mudah digunakan oleh pengguna dengan kebutuhan yang berbeda.</p>', NULL, 2, '21:07:2026', NULL);
INSERT INTO `kegiatan_bagian` VALUES (4, 5, 'Solusi', '<p>Solusi dikembangkan dalam bentuk aplikasi web terintegrasi dengan pembagian akses sesuai peran pengguna. Admin dapat mengelola data utama sekolah, sedangkan guru dapat melihat jadwal, mengisi jurnal, dan mengelola data akademik yang berkaitan dengan kelasnya.</p><p><br></p><p>Sistem menggunakan struktur data terpusat agar setiap modul saling terhubung dan informasi yang ditampilkan tetap konsisten. Tampilan juga dibuat responsif agar dapat diakses melalui komputer maupun perangkat mobile.</p>', NULL, 3, '21:07:2026', NULL);
INSERT INTO `kegiatan_bagian` VALUES (5, 5, 'Fitur Utama', '<p>Setelah sistem diterapkan, proses pengelolaan administrasi akademik menjadi lebih terpusat dan mudah dipantau. Guru dapat menjalankan proses pencatatan dengan lebih cepat, sedangkan admin dapat memperoleh data yang lebih rapi untuk kebutuhan laporan dan evaluasi.</p><p><br></p><p>Sistem ini juga dapat dikembangkan lebih lanjut sesuai kebutuhan sekolah, seperti portal siswa, absensi, pembayaran, notifikasi, dan integrasi dengan modul lainnya.</p>', NULL, 4, '21:07:2026', NULL);

-- ----------------------------
-- Table structure for sejarah
-- ----------------------------
DROP TABLE IF EXISTS `sejarah`;
CREATE TABLE `sejarah`  (
  `id_sejarah` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_sejarah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sejarah
-- ----------------------------
INSERT INTO `sejarah` VALUES (3, 'Sejarah PT Pyramidsoft Indonesia Group', '<p>PT Pyramidsoft Indonesia Group lahir dari semangat untuk membantu pelaku usaha, perusahaan, lembaga, dan instansi dalam menghadapi perkembangan teknologi serta kebutuhan transformasi digital yang semakin pesat. Berawal dari layanan pengembangan dan desain website, perusahaan terus membangun kompetensi dalam menghadirkan solusi digital yang disesuaikan dengan kebutuhan setiap pelanggan.</p><p>Dalam perjalanannya, Pyramidsoft tidak hanya berfokus pada pembuatan website sebagai media informasi, tetapi juga mengembangkan berbagai perangkat lunak dan sistem informasi yang dapat membantu meningkatkan efisiensi operasional bisnis. Setiap solusi dirancang dengan mempertimbangkan kebutuhan pengguna, kemudahan penggunaan, fleksibilitas pengembangan, dan manfaat jangka panjang bagi pelanggan.</p><p>Seiring meningkatnya kebutuhan digitalisasi, layanan perusahaan berkembang mencakup pengembangan website perusahaan, website custom, sistem informasi dan manajemen, aplikasi berbasis Android, integrasi sistem, pemeliharaan website, optimasi mesin pencari, serta berbagai solusi teknologi lainnya. Melalui pendekatan yang fleksibel, Pyramidsoft berupaya memberikan solusi yang tidak hanya mengikuti perkembangan teknologi, tetapi juga sesuai dengan karakter dan proses bisnis pelanggan.</p><p>Berpusat di Kabupaten Lumajang, Jawa Timur, PT Pyramidsoft Indonesia Group melayani kebutuhan pelanggan dari berbagai wilayah di Indonesia. Perusahaan juga memperluas jangkauan bisnisnya melalui perwakilan penjualan di Jakarta serta pelayanan proyek untuk pelanggan di dalam maupun luar negeri.</p><p>Sebagai bagian dari komitmennya dalam mendukung pertumbuhan ekonomi digital, Pyramidsoft terus mengembangkan produk dan layanan yang lebih inovatif, termasuk solusi perangkat lunak khusus dan produk berbasis cloud. Perkembangan tersebut menjadi langkah perusahaan untuk bertransformasi dari penyedia jasa pembuatan website menjadi mitra teknologi yang mampu mendampingi pelanggan dalam setiap tahap digitalisasi.</p><p>Hingga saat ini, PT Pyramidsoft Indonesia Group terus bertumbuh dengan mengedepankan profesionalisme, inovasi, kualitas pelayanan, serta hubungan kerja sama jangka panjang. Dengan dukungan tim yang kompeten dan semangat untuk terus berkembang, perusahaan berkomitmen menghadirkan teknologi yang memberikan manfaat nyata bagi bisnis, lembaga, dan masyarakat.</p>', 'aktif', '21:07:2026', '21:07:2026');

-- ----------------------------
-- Table structure for struktur_organisasi
-- ----------------------------
DROP TABLE IF EXISTS `struktur_organisasi`;
CREATE TABLE `struktur_organisasi`  (
  `id_struktur` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int UNSIGNED NULL DEFAULT NULL,
  `nama` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jabatan` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `urutan` int UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_struktur`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `struktur_parent_fk` FOREIGN KEY (`parent_id`) REFERENCES `struktur_organisasi` (`id_struktur`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of struktur_organisasi
-- ----------------------------
INSERT INTO `struktur_organisasi` VALUES (1, NULL, 'Mas Iqbal', 'Pimpinan', 'CEO', NULL, '', 1, 'aktif', '21:07:2026', NULL);
INSERT INTO `struktur_organisasi` VALUES (2, NULL, 'Mas Firman', 'Project Manager', 'Project Manager', NULL, '', 2, 'aktif', '21:07:2026', NULL);
INSERT INTO `struktur_organisasi` VALUES (3, NULL, 'Mas Amin', 'Programmer', 'Programmer', NULL, '', 3, 'aktif', '21:07:2026', NULL);
INSERT INTO `struktur_organisasi` VALUES (4, NULL, 'Mas Fauzi', 'Programmer', 'Programmer', NULL, '', 4, 'aktif', '21:07:2026', NULL);
INSERT INTO `struktur_organisasi` VALUES (5, NULL, 'Zaki', 'Asisten Programmer', 'Asisten Programmer', NULL, '', 5, 'aktif', '21:07:2026', NULL);
INSERT INTO `struktur_organisasi` VALUES (6, NULL, 'Bagan Struktur Organisasi', 'Struktur Organisasi', 'Piramidsoft', 'upload/struktur_organisasi/d771c974249cb9837140676c76f8fe41.jpeg', 'Bagan struktur organisasi resmi Piramidsoft.', 0, 'aktif', '21:07:2026', '21:07:2026');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `id_team` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `urutan` int UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_team`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES (1, 'Mas Iqbal', 'CEO', 'upload/team/e3be81e0696e73903cd519765fe33eb4.PNG', '', '', '', 1, 'aktif', '21:07:2026', '21:07:2026');
INSERT INTO `team` VALUES (2, 'Mas Firman', 'Project Manager', 'upload/team/7be13a838b9f74bab87140fb3295c77d.jpg', '', '', '', 2, 'aktif', '21:07:2026', '21:07:2026');
INSERT INTO `team` VALUES (3, 'Mas Amin', 'Programmer', 'upload/team/6e682c67de23b2fa8aceaf8e4974662f.PNG', '', '', '', 3, 'aktif', '21:07:2026', NULL);
INSERT INTO `team` VALUES (4, 'Mas Fauzi', 'Programmer', 'upload/team/0ee98fdfc8a51636b9fe7f88fd50ffa0.jpg', '', '', '', 4, 'aktif', '21:07:2026', '21:07:2026');
INSERT INTO `team` VALUES (5, 'zaki', 'Asisten Programmer', 'upload/team/7687fc1d356abf153ebffb6551c16a4b.jpg', '', '', '', 5, 'aktif', '21:07:2026', '21:07:2026');

-- ----------------------------
-- Table structure for visi_misi
-- ----------------------------
DROP TABLE IF EXISTS `visi_misi`;
CREATE TABLE `visi_misi`  (
  `id_visi_misi` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `visi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_visi_misi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of visi_misi
-- ----------------------------
INSERT INTO `visi_misi` VALUES (4, '<p>Menjadi perusahaan teknologi terpercaya dan inovatif yang mampu menghadirkan solusi perangkat lunak berkualitas untuk mendukung transformasi digital, meningkatkan efisiensi bisnis, serta memberikan nilai berkelanjutan bagi pelanggan.</p>', '<ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengembangkan perangkat lunak yang inovatif, aman, stabil, dan sesuai dengan kebutuhan pelanggan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memberikan solusi teknologi yang efektif untuk membantu perusahaan meningkatkan produktivitas dan efisiensi operasional.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengutamakan kualitas layanan, ketepatan waktu, serta kepuasan pelanggan dalam setiap proses pengembangan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Membangun hubungan kerja sama jangka panjang yang profesional, transparan, dan saling menguntungkan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengembangkan kompetensi sumber daya manusia agar mampu mengikuti perkembangan teknologi dan menghasilkan solusi terbaik.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Berkontribusi dalam mempercepat transformasi digital bagi perusahaan, instansi, dan masyarakat.</li></ol>', 'aktif', '21:07:2026', NULL);

SET FOREIGN_KEY_CHECKS = 1;

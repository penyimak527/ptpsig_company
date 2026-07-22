-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: piramidsoft_profile
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `last_login` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Administrator','admin','$2y$10$xaPXnMdqkiDQveuv7iq2FO7l7/0olJxkKSRJZa4KjmwBtpsCo5cNe',NULL,NULL,'aktif','22:07:2026','21:07:2026','21:07:2026');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan`
--

DROP TABLE IF EXISTS `kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `klien` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ringkasan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_detail` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','publish') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`) USING BTREE,
  UNIQUE KEY `slug` (`slug`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan`
--

LOCK TABLES `kegiatan` WRITE;
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` VALUES (5,'Sistem Informasi Akademik SD Kreatif Muhammadiyah','sistem-informasi-akademik-sd-kreatif-muhammadiyah','SD Kreatif Muhammadiyah Lumajang','Sistem Informasi Manajemen','Web Application Development','SD Kreatif Muhammadiyah','30:06:2026','upload/kegiatan/ba5fbf30ef28cfbbe600668c0124e556.png','Sistem informasi akademik berbasis web untuk membantu pengelolaan data siswa, guru, kelas, jadwal pelajaran, jurnal mengajar, penilaian, dan laporan sekolah dalam satu platform terintegrasi.','Studi Kasus · Sistem Informasi Akademik',NULL,'publish','21:07:2026',NULL);
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kegiatan_bagian`
--

DROP TABLE IF EXISTS `kegiatan_bagian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kegiatan_bagian` (
  `id_bagian` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_kegiatan` int(10) unsigned NOT NULL,
  `judul` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_bagian`) USING BTREE,
  KEY `id_kegiatan` (`id_kegiatan`) USING BTREE,
  CONSTRAINT `kegiatan_bagian_fk` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan_bagian`
--

LOCK TABLES `kegiatan_bagian` WRITE;
/*!40000 ALTER TABLE `kegiatan_bagian` DISABLE KEYS */;
INSERT INTO `kegiatan_bagian` VALUES (2,5,'Informasi Umum','<p>Sistem Informasi Akademik SD Kreatif Muhammadiyah dikembangkan sebagai pusat pengelolaan data sekolah yang dapat digunakan oleh admin, guru, dan pihak terkait. Sistem ini membantu proses administrasi akademik agar lebih terstruktur, cepat, dan mudah dipantau.</p><p><br></p><p>Seluruh data utama seperti siswa, guru, kelas, mata pelajaran, jadwal, tahun ajaran, jurnal guru, dan penilaian dikelola dalam satu aplikasi berbasis web.</p>',NULL,1,'21:07:2026',NULL),(3,5,'Tantangan','<p>Tantangan utama dalam pengembangan sistem adalah menyatukan banyak proses akademik yang saling terhubung, seperti pembagian kelas, jadwal pelajaran, jurnal guru, semester aktif, penilaian siswa, dan laporan.</p><p><br></p><p>Sistem juga harus mampu menyesuaikan tahun ajaran dan semester aktif, menjaga konsistensi data, serta tetap mudah digunakan oleh pengguna dengan kebutuhan yang berbeda.</p>',NULL,2,'21:07:2026',NULL),(4,5,'Solusi','<p>Solusi dikembangkan dalam bentuk aplikasi web terintegrasi dengan pembagian akses sesuai peran pengguna. Admin dapat mengelola data utama sekolah, sedangkan guru dapat melihat jadwal, mengisi jurnal, dan mengelola data akademik yang berkaitan dengan kelasnya.</p><p><br></p><p>Sistem menggunakan struktur data terpusat agar setiap modul saling terhubung dan informasi yang ditampilkan tetap konsisten. Tampilan juga dibuat responsif agar dapat diakses melalui komputer maupun perangkat mobile.</p>',NULL,3,'21:07:2026',NULL),(5,5,'Fitur Utama','<p>Setelah sistem diterapkan, proses pengelolaan administrasi akademik menjadi lebih terpusat dan mudah dipantau. Guru dapat menjalankan proses pencatatan dengan lebih cepat, sedangkan admin dapat memperoleh data yang lebih rapi untuk kebutuhan laporan dan evaluasi.</p><p><br></p><p>Sistem ini juga dapat dikembangkan lebih lanjut sesuai kebutuhan sekolah, seperti portal siswa, absensi, pembayaran, notifikasi, dan integrasi dengan modul lainnya.</p>',NULL,4,'21:07:2026',NULL);
/*!40000 ALTER TABLE `kegiatan_bagian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sejarah`
--

DROP TABLE IF EXISTS `sejarah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sejarah` (
  `id_sejarah` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_sejarah`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sejarah`
--

LOCK TABLES `sejarah` WRITE;
/*!40000 ALTER TABLE `sejarah` DISABLE KEYS */;
INSERT INTO `sejarah` VALUES (3,'Sejarah PT Pyramidsoft Indonesia Group','<p>PT Pyramidsoft Indonesia Group lahir dari semangat untuk membantu pelaku usaha, perusahaan, lembaga, dan instansi dalam menghadapi perkembangan teknologi serta kebutuhan transformasi digital yang semakin pesat. Berawal dari layanan pengembangan dan desain website, perusahaan terus membangun kompetensi dalam menghadirkan solusi digital yang disesuaikan dengan kebutuhan setiap pelanggan.</p><p>Dalam perjalanannya, Pyramidsoft tidak hanya berfokus pada pembuatan website sebagai media informasi, tetapi juga mengembangkan berbagai perangkat lunak dan sistem informasi yang dapat membantu meningkatkan efisiensi operasional bisnis. Setiap solusi dirancang dengan mempertimbangkan kebutuhan pengguna, kemudahan penggunaan, fleksibilitas pengembangan, dan manfaat jangka panjang bagi pelanggan.</p><p>Seiring meningkatnya kebutuhan digitalisasi, layanan perusahaan berkembang mencakup pengembangan website perusahaan, website custom, sistem informasi dan manajemen, aplikasi berbasis Android, integrasi sistem, pemeliharaan website, optimasi mesin pencari, serta berbagai solusi teknologi lainnya. Melalui pendekatan yang fleksibel, Pyramidsoft berupaya memberikan solusi yang tidak hanya mengikuti perkembangan teknologi, tetapi juga sesuai dengan karakter dan proses bisnis pelanggan.</p><p>Berpusat di Kabupaten Lumajang, Jawa Timur, PT Pyramidsoft Indonesia Group melayani kebutuhan pelanggan dari berbagai wilayah di Indonesia. Perusahaan juga memperluas jangkauan bisnisnya melalui perwakilan penjualan di Jakarta serta pelayanan proyek untuk pelanggan di dalam maupun luar negeri.</p><p>Sebagai bagian dari komitmennya dalam mendukung pertumbuhan ekonomi digital, Pyramidsoft terus mengembangkan produk dan layanan yang lebih inovatif, termasuk solusi perangkat lunak khusus dan produk berbasis cloud. Perkembangan tersebut menjadi langkah perusahaan untuk bertransformasi dari penyedia jasa pembuatan website menjadi mitra teknologi yang mampu mendampingi pelanggan dalam setiap tahap digitalisasi.</p><p>Hingga saat ini, PT Pyramidsoft Indonesia Group terus bertumbuh dengan mengedepankan profesionalisme, inovasi, kualitas pelayanan, serta hubungan kerja sama jangka panjang. Dengan dukungan tim yang kompeten dan semangat untuk terus berkembang, perusahaan berkomitmen menghadirkan teknologi yang memberikan manfaat nyata bagi bisnis, lembaga, dan masyarakat.</p>','aktif','21:07:2026','21:07:2026');
/*!40000 ALTER TABLE `sejarah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `struktur_organisasi`
--

DROP TABLE IF EXISTS `struktur_organisasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `nama` varchar(140) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(10) unsigned NOT NULL DEFAULT 0,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_struktur`) USING BTREE,
  KEY `parent_id` (`parent_id`) USING BTREE,
  CONSTRAINT `struktur_parent_fk` FOREIGN KEY (`parent_id`) REFERENCES `struktur_organisasi` (`id_struktur`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `struktur_organisasi`
--

LOCK TABLES `struktur_organisasi` WRITE;
/*!40000 ALTER TABLE `struktur_organisasi` DISABLE KEYS */;
INSERT INTO `struktur_organisasi` VALUES (1,NULL,'Mas Iqbal','Pimpinan','CEO',NULL,'',1,'aktif','21:07:2026',NULL),(2,NULL,'Mas Firman','Project Manager','Project Manager',NULL,'',2,'aktif','21:07:2026',NULL),(3,NULL,'Mas Amin','Programmer','Programmer',NULL,'',3,'aktif','21:07:2026',NULL),(4,NULL,'Mas Fauzi','Programmer','Programmer',NULL,'',4,'aktif','21:07:2026',NULL),(5,NULL,'Zaki','Asisten Programmer','Asisten Programmer',NULL,'',5,'aktif','21:07:2026',NULL),(6,NULL,'Bagan Struktur Organisasi','Struktur Organisasi','Piramidsoft','upload/struktur_organisasi/d771c974249cb9837140676c76f8fe41.jpeg','Bagan struktur organisasi resmi Piramidsoft.',0,'aktif','21:07:2026','21:07:2026');
/*!40000 ALTER TABLE `struktur_organisasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `id_team` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int(10) unsigned NOT NULL DEFAULT 0,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_team`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'Mas Iqbal','CEO','upload/team/e3be81e0696e73903cd519765fe33eb4.PNG','','','',1,'aktif','21:07:2026','21:07:2026'),(2,'Mas Firman','Project Manager','upload/team/7be13a838b9f74bab87140fb3295c77d.jpg','','','',2,'aktif','21:07:2026','21:07:2026'),(3,'Mas Amin','Programmer','upload/team/6e682c67de23b2fa8aceaf8e4974662f.PNG','','','',3,'aktif','21:07:2026',NULL),(4,'Mas Fauzi','Programmer','upload/team/0ee98fdfc8a51636b9fe7f88fd50ffa0.jpg','','','',4,'aktif','21:07:2026','21:07:2026'),(5,'zaki','Asisten Programmer','upload/team/7687fc1d356abf153ebffb6551c16a4b.jpg','','','',5,'aktif','21:07:2026','21:07:2026');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-22 10:43:29

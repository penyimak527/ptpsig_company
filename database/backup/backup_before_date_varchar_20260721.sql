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
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Administrator','admin','admin@piramidsoft.com','$2y$10$xaPXnMdqkiDQveuv7iq2FO7l7/0olJxkKSRJZa4KjmwBtpsCo5cNe','superadmin',NULL,'aktif','2026-07-21 09:18:21','2026-07-21 08:40:01','2026-07-21 14:18:21');
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
  `judul` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klien` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ringkasan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','publish') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kegiatan`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kegiatan`
--

LOCK TABLES `kegiatan` WRITE;
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sejarah`
--

LOCK TABLES `sejarah` WRITE;
/*!40000 ALTER TABLE `sejarah` DISABLE KEYS */;
INSERT INTO `sejarah` VALUES (3,'Sejarah PT Pyramidsoft Indonesia Group','<p>PT Pyramidsoft Indonesia Group lahir dari semangat untuk membantu pelaku usaha, perusahaan, lembaga, dan instansi dalam menghadapi perkembangan teknologi serta kebutuhan transformasi digital yang semakin pesat. Berawal dari layanan pengembangan dan desain website, perusahaan terus membangun kompetensi dalam menghadirkan solusi digital yang disesuaikan dengan kebutuhan setiap pelanggan.</p><p>Dalam perjalanannya, Pyramidsoft tidak hanya berfokus pada pembuatan website sebagai media informasi, tetapi juga mengembangkan berbagai perangkat lunak dan sistem informasi yang dapat membantu meningkatkan efisiensi operasional bisnis. Setiap solusi dirancang dengan mempertimbangkan kebutuhan pengguna, kemudahan penggunaan, fleksibilitas pengembangan, dan manfaat jangka panjang bagi pelanggan.</p><p>Seiring meningkatnya kebutuhan digitalisasi, layanan perusahaan berkembang mencakup pengembangan website perusahaan, website custom, sistem informasi dan manajemen, aplikasi berbasis Android, integrasi sistem, pemeliharaan website, optimasi mesin pencari, serta berbagai solusi teknologi lainnya. Melalui pendekatan yang fleksibel, Pyramidsoft berupaya memberikan solusi yang tidak hanya mengikuti perkembangan teknologi, tetapi juga sesuai dengan karakter dan proses bisnis pelanggan.</p><p>Berpusat di Kabupaten Lumajang, Jawa Timur, PT Pyramidsoft Indonesia Group melayani kebutuhan pelanggan dari berbagai wilayah di Indonesia. Perusahaan juga memperluas jangkauan bisnisnya melalui perwakilan penjualan di Jakarta serta pelayanan proyek untuk pelanggan di dalam maupun luar negeri.</p><p>Sebagai bagian dari komitmennya dalam mendukung pertumbuhan ekonomi digital, Pyramidsoft terus mengembangkan produk dan layanan yang lebih inovatif, termasuk solusi perangkat lunak khusus dan produk berbasis cloud. Perkembangan tersebut menjadi langkah perusahaan untuk bertransformasi dari penyedia jasa pembuatan website menjadi mitra teknologi yang mampu mendampingi pelanggan dalam setiap tahap digitalisasi.</p><p>Hingga saat ini, PT Pyramidsoft Indonesia Group terus bertumbuh dengan mengedepankan profesionalisme, inovasi, kualitas pelayanan, serta hubungan kerja sama jangka panjang. Dengan dukungan tim yang kompeten dan semangat untuk terus berkembang, perusahaan berkomitmen menghadirkan teknologi yang memberikan manfaat nyata bagi bisnis, lembaga, dan masyarakat.</p>','aktif','2026-07-21 08:18:01','2026-07-21 08:59:04');
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_struktur`),
  KEY `parent_id` (`parent_id`),
  CONSTRAINT `struktur_parent_fk` FOREIGN KEY (`parent_id`) REFERENCES `struktur_organisasi` (`id_struktur`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `struktur_organisasi`
--

LOCK TABLES `struktur_organisasi` WRITE;
/*!40000 ALTER TABLE `struktur_organisasi` DISABLE KEYS */;
INSERT INTO `struktur_organisasi` VALUES (1,NULL,'Mas Iqbal','Pimpinan','CEO',NULL,'',1,'aktif','2026-07-21 08:38:13',NULL),(2,NULL,'Mas Firman','Project Manager','Project Manager',NULL,'',2,'aktif','2026-07-21 08:38:36',NULL),(3,NULL,'Mas Amin','Programmer','Programmer',NULL,'',3,'aktif','2026-07-21 08:38:51',NULL),(4,NULL,'Mas Fauzi','Programmer','Programmer',NULL,'',4,'aktif','2026-07-21 08:39:09',NULL),(5,NULL,'Zaki','Asisten Programmer','Asisten Programmer',NULL,'',5,'aktif','2026-07-21 08:39:24',NULL);
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'Mas Iqbal','CEO','upload/team/e3be81e0696e73903cd519765fe33eb4.PNG','','','',1,'aktif','2026-07-21 08:16:48','2026-07-21 08:30:57'),(2,'Mas Firman','Project Manager','upload/team/7be13a838b9f74bab87140fb3295c77d.jpg','','','',2,'aktif','2026-07-21 08:17:13','2026-07-21 08:36:30'),(3,'Mas Amin','Programmer','upload/team/6e682c67de23b2fa8aceaf8e4974662f.PNG','','','',3,'aktif','2026-07-21 08:31:23',NULL),(4,'Mas Fauzi','Programmer','upload/team/0ee98fdfc8a51636b9fe7f88fd50ffa0.jpg','','','',4,'aktif','2026-07-21 08:33:12','2026-07-21 08:33:27'),(5,'zaki','Asisten Programmer','upload/team/7687fc1d356abf153ebffb6551c16a4b.jpg','','','',5,'aktif','2026-07-21 08:33:57','2026-07-21 08:34:56');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visi_misi`
--

DROP TABLE IF EXISTS `visi_misi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visi_misi` (
  `id_visi_misi` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','nonaktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_visi_misi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visi_misi`
--

LOCK TABLES `visi_misi` WRITE;
/*!40000 ALTER TABLE `visi_misi` DISABLE KEYS */;
INSERT INTO `visi_misi` VALUES (4,'<p>Menjadi perusahaan teknologi terpercaya dan inovatif yang mampu menghadirkan solusi perangkat lunak berkualitas untuk mendukung transformasi digital, meningkatkan efisiensi bisnis, serta memberikan nilai berkelanjutan bagi pelanggan.</p>','<ol><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengembangkan perangkat lunak yang inovatif, aman, stabil, dan sesuai dengan kebutuhan pelanggan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Memberikan solusi teknologi yang efektif untuk membantu perusahaan meningkatkan produktivitas dan efisiensi operasional.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengutamakan kualitas layanan, ketepatan waktu, serta kepuasan pelanggan dalam setiap proses pengembangan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Membangun hubungan kerja sama jangka panjang yang profesional, transparan, dan saling menguntungkan.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Mengembangkan kompetensi sumber daya manusia agar mampu mengikuti perkembangan teknologi dan menghasilkan solusi terbaik.</li><li data-list=\"ordered\"><span class=\"ql-ui\" contenteditable=\"false\"></span>Berkontribusi dalam mempercepat transformasi digital bagi perusahaan, instansi, dan masyarakat.</li></ol>','aktif','2026-07-21 08:11:41',NULL);
/*!40000 ALTER TABLE `visi_misi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'piramidsoft_profile'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-07-21 15:03:44

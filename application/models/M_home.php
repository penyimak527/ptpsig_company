<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
	public function get_home_data()
	{
		return $this->get_public_data();
	}

	public function get_public_data()
	{
		return array(
			'title' => 'Piramidsoft - Company Profile',
			'company' => array(
				'name' => 'Piramidsoft',
				'email' => 'info@piramidsoft.com',
				'phone' => 'Nomor resmi menyusul',
				'address' => 'Alamat kantor menyusul',
				'established' => 'Tahun berdiri menyusul',
				'service_url' => 'https://jasawebsitemurah.net/',
			),
			'menus' => array(
				array('label' => 'Beranda', 'path' => '', 'anchor' => '#beranda'),
				array(
					'label' => 'Profile',
					'path' => 'home/struktur_organisasi',
					'children' => array(
						array('label' => 'Struktur Organisasi', 'path' => 'home/struktur_organisasi'),
						array('label' => 'Visi Misi', 'path' => 'home/visi_misi'),
						array('label' => 'Sejarah', 'path' => 'home/sejarah'),
					),
				),
				array('label' => 'Kegiatan', 'path' => 'home/kegiatan'),
				array('label' => 'Kontak', 'path' => '', 'anchor' => '#kontak'),
			),
			'services' => array(
				array(
					'title' => 'Konsultasi Profesional',
					'image' => 'img_pyramid/layanan/1.png',
					'icon' => 'service-icon-1.png',
					'description' => 'Merancang strategi digital yang efektif dan memilih teknologi yang tepat.',
				),
				array(
					'title' => 'Pengembangan Kustom',
					'image' => 'img_pyramid/layanan/2.png',
					'icon' => 'service-icon-2.png',
					'description' => 'Solusi aplikasi web dan mobile yang dirancang untuk kebutuhan bisnis.',
				),
				array(
					'title' => 'Integrasi Sistem',
					'image' => 'img_pyramid/layanan/3.png',
					'icon' => 'service-icon-3.png',
					'description' => 'Mengintegrasikan berbagai sistem dan aplikasi dalam satu platform.',
				),
				array(
					'title' => 'Dukungan Pemeliharaan',
					'image' => 'img_pyramid/layanan/4.png',
					'icon' => 'service-icon-1.png',
					'description' => 'Memastikan aplikasi tetap optimal dan aman dalam jangka panjang.',
				),
			),
			'teams' => array(
				array('name' => 'Nama Tim', 'position' => 'Founder / Director', 'image' => 'team-1.jpg'),
				array('name' => 'Nama Tim', 'position' => 'Project Manager', 'image' => 'team-2.jpg'),
				array('name' => 'Nama Tim', 'position' => 'Developer', 'image' => 'team-3.jpg'),
			),
			'brands' => array(
				'img_pyramid/klien/0187d9dfdd0694b592053acd8af559f4.png',
				'img_pyramid/klien/0778d17fcf7963c4c64955a6e3e54315.png',
				'img_pyramid/klien/0942c2a7db4ded282a9980d502b7a2b4.png',
				'img_pyramid/klien/21eac2c4b7de033bd0b6aef9bdc31862.png',
				'img_pyramid/klien/2e522e90e04296115a9f057dc7741b69.png',
				'img_pyramid/klien/3522897f017be6ae19962c1cf37102e2.png',
				'img_pyramid/klien/3df21e34398bdbcde1d75b03dfe5dda2.png',
				'img_pyramid/klien/43be820cac11f30adbb15f9aeef3919d.png',
				'img_pyramid/klien/4afa0034acbd524c02d247c0de57ade5.png',
				'img_pyramid/klien/54ab1944739e31248ab92ae4ef3f0152.png',
				'img_pyramid/klien/5f512c3662a0db595a5366bc0a94aa12.png',
				'img_pyramid/klien/5f68e7bff328992035ae53b7c936c14a.png',
			),
			'visi_misi' => array(
				'visi' => array(
					'title' => 'Visi Perusahaan',
					'description' => 'Menjadi partner digital terpercaya yang membantu bisnis, lembaga, dan komunitas tumbuh melalui solusi teknologi yang tepat guna.',
				),
				'misi' => array(
					array('title' => 'Solusi Tepat Guna', 'description' => 'Menghadirkan website, aplikasi, dan sistem digital yang sesuai dengan kebutuhan nyata pengguna.'),
					array('title' => 'Pendampingan Profesional', 'description' => 'Memberikan arahan, pengembangan, dan pemeliharaan yang terukur dari awal hingga sistem berjalan.'),
					array('title' => 'Inovasi Berkelanjutan', 'description' => 'Mengembangkan layanan digital yang aman, mudah digunakan, dan siap mengikuti perkembangan bisnis.'),
				),
			),
			'struktur_organisasi' => array(
				array('name' => 'Direktur / Founder', 'division' => 'Leadership', 'description' => 'Mengatur arah perusahaan, strategi bisnis, dan pengembangan layanan.'),
				array('name' => 'Project Manager', 'division' => 'Management', 'description' => 'Mengelola kebutuhan klien, jadwal pekerjaan, dan koordinasi lintas tim.'),
				array('name' => 'Developer Team', 'division' => 'Development', 'description' => 'Membangun website, aplikasi, integrasi, dan sistem sesuai kebutuhan proyek.'),
				array('name' => 'Support & Maintenance', 'division' => 'Support', 'description' => 'Menjaga performa layanan, perawatan sistem, dan dukungan teknis lanjutan.'),
			),
			'sejarah' => array(
				array('year' => 'Awal Berdiri', 'title' => 'Piramidsoft Mulai Dibangun', 'description' => 'Piramidsoft hadir untuk membantu kebutuhan digitalisasi bisnis melalui website, aplikasi, dan sistem informasi.'),
				array('year' => 'Pengembangan Layanan', 'title' => 'Fokus pada Solusi Digital', 'description' => 'Layanan diperluas ke pengembangan custom, integrasi sistem, dan dukungan pemeliharaan.'),
				array('year' => 'Saat Ini', 'title' => 'Mitra Teknologi Bisnis', 'description' => 'Piramidsoft terus memperkenalkan tim, legalitas, struktur, visi misi, dan portofolio kerja kepada publik.'),
			),
			'activities' => array(
				array(
					'title' => 'Diskusi Kebutuhan Website Profile',
					'slug' => 'diskusi-kebutuhan-website-profile',
					'client' => 'Klien UMKM',
					'category' => 'Konsultasi Digital',
					'date' => '2026-07-01',
					'image' => 'images/blog-1.jpg',
					'excerpt' => 'Sesi pembahasan kebutuhan company profile, struktur konten, dan arah visual website.',
					'description' => 'Kegiatan ini menjadi tahap awal untuk memahami profil bisnis, kebutuhan konten, target pengunjung, dan rencana tampilan website agar hasil akhir lebih sesuai dengan karakter klien.',
				),
				array(
					'title' => 'Koordinasi Pengembangan Sistem',
					'slug' => 'koordinasi-pengembangan-sistem',
					'client' => 'Klien Operasional',
					'category' => 'Pengembangan Kustom',
					'date' => '2026-07-08',
					'image' => 'images/blog-2.jpg',
					'excerpt' => 'Koordinasi fitur, alur kerja, dan kebutuhan integrasi sistem untuk operasional bisnis.',
					'description' => 'Tim melakukan pemetaan fitur dan proses bisnis agar sistem yang dikembangkan dapat membantu pekerjaan harian, pelaporan, dan pengelolaan data secara lebih rapi.',
				),
				array(
					'title' => 'Pendampingan Maintenance Website',
					'slug' => 'pendampingan-maintenance-website',
					'client' => 'Brand Partner',
					'category' => 'Maintenance',
					'date' => '2026-07-12',
					'image' => 'images/blog-3.jpg',
					'excerpt' => 'Pendampingan perawatan website, pengecekan tampilan, dan optimasi konten.',
					'description' => 'Kegiatan maintenance dilakukan untuk memastikan website tetap berjalan baik, informasi tetap relevan, serta pengalaman pengguna tetap nyaman saat mengakses halaman utama maupun halaman detail.',
				),
			),
		);
	}

	public function get_activity_by_slug($slug)
	{
		foreach ($this->get_public_data()['activities'] as $activity) {
			if ($activity['slug'] === $slug) {
				return $activity;
			}
		}

		return NULL;
	}
}

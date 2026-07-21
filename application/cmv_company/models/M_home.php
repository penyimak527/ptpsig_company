<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_home_data()
	{
		return $this->get_public_data();
	}

	public function get_public_data()
	{
		return array(
			'title' => 'Piramidsoft - Company Profile',
			'company' => $this->get_company_data(),
			'menus' => $this->get_menus(),
			'services' => $this->get_services(),
			'advantages' => $this->get_advantages(),
			'highlights' => $this->get_highlights(),
			'teams' => $this->get_team_data(),
			'brands' => $this->get_brand_data(),
			'visi_misi' => $this->get_visi_misi_data(),
			'struktur_organisasi' => $this->get_struktur_data(),
			'sejarah' => $this->get_sejarah_data(),
			'activities' => $this->get_activity_data(),
			'hero_images' => $this->get_hero_images(),
			'tech_groups' => $this->get_tech_groups(),
		);
	}

	public function get_activity_by_slug($slug)
	{
		$row = $this->db->get_where('kegiatan', array('slug' => $slug, 'status' => 'publish'))->row_array();

		if (empty($row)) {
			return NULL;
		}

		$activity = $this->map_activity($row);
		$activity['sections'] = $this->db
			->where('id_kegiatan', $row['id_kegiatan'])
			->order_by('urutan', 'ASC')
			->order_by('id_bagian', 'ASC')
			->get('kegiatan_bagian')
			->result_array();

		return $activity;
	}

	private function get_company_data()
	{
		return array(
			'name' => 'Piramidsoft',
			'legal_name' => 'PT Pyramidsoft Indonesia Group',
			'email' => 'marketing@ptpsig.com',
			'phone' => '+62 851 5772 0203',
			'address' => 'Jl. Musi No. 30, Sekarputih, Sumberejo, Kec. Sukodono, Kabupaten Lumajang, Jawa Timur 67352, Indonesia',
			'branch_address' => 'Talavera Office Suite 18th Floor, Jl. TB Simatupang No.Kav. 22-23, Jakarta Selatan, DKI Jakarta',
			'established' => '2019',
			'service_url' => 'https://jasawebsitemurah.net/',
		);
	}

	private function get_menus()
	{
		return array(
			array('label' => 'Beranda', 'path' => '', 'anchor' => '#beranda'),
			array(
				'label' => 'Profile',
				'path' => 'profil/sejarah',
				'children' => array(
					array('label' => 'Sejarah', 'path' => 'profil/sejarah'),
					array('label' => 'Visi dan Misi', 'path' => 'profil/visi_misi'),
					array('label' => 'Struktur Organisasi', 'path' => 'profil/struktur_organisasi'),
				),
			),
			array('label' => 'Tim', 'path' => 'profil/tim'),
			array('label' => 'Kegiatan', 'path' => 'kegiatan'),
		);
	}

	private function get_services()
	{
		return array(
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
		);
	}

	private function get_team_data()
	{
		$rows = $this->db
			->where('status', 'aktif')
			->order_by('urutan', 'ASC')
			->get('team')
			->result_array();

		if (empty($rows)) {
			return array();
		}

		$data = array();
		$fallbacks = array(
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-13.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-14.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/makan-w-tim-2.jpg',
		);
		foreach ($rows as $index => $row) {
			$data[] = array(
				'name' => $row['nama'],
				'position' => $row['jabatan'],
				'image' => $this->fallback_upload($row['foto'], $fallbacks[$index % count($fallbacks)]),
				'bio' => $row['bio'],
				'instagram' => $row['instagram'],
				'linkedin' => $row['linkedin'],
			);
		}

		return $data;
	}

	private function get_advantages()
	{
		return array(
			array('title' => 'Pendekatan Strategis', 'description' => 'Setiap solusi dimulai dari pemahaman kebutuhan bisnis dan tujuan pengguna.'),
			array('title' => 'Solusi Kustom', 'description' => 'Pengembangan dibuat menyesuaikan proses, skala, dan karakter operasional klien.'),
			array('title' => 'Pengalaman Pengguna', 'description' => 'Antarmuka dirancang agar mudah digunakan dan mendukung produktivitas.'),
			array('title' => 'Dukungan Berkelanjutan', 'description' => 'Tim membantu perawatan, peningkatan, dan pengembangan sistem jangka panjang.'),
		);
	}

	private function get_highlights()
	{
		return array(
			array('label' => 'Tahun berdiri', 'value' => $this->get_company_data()['established']),
			array('label' => 'Proyek', 'value' => 'Mengikuti data resmi'),
			array('label' => 'Pelanggan', 'value' => 'Mengikuti data resmi'),
			array('label' => 'Wilayah layanan', 'value' => 'Nasional'),
			array('label' => 'Tim', 'value' => $this->db->where('status', 'aktif')->count_all_results('team') . ' aktif'),
		);
	}

	private function get_brand_data()
	{
		return array(
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
		);
	}

	private function get_visi_misi_data()
	{
		$row = $this->db
			->where('status', 'aktif')
			->order_by('id_visi_misi', 'DESC')
			->get('visi_misi')
			->row_array();

		if (empty($row)) {
			return array(
				'visi' => array('title' => 'Visi', 'description' => '<p>Data visi belum tersedia.</p>'),
				'misi' => array('title' => 'Misi', 'description' => '<p>Data misi belum tersedia.</p>'),
			);
		}

		return array(
			'visi' => array('title' => 'Visi', 'description' => $row['visi']),
			'misi' => array('title' => 'Misi', 'description' => $row['misi']),
		);
	}

	private function get_struktur_data()
	{
		$row = $this->db
			->where('status', 'aktif')
			->where('foto IS NOT NULL', NULL, FALSE)
			->where('foto !=', '')
			->order_by('id_struktur', 'DESC')
			->get('struktur_organisasi')
			->row_array();

		if (empty($row)) {
			return array();
		}

		return array(array(
			'image' => $row['foto'],
			'title' => 'Bagan Struktur Organisasi Piramidsoft',
		));
	}

	private function get_sejarah_data()
	{
		$row = $this->db
			->where('status', 'aktif')
			->order_by('id_sejarah', 'DESC')
			->get('sejarah')
			->row_array();

		if (empty($row)) {
			return array('title' => 'Sejarah Piramidsoft', 'content' => '<p>Data sejarah belum tersedia.</p>');
		}

		return array('title' => $row['judul'], 'content' => $row['konten']);
	}

	private function get_activity_data()
	{
		$rows = $this->db
			->where('status', 'publish')
			->order_by("STR_TO_DATE(tanggal, '%d:%m:%Y')", 'DESC', FALSE)
			->get('kegiatan')
			->result_array();
		$data = array();

		foreach ($rows as $row) {
			$data[] = $this->map_activity($row);
		}

		return $data;
	}

	private function map_activity($row)
	{
		return array(
			'title' => $row['judul'],
			'slug' => $row['slug'],
			'client' => $row['klien'],
			'category' => $row['kategori'],
			'date' => $row['tanggal'],
			'date_iso' => $this->date_to_iso($row['tanggal']),
			'image' => $this->fallback_upload($row['gambar'], 'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-client.PNG'),
			'excerpt' => $row['ringkasan'],
			'description' => $row['deskripsi'],
		);
	}

	private function date_to_iso($value)
	{
		$date = DateTime::createFromFormat('d:m:Y', (string) $value);
		if ($date !== FALSE) {
			return $date->format('Y-m-d');
		}

		$date = DateTime::createFromFormat('Y-m-d', (string) $value);
		return $date !== FALSE ? $date->format('Y-m-d') : '';
	}

	private function get_hero_images()
	{
		return array(
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-10.png',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-11.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-12.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-13.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO TIM/activity-kantor-14.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO CLIENT/deal-smk-mulu.jpg',
			'img_pyramid/ASSET WEB PROFILE/FOTO CLIENT/kasir-abylal-grosir.jpg',
			'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-with-client.PNG',
			'img_pyramid/ASSET WEB PROFILE/BERSAMA MEREKA/diskusi-session-smkmulu.PNG',
		);
	}

	private function get_tech_groups()
	{
		return array(
			array('title' => 'Mobile Development', 'description' => 'Capai pengguna melalui perangkat favorit mereka.', 'folder' => 'tech_mobile_dev', 'total' => 5),
			array('title' => 'Web Development', 'description' => 'Bangun produk digital dan integrasikan proses bisnis di web.', 'folder' => 'tech_web_dev', 'total' => 10),
			array('title' => 'Cloud Development', 'description' => 'Percepat transformasi digital dengan solusi berbasis cloud.', 'folder' => 'tech_cloud_dev', 'total' => 4),
			array('title' => 'Payment Integration', 'description' => 'Dukung efisiensi transaksi keuangan bisnis.', 'folder' => 'tech_payment', 'total' => 3),
		);
	}

	private function fallback_upload($path, $fallback)
	{
		if (!empty($path) && file_exists(FCPATH . $path)) {
			return $path;
		}

		return $fallback;
	}
}

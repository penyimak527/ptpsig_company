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

		return $this->map_activity($row);
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
			'established' => 'Tahun berdiri menunggu data resmi',
			'service_url' => 'https://jasawebsitemurah.net/',
		);
	}

	private function get_menus()
	{
		return array(
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
			return array(
				array('name' => 'Nama Tim', 'position' => 'Founder / Director', 'image' => 'images/team-1.jpg', 'bio' => 'Profil tim akan disesuaikan.'),
				array('name' => 'Nama Tim', 'position' => 'Project Manager', 'image' => 'images/team-2.jpg', 'bio' => 'Profil tim akan disesuaikan.'),
				array('name' => 'Nama Tim', 'position' => 'Developer', 'image' => 'images/team-3.jpg', 'bio' => 'Profil tim akan disesuaikan.'),
			);
		}

		$data = array();
		foreach ($rows as $row) {
			$data[] = array(
				'name' => $row['nama'],
				'position' => $row['jabatan'],
				'image' => $this->fallback_upload($row['foto'], 'images/team-1.jpg'),
				'bio' => $row['bio'],
				'instagram' => $row['instagram'],
				'linkedin' => $row['linkedin'],
			);
		}

		return $data;
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
		$rows = $this->db
			->where('status', 'aktif')
			->order_by('urutan', 'ASC')
			->get('visi_misi')
			->result_array();
		$data = array('visi' => array('title' => 'Visi Perusahaan', 'description' => 'Menjadi partner digital terpercaya.'), 'misi' => array());

		foreach ($rows as $row) {
			if ($row['tipe'] === 'visi') {
				$data['visi'] = array('title' => $row['judul'], 'description' => $row['deskripsi']);
			} else {
				$data['misi'][] = array('title' => $row['judul'], 'description' => $row['deskripsi']);
			}
		}

		return $data;
	}

	private function get_struktur_data()
	{
		$rows = $this->db
			->where('status', 'aktif')
			->order_by('urutan', 'ASC')
			->get('struktur_organisasi')
			->result_array();
		$data = array();

		foreach ($rows as $row) {
			$data[] = array(
				'name' => $row['nama'],
				'position' => $row['jabatan'],
				'division' => $row['divisi'],
				'image' => $this->fallback_upload($row['foto'], 'images/team-1.jpg'),
				'description' => $row['deskripsi'],
			);
		}

		return $data;
	}

	private function get_sejarah_data()
	{
		$rows = $this->db
			->where('status', 'aktif')
			->order_by('urutan', 'ASC')
			->get('sejarah')
			->result_array();
		$data = array();

		foreach ($rows as $row) {
			$data[] = array(
				'year' => $row['tahun'],
				'title' => $row['judul'],
				'image' => $this->fallback_upload($row['gambar'], 'images/about-thumb-1.jpg'),
				'description' => $row['deskripsi'],
			);
		}

		return $data;
	}

	private function get_activity_data()
	{
		$rows = $this->db
			->where('status', 'publish')
			->order_by('tanggal', 'DESC')
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
			'image' => $this->fallback_upload($row['gambar'], 'images/blog-1.jpg'),
			'excerpt' => $row['ringkasan'],
			'description' => $row['deskripsi'],
		);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
	public function get_home_data()
	{
		return array(
			'title' => 'Piramidsoft - Company Profile',
			'company' => array(
				'name' => 'Piramidsoft',
				'email' => 'info@piramidsoft.com',
				'phone' => 'Nomor resmi menyusul',
				'address' => 'Alamat kantor menyusul',
				'established' => 'Tahun berdiri menyusul',
				'service_url' => '#kontak',
			),
			'menus' => array(
				array('label' => 'Beranda', 'url' => '#beranda'),
				array('label' => 'Tentang', 'url' => '#tentang'),
				array('label' => 'Layanan', 'url' => '#layanan'),
				array('label' => 'Legalitas', 'url' => '#legalitas'),
				array('label' => 'Tim', 'url' => '#tim'),
				array('label' => 'Kontak', 'url' => '#kontak'),
			),
			'services' => array(
				array(
					'title' => 'Website Development',
					'image' => 'service-1.jpg',
					'icon' => 'service-icon-1.png',
					'description' => 'Company profile, landing page, katalog, portal informasi, dan website marketing.',
				),
				array(
					'title' => 'Aplikasi Custom',
					'image' => 'service-2.jpg',
					'icon' => 'service-icon-2.png',
					'description' => 'Sistem operasional berbasis web/mobile untuk kebutuhan proses bisnis khusus.',
				),
				array(
					'title' => 'Integrasi & Maintenance',
					'image' => 'service-3.jpg',
					'icon' => 'service-icon-3.png',
					'description' => 'Pengembangan lanjutan, perawatan sistem, optimasi fitur, dan integrasi platform.',
				),
			),
			'teams' => array(
				array('name' => 'Nama Tim', 'position' => 'Founder / Director', 'image' => 'team-1.jpg'),
				array('name' => 'Nama Tim', 'position' => 'Project Manager', 'image' => 'team-2.jpg'),
				array('name' => 'Nama Tim', 'position' => 'Developer', 'image' => 'team-3.jpg'),
			),
			'brands' => array(
				'brand-logo.png',
				'brand-logo.png',
				'brand-logo.png',
				'brand-logo.png',
				'brand-logo.png',
				'brand-logo.png',
			),
		);
	}
}

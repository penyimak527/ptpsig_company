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
		);
	}
}

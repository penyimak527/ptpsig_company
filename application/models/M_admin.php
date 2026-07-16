<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function get_dashboard_stats()
	{
		return array(
			array('label' => 'Kegiatan', 'count' => count($this->get_kegiatan()), 'icon' => 'fa-calendar-alt', 'color' => 'primary'),
			array('label' => 'Struktur', 'count' => count($this->get_struktur_organisasi()), 'icon' => 'fa-sitemap', 'color' => 'success'),
			array('label' => 'Visi Misi', 'count' => count($this->get_visi_misi()), 'icon' => 'fa-bullseye', 'color' => 'info'),
			array('label' => 'Team', 'count' => count($this->get_team()), 'icon' => 'fa-users', 'color' => 'warning'),
		);
	}

	public function get_kegiatan()
	{
		return array(
			array('judul' => 'Diskusi Kebutuhan Website Profile', 'klien' => 'Klien UMKM', 'kategori' => 'Konsultasi Digital', 'tanggal' => '2026-07-01', 'status' => 'publish'),
			array('judul' => 'Koordinasi Pengembangan Sistem', 'klien' => 'Klien Operasional', 'kategori' => 'Pengembangan Kustom', 'tanggal' => '2026-07-08', 'status' => 'publish'),
			array('judul' => 'Pendampingan Maintenance Website', 'klien' => 'Brand Partner', 'kategori' => 'Maintenance', 'tanggal' => '2026-07-12', 'status' => 'publish'),
		);
	}

	public function get_struktur_organisasi()
	{
		return array(
			array('nama' => 'Nama Direktur', 'jabatan' => 'Direktur / Founder', 'divisi' => 'Leadership', 'status' => 'aktif'),
			array('nama' => 'Nama Project Manager', 'jabatan' => 'Project Manager', 'divisi' => 'Management', 'status' => 'aktif'),
			array('nama' => 'Nama Developer', 'jabatan' => 'Developer Team', 'divisi' => 'Development', 'status' => 'aktif'),
			array('nama' => 'Nama Support', 'jabatan' => 'Support & Maintenance', 'divisi' => 'Support', 'status' => 'aktif'),
		);
	}

	public function get_visi_misi()
	{
		return array(
			array('tipe' => 'visi', 'judul' => 'Visi Perusahaan', 'deskripsi' => 'Menjadi partner digital terpercaya.', 'status' => 'aktif'),
			array('tipe' => 'misi', 'judul' => 'Solusi Tepat Guna', 'deskripsi' => 'Menghadirkan solusi digital sesuai kebutuhan.', 'status' => 'aktif'),
			array('tipe' => 'misi', 'judul' => 'Pendampingan Profesional', 'deskripsi' => 'Memberikan arahan, pengembangan, dan pemeliharaan.', 'status' => 'aktif'),
		);
	}

	public function get_sejarah()
	{
		return array(
			array('tahun' => 'Awal Berdiri', 'judul' => 'Piramidsoft Mulai Dibangun', 'status' => 'aktif'),
			array('tahun' => 'Pengembangan Layanan', 'judul' => 'Fokus pada Solusi Digital', 'status' => 'aktif'),
			array('tahun' => 'Saat Ini', 'judul' => 'Mitra Teknologi Bisnis', 'status' => 'aktif'),
		);
	}

	public function get_team()
	{
		return array(
			array('nama' => 'Nama Tim', 'jabatan' => 'Founder / Director', 'status' => 'aktif'),
			array('nama' => 'Nama Tim', 'jabatan' => 'Project Manager', 'status' => 'aktif'),
			array('nama' => 'Nama Tim', 'jabatan' => 'Developer', 'status' => 'aktif'),
		);
	}
}

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
			'teams' => $this->get_team_data(),
			'visi_misi' => $this->get_visi_misi_data(),
			'struktur_organisasi' => $this->get_struktur_data(),
			'sejarah' => $this->get_sejarah_data(),
			'activities' => $this->get_activity_data(),
		);
	}

	public function get_activity_by_slug($slug)
	{
		$row = $this->activity_query()
			->where('slug', $slug)
			->where('status', 'publish')
			->get()
			->row_array();

		if (empty($row)) {
			return NULL;
		}

		$row['sections'] = $this->db
			->where('id_kegiatan', $row['id_kegiatan'])
			->order_by('urutan', 'ASC')
			->order_by('id_bagian', 'ASC')
			->get('kegiatan_bagian')
			->result_array();

		return $row;
	}

	private function get_team_data()
	{
		return $this->db
			->select('nama AS name, jabatan AS position, foto AS image, bio, instagram, linkedin')
			->where('status', 'aktif')
			->order_by('urutan', 'ASC')
			->get('team')
			->result_array();
	}

	private function get_visi_misi_data()
	{
		return $this->db
			->where('status', 'aktif')
			->order_by('id_visi_misi', 'DESC')
			->get('visi_misi')
			->row_array();
	}

	private function get_struktur_data()
	{
		return $this->db
			->where('status', 'aktif')
			->where('foto IS NOT NULL', NULL, FALSE)
			->where('foto !=', '')
			->order_by('id_struktur', 'DESC')
			->get('struktur_organisasi')
			->row_array();
	}

	private function get_sejarah_data()
	{
		return $this->db
			->where('status', 'aktif')
			->order_by('id_sejarah', 'DESC')
			->get('sejarah')
			->row_array();
	}

	private function get_activity_data()
	{
		return $this->activity_query()
			->where('status', 'publish')
			->order_by("STR_TO_DATE(tanggal, '%d:%m:%Y')", 'DESC', FALSE)
			->get()
			->result_array();
	}

	private function activity_query()
	{
		return $this->db
			->select("id_kegiatan, judul AS title, slug, klien AS client, kategori AS category, layanan AS service, brand, label_detail AS detail_label, tanggal AS date, DATE_FORMAT(STR_TO_DATE(tanggal, '%d:%m:%Y'), '%Y-%m-%d') AS date_iso, gambar AS image, ringkasan AS excerpt, deskripsi AS description", FALSE)
			->from('kegiatan');
	}
}

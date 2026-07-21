<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kegiatan extends CI_Model
{
	public function result()
	{
		$search = trim((string) $this->input->post('search'));
		if ($search !== '') {
			$this->db->group_start()
				->like('judul', $search)
				->or_like('klien', $search)
				->or_like('kategori', $search)
				->group_end();
		}
		return $this->db->order_by("STR_TO_DATE(tanggal, '%d:%m:%Y')", 'DESC', FALSE)->order_by('id_kegiatan', 'DESC')->get('kegiatan')->result_array();
	}

	public function get($id)
	{
		return $this->db->get_where('kegiatan', array('id_kegiatan' => $id))->row_array();
	}

	public function get_bagian($id_kegiatan)
	{
		return $this->db
			->where('id_kegiatan', $id_kegiatan)
			->order_by('urutan', 'ASC')
			->order_by('id_bagian', 'ASC')
			->get('kegiatan_bagian')
			->result_array();
	}

	public function slug_exists($slug, $except_id = NULL)
	{
		$this->db->where('slug', $slug);
		if ($except_id !== NULL) {
			$this->db->where('id_kegiatan !=', $except_id);
		}
		return $this->db->count_all_results('kegiatan') > 0;
	}

	public function tambah_dengan_bagian($data, $bagian)
	{
		$this->db->trans_start();
		$this->db->insert('kegiatan', $data);
		$id = $this->db->insert_id();
		$this->insert_bagian($id, $bagian);
		$this->db->trans_complete();

		return $this->db->trans_status() ? $id : FALSE;
	}

	public function edit_dengan_bagian($id, $data, $bagian)
	{
		$this->db->trans_start();
		$this->db->where('id_kegiatan', $id)->update('kegiatan', $data);
		$this->db->where('id_kegiatan', $id)->delete('kegiatan_bagian');
		$this->insert_bagian($id, $bagian);
		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function hapus($id)
	{
		$this->db->trans_start();
		$this->db->where('id_kegiatan', $id)->delete('kegiatan_bagian');
		$this->db->where('id_kegiatan', $id)->delete('kegiatan');
		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	private function insert_bagian($id_kegiatan, $bagian)
	{
		foreach ($bagian as $row) {
			$row['id_kegiatan'] = $id_kegiatan;
			$this->db->insert('kegiatan_bagian', $row);
		}
	}
}

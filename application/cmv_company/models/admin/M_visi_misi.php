<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visi_misi extends CI_Model
{
	public function result()
	{
		$search = trim((string) $this->input->post('search'));
		if ($search !== '') {
			$this->db->group_start()->like('visi', $search)->or_like('misi', $search)->group_end();
		}
		return $this->db->order_by('id_visi_misi', 'DESC')->get('visi_misi')->result_array();
	}

	public function get($id)
	{
		return $this->db->get_where('visi_misi', array('id_visi_misi' => $id))->row_array();
	}

	public function count_all()
	{
		return (int) $this->db->count_all('visi_misi');
	}

	public function tambah($data)
	{
		$this->db->insert('visi_misi', $data);
		return $this->db->insert_id();
	}

	public function edit($id, $data)
	{
		return $this->db->where('id_visi_misi', $id)->update('visi_misi', $data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_visi_misi', $id)->delete('visi_misi');
	}
}

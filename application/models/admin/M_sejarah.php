<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sejarah extends CI_Model
{
	public function result()
	{
		$search = trim((string) $this->input->post('search'));
		if ($search !== '') {
			$this->db->group_start()->like('judul', $search)->or_like('konten', $search)->group_end();
		}
		return $this->db->order_by('id_sejarah', 'DESC')->get('sejarah')->result_array();
	}

	public function get($id)
	{
		return $this->db->get_where('sejarah', array('id_sejarah' => $id))->row_array();
	}

	public function count_all()
	{
		return (int) $this->db->count_all('sejarah');
	}

	public function tambah($data)
	{
		$this->db->insert('sejarah', $data);
		return $this->db->insert_id();
	}

	public function edit($id, $data)
	{
		return $this->db->where('id_sejarah', $id)->update('sejarah', $data);
	}

	public function hapus($id)
	{
		return $this->db->where('id_sejarah', $id)->delete('sejarah');
	}
}

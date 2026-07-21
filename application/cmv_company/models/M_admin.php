<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function count_table($table, $where = array())
	{
		if (!empty($where)) {
			$this->db->where($where);
		}

		return (int) $this->db->count_all_results($table);
	}

	public function get_all($table, $order_by = NULL, $direction = 'ASC')
	{
		if ($order_by !== NULL) {
			$this->db->order_by($order_by, $direction);
		}

		return $this->db->get($table)->result_array();
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where)->row_array();
	}

	public function insert($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function update($table, $primary_key, $id, $data)
	{
		$this->db->where($primary_key, $id);
		return $this->db->update($table, $data);
	}

	public function delete($table, $primary_key, $id)
	{
		$this->db->where($primary_key, $id);
		return $this->db->delete($table);
	}

	public function get_dashboard_stats()
	{
		return array(
			array('label' => 'Kegiatan', 'count' => $this->count_table('kegiatan'), 'icon' => 'fa-calendar-alt', 'color' => 'primary'),
			array('label' => 'Visi Misi', 'count' => $this->count_table('visi_misi'), 'icon' => 'fa-bullseye', 'color' => 'info'),
			array('label' => 'Team', 'count' => $this->count_table('team'), 'icon' => 'fa-users', 'color' => 'warning'),
		);
	}

	public function get_kegiatan()
	{
		return $this->get_all('kegiatan', 'id_kegiatan', 'DESC');
	}

	public function get_struktur_organisasi()
	{
		return $this->get_all('struktur_organisasi', 'urutan', 'ASC');
	}

	public function get_visi_misi()
	{
		return $this->get_all('visi_misi', 'id_visi_misi', 'DESC');
	}

	public function get_sejarah()
	{
		return $this->get_all('sejarah', 'id_sejarah', 'DESC');
	}

	public function get_team()
	{
		return $this->get_all('team', 'urutan', 'ASC');
	}

	public function get_admin()
	{
		return $this->get_all('admin', 'id_admin', 'DESC');
	}
}

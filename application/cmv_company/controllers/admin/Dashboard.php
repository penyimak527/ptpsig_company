<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Dashboard extends Admin_base
{
	public function index()
	{
		$data = $this->prepare_data('Dashboard Admin', 'dashboard');
		$data['stats'] = $this->admin->get_dashboard_stats();
		$data['recent_kegiatan'] = $this->admin->get_kegiatan();
		$this->render('admin/dashboard/index', $data);
	}
}

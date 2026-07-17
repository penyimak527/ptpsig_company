<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_base extends CI_Controller
{
	protected $crud = array();

	public function __construct()
	{
		parent::__construct();
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
		if (empty($_SESSION['admin_logged_in'])) {
			redirect('admin/login');
		}
		$this->load->helper(array('url', 'form'));
		$this->load->library('upload');
		$this->load->model('M_admin', 'admin');
	}

	protected function prepare_data($title, $active_menu)
	{
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

		return array(
			'title' => $title,
			'active_menu' => $active_menu,
			'admin_asset_path' => ($base_path === '' ? '' : $base_path) . '/asstes_admin',
			'admin_name' => isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'Administrator',
		);
	}

	protected function render($view, $data)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/topbar', $data);
		$this->load->view($view, $data);
		$this->load->view('admin/template/footer', $data);
	}

	protected function render_crud($view, $title, $active_menu, $page_label, $page_description)
	{
		$data = $this->prepare_data($title, $active_menu);
		$data['page_label'] = $page_label;
		$data['page_description'] = $page_description;
		$data['crud'] = $this->crud;
		$data['crud_url'] = site_url('admin/' . $this->router->fetch_class());
		$this->render($view, $data);
	}

	protected function ajax_list_response()
	{
		$rows = $this->admin->get_all($this->crud['table'], $this->crud['order_by'], $this->crud['order_dir']);
		$this->json(array('status' => TRUE, 'data' => $rows));
	}

	protected function ajax_get_response($id)
	{
		$row = $this->admin->get_where($this->crud['table'], array($this->crud['primary_key'] => $id));
		$this->json(array('status' => !empty($row), 'data' => $row));
	}

	protected function ajax_save_response()
	{
		$id = $this->input->post($this->crud['primary_key']);
		$data = array();

		foreach ($this->crud['fields'] as $field) {
			if ($this->input->post($field) !== NULL) {
				$data[$field] = $this->input->post($field);
			}
		}

		if (!empty($this->crud['slug_field']) && empty($data[$this->crud['slug_field']])) {
			$data[$this->crud['slug_field']] = $this->make_slug($data[$this->crud['title_field']]);
		}

		if (!empty($this->crud['password_field']) && !empty($data[$this->crud['password_field']])) {
			$data[$this->crud['password_field']] = password_hash($data[$this->crud['password_field']], PASSWORD_BCRYPT);
		} elseif (!empty($this->crud['password_field'])) {
			unset($data[$this->crud['password_field']]);
		}

		if (!empty($this->crud['file_field']) && isset($_FILES[$this->crud['file_field']]) && $_FILES[$this->crud['file_field']]['name'] !== '') {
			$upload_path = FCPATH . $this->crud['upload_path'];
			if (!is_dir($upload_path)) {
				mkdir($upload_path, 0777, TRUE);
			}

			$config = array(
				'upload_path' => $upload_path,
				'allowed_types' => 'jpg|jpeg|png|webp',
				'max_size' => 4096,
				'encrypt_name' => TRUE,
			);

			$this->upload->initialize($config);

			if (!$this->upload->do_upload($this->crud['file_field'])) {
				$this->json(array('status' => FALSE, 'message' => strip_tags($this->upload->display_errors())));
				return;
			}

			$upload = $this->upload->data();
			$data[$this->crud['file_field']] = $this->crud['upload_path'] . '/' . $upload['file_name'];
		}

		if (empty($id)) {
			$data['created_at'] = date('Y-m-d H:i:s');
			$saved_id = $this->admin->insert($this->crud['table'], $data);
		} else {
			$data['updated_at'] = date('Y-m-d H:i:s');
			$this->admin->update($this->crud['table'], $this->crud['primary_key'], $id, $data);
			$saved_id = $id;
		}

		$this->json(array('status' => TRUE, 'id' => $saved_id));
	}

	protected function ajax_delete_response($id)
	{
		$this->admin->delete($this->crud['table'], $this->crud['primary_key'], $id);
		$this->json(array('status' => TRUE));
	}

	protected function json($data)
	{
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data));
	}

	protected function make_slug($text)
	{
		$text = strtolower(trim($text));
		$text = preg_replace('/[^a-z0-9]+/i', '-', $text);
		$text = trim($text, '-');

		return $text === '' ? date('YmdHis') : $text;
	}
}

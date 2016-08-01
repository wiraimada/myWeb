<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
class Artikel extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/artikel_model');
	}

	public function index() {
		$query = $this->artikel_model->daftar_artikel();
		$data = array('title' 	=> 'Content Management System - TUTORIAL-IT',
					'artikel'	=> $query,
					'isi' 		=> 'admin/artikel/artikel_view');
		$this->load->view('admin/layout/wrapper', $data);
	}
}
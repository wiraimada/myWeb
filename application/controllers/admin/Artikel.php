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
	
		// Kode untuk menambah artikel
	public function tambah() {
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('ringkasan','Ringkasan','required');
		$this->form_validation->set_rules('isi','Isi artikel','required');

		if ($this->form_validation->run() === FALSE) {
			$data = array('title' 	=> 'Menambah Artikel - TUTORIAL-IT',
							'isi'	=> 'admin/artikel/tambah_artikel'
							);
			$this->load->view('admin/layout/wrapper', $data);
		} else {
			$slug = url_title($this->input->post('judul'), 'dash', TRUE);
			$data = array (
				'judul' 			=> $this->input->post('judul'),
				'slug' 				=> $slug,
				'ringkasan'			=> $this->input->post('ringkasan'),
				'isi'				=> $this->input->post('isi'),
				'status_artikel'	=> $this->input->post('status_artikel'),
				'id_user'			=> $this->input->post('id_user')
				);
			$this->artikel_model->tambah($data);
			redirect(base_url().'admin/artikel/');
			}
		}
}
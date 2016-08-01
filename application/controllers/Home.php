<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Home extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('artikel_model');// Berfungsi untuk me-load Artikel_model.php
	}
	
	public function index() {
	$data = array('title'=>'Tutorial Code Igniter - TUTORIAL-IT',
	'artikel' => $this->artikel_model->daftar_artikel(),
	'isi' => 'home/index_home'
	);
	$this->load->view('layout/wrapper', $data);
	}
	
	// Fungsi untuk membaca artikel
	public function Read($read) {
		$data['artikel'] 	= $this->artikel_model->daftar_artikel();
		$data['detail'] 	= $this->artikel_model->daftar_artikel($read);
		$data = array('title' => $data['detail']['judul'],
				'artikel' 	=> $this->artikel_model->daftar_artikel(),
				'detail'	=> $this->artikel_model->daftar_artikel($read),
				'isi'		=> 'home/read_view'
				);
		$this->load->view('layout/wrapper', $data);
	}
}
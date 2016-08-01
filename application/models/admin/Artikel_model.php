<?php
class Artikel_model extends CI_Model {
	public function __construct() {
		$this->load->database(); // Untuk memanggil database
	}

	// Kode untuk menampilkan artikel
	public function daftar_artikel() {
		$query = $this->db->query(
			'SELECT artikel.judul, artikel.status_artikel, artikel.slug, 
			artikel.id_artikel, artikel.tanggal, users.nama 
			FROM artikel, users WHERE artikel.id_user = users.id_user 
			ORDER BY id_artikel DESC');
	return $query->result_array();
	}
}
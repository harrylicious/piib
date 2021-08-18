<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta_gld extends CI_Model {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 
	
    //add peserta gld
	function add_peserta_gld($data){
		$tbl=$this->m_config->tbl_peserta_gld();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update peserta gld
	function update_peserta_gld($id_peserta_gld, $data){
		$tbl=$this->m_config->tbl_peserta_gld();
		$id=$this->m_config->id_peserta_gld();
		$this->db->where($id, $id_peserta_gld);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete peserta_gld permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_peserta_gld($id_peserta_gld){
		$tbl=$this->m_config->tbl_peserta_gld();
		$id=$this->m_config->id_peserta_gld();
		$this->db->where($id, $id_peserta_gld);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

 	// delete peserta_gld tanpa menghapus data fisik
 	// hapus data dari client-side saja 
	function delete_peserta_gld(($id_peserta_gld){
		$tbl=$this->m_config->tbl_peserta_gld();
		$id=$this->m_config->id_peserta_gld();
		$this->db->set('status', 1);
		$this->db->where($id, $id_peserta_gld);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// mengembalika data yang terhapus status = 0 
	function restore_peserta_gld($id_peserta_gld){
		$tbl=$this->m_config->tbl_peserta_gld();
		$id=$this->m_config->id_peserta_gld();
		$this->db->set('status', 0);
		$this->db->where($id, $id_peserta_gld);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	function get_all_detail(){
		$tbl=$this->m_config->tbl_peserta_gld();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table peserta_gld dengan status 0 (ada)
	function get_all_peserta_gld() {
		$tbl=$this->m_config->tbl_peserta_gld();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

	// menampilkan semua data id_gld pada table berdasarkan level
	function get_level_peserta_gld($level) {
		$tbl=$this->m_config->tbl_peserta_gld();
		$this->db->where('level', $level);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


	// menampilkan semua data pada table id_gld dengan status 0 (ada) dengan level admin
	function get_level_client($level) {
		$tbl=$this->m_config->tbl_peserta_gld();
		$this->db->where('status', 0);
		$this->db->where('level', $level);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_peserta_gld */

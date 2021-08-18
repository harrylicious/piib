<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta_startup_academy extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

 //add startup
	function add_peserta_startup_academy($data){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update startup
	function update_peserta_startup_academy($id_sah, $data){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$id=$this->m_config->id_sah();
		$this->db->where($id, $id_sah);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete peserta_startup_academy permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_peserta_startup_academy($id_sah){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$id=$this->m_config->id_sah();
		$this->db->where($id, $id_sah);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete peserta_startup_academy tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_peserta_startup_academy($id_sah){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$id=$this->m_config->id_sah();
		$this->db->set('status', 1);
		$this->db->where($id, $id_sah);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	 // mengembalika data yang terhapus status = 0 
	function restore_peserta_startup_academy($id_sah){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$id=$this->m_config->id_sah();
		$this->db->set('status', 0);
		$this->db->where($id, $id_sah);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	function get_all_detail(){
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table peserta_startup_academy dengan status 0 (ada)
	function get_all_peserta_startup_academy() {
		$tbl=$this->m_config->tbl_peserta_startup_academy();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

} /*close tag of Class M_peserta_startup_academy */         
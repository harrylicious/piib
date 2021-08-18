<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_minat extends CI_Model {
	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 
	
 //add minat
	function add_minat($$data){
		$tbl=$this->m_config->tbl_minat();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update minat
	function update_minat($id_minat, $data){
		$tbl=$this->m_config->tbl_minat();
		$id=$this->m_config->id_minat();
		$this->db->where($id, $id_minat);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete minat permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_minat($id_minat){
		$tbl=$this->m_config->tbl_minat();
		$id=$this->m_config->id_minat();
		$this->db->where($id, $id_minat);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete minat tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_minat$id_minat){
	$tbl=$this->m_config->tbl_minat();
	$id=$this->m_config->id_minat();
	$this->db->set('status', 1);
	$this->db->where($id, $id_minat);
	$hsl=$this->db->update($tbl);
	return $hsl;
}

function get_all_detail_minat(){
	$tbl=$this->m_config->tbl_minat();
	$hsl=$this->db->get($tbl);
	return $hsl;
}

   // menampilkan semua data pada table minat dengan status 0 (ada)
function get_all_minat() {
	$tbl=$this->m_config->tbl_minat();
	$this->db->where('status', 0);
	$hsl=$this->db->get($tbl);
	return $hsl;
}


} /*close tag of Class M_minat */         
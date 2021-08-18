<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absensi_perkuliahan_mentoring extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

 //add update_absensi_perkuliahan_mentoring
	function add_absensi_perkuliahan_mentoring($data){
		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update update_absensi_perkuliahan_mentoring
	function update_absensi_perkuliahan_mentoring($id_absensi_perkuliahan_mentoring, $data){
		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$id=$this->m_config->id_absensi_perkuliahan_mentoring();
		$this->db->where($id, $id_absensi_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete absensi_perkuliahan_mentoring permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_absensi_perkuliahan_mentoring($id_absensi_perkuliahan_mentoring){

		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$id=$this->m_config->id_absensi_perkuliahan_mentoring();
		$this->db->where($id, $id_absensi_perkuliahan_mentoring);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete absensi_perkuliahan_mentoring tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_absensi_perkuliahan_mentoring($id_absensi_perkuliahan_mentoring){

		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$id=$this->m_config->id_absensi_perkuliahan_mentoring();
		$this->db->set('status', 1);
		$this->db->where($id, $id_absensi_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// mengembalika data yang terhapus status = 0 
	function restore_absensi_perkuliahan_mentoring($id_absensi_perkuliahan_mentoring){

		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$id=$this->m_config->id_absensi_perkuliahan_mentoring();
		$this->db->set('status', 0);
		$this->db->where($id, $id_absensi_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}


	function get_all_absensi_perkuliahan_mentoring(){
		
		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$hsl=$this->db->get($tbl);
		return $hsl;
		
	}

   // menampilkan semua data pada table absensi_perkuliahan_mentoring dengan status 0 (ada)
	function get_all_absensi_perkuliahan_mentoring_client(){
		
		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;

	}

   // menampilkan semua data pada table absensi_perkuliahan_mentoring dengan status 0 (ada) dengan kategori

	function get_absensi_perkuliahan_mentoring($kategori){
		$tbl=$this->m_config->tbl_absensi_perkuliahan_mentoring();
		$this->db->where('kategori', $kategori);
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_absensi_perkuliahan_mentoring */         
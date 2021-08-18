<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_riwayat_perkuliahan_mentoring extends CI_Model {
	
	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 
	

 //add update_riwayat_perkuliahan_mentoring
	function add_riwayat_perkuliahan_mentoring($data){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update update_riwayat_perkuliahan_mentoring
	function update_riwayat_perkuliahan_mentoring($id_riwayat_perkuliahan_mentoring, $data){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$id=$this->m_config->id_riwayat_perkuliahan_mentoring();
		$this->db->where($id, $id_riwayat_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete riwayat_perkuliahan_mentoring permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_P_riwayat_perkuliahan_mentoring($id_riwayat_perkuliahan_mentoring){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$id=$this->m_config->id_riwayat_perkuliahan_mentoring();
		$this->db->where($id, $id_riwayat_perkuliahan_mentoring);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete riwayat_perkuliahan_mentoring tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_riwayat_perkuliahan_mentoring($id_riwayat_perkuliahan_mentoring){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$id=$this->m_config->id_riwayat_perkuliahan_mentoring();
		$this->db->set('status', 1);
		$this->db->where($id, $id_riwayat_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}


	function restore_riwayat_perkuliahan_mentoring($id_riwayat_perkuliahan_mentoring){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$id=$this->m_config->id_riwayat_perkuliahan_mentoring();
		$this->db->set('status', 0);
		$this->db->where($id, $id_riwayat_perkuliahan_mentoring);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}


   // menampilkan semua data pada table riwayat_perkuliahan_mentoring dengan status 0 (ada)
	function get_all_riwayat_perkuliahan_mentoring() {
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

    // menampilkan semua data riwayat_perkuliahan_mentoring pada table berdasarkan jenis kelamin
	function get_riwayat_perkuliahan_mentoring($kategori)
	{
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$this->db->where('kategori', $kategori);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}



    // menampilkan semua data pada table riwayat_perkuliahan_mentoring dengan status 0 (ada) dengan kategori
	function get_kategori_client($kategori){
		$tbl=$this->m_config->tbl_riwayat_perkuliahan_mentoring();
		$this->db->where('status', 0);
		$this->db->where('kategori', $kategori);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_riwayat_perkuliahan_mentoring */         
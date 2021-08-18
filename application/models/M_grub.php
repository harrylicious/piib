<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grub extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

// for table grub

 //add grub
	function add_grub($data){
		$tbl=$this->m_config->tbl_grub();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update grub
	function update_grub($id_grub, $data){
		$tbl=$this->m_config->tbl_grub();
		$id=$this->m_config->id_grub();
		$this->db->where($id, $id_grub);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete grub permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_grub($id_grub){
		$tbl=$this->m_config->tbl_grub();
		$id=$this->m_config->id_grub();
		$this->db->where($id, $id_grub);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete grub tanpa menghapus data fisik
    // hapus data dari client-side saja = 1
	function delete_grub($id_grub){
		$tbl=$this->m_config->tbl_grub();
		$id=$this->m_config->id_grub();
		$this->db->set('status', 1);
		$this->db->where($id, $id_grub);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// mengembalika data yang terhapus status = 0 
	function restore_grub($id_grub){
		$tbl=$this->m_config->tbl_grub();
		$id=$this->m_config->id_grub();
		$this->db->set('status', 0);
		$this->db->where($id, $id_grub);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table grub dengan status 0 (ada)
	function get_all_grub() {
		$tbl=$this->m_config->tbl_grub();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

     // menampilkan semua data pada table grub dengan status 0 (ada)
	function get_all_client() {
		$tbl=$this->m_config->tbl_grub();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

    // menampilkan semua data pada table grub dengan status 0 (ada) dengan mentor
	function get_mentor_client($mentor){
		$tbl=$this->m_config->tbl_grub();
		$this->db->where('mentor', $mentor);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

//=====================================
//for table detail grub

//add detail_grub
	function add_detail_grub($$data){
		$tbl=$this->m_config->tbl_detail_grub();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update detail_grub
	function update_detail_grub($id_detail_grub, $data){
		$tbl=$this->m_config->tbl_detail_grub();
		$id=$this->m_config->id_detail_grub();
		$this->db->where($id, $id_detail_grub);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete detail_grub permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_detail_grub($id_detail_grub){
		
		$tbl=$this->m_config->tbl_detail_grub();
		$id=$this->m_config->id_detail_grub();
		$this->db->where($id, $id_detail_grub);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete detail_grub tanpa menghapus data fisik
    // hapus data dari client-side saja = 1
	function delete_detail_grub($id_detail_grub){
		$tbl=$this->m_config->tbl_detail_grub();
		$id=$this->m_config->id_detail_grub();
		$this->db->set('status', 1);
		$this->db->where($id, $id_detail_grub);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// mengembalika data yang terhapus status = 0 
	function restore_detail_grub($id_detail_grub){
		$tbl=$this->m_config->tbl_detail_grub();
		$id=$this->m_config->id_detail_grub();
		$this->db->set('status', 0);
		$this->db->where($id, $id_detail_grub);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table detail_grub dengan status 0 (ada)
	function get_all_detai_grub() {
		$tbl=$this->m_config->tbl_detail_grub();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

 // menampilkan semua data pada table detail_grub dengan status 0 (ada) dengan mentor
	function get_anggota_client($mentor) {
		$tbl=$this->m_config->tbl_detail_grub();
		$this->db->where('mentor', $mentor);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_grub */         
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

	// ambil semua data event dengan status 0
	function get_all() {
		$tbl=$this->m_config->tbl_event();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

	// ambil semua data event dengan status 0 dan berdasarkan id_event 
	function get_event($id_event) {
		$tbl=$this->m_config->tbl_event();
		$id=$this->m_config->id_event();
		$this->db->where('status', 0);
		$this->db->where($id, $id_event);
		$hsl=$this->db->get($tbl, 1); // table dan limit 
		return $hsl;
	}

 //add event
	function add_event($data){
		$tbl=$this->m_config->tbl_event();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update event
	function update_event($id_event, $data){
		$tbl=$this->m_config->tbl_event();
		$id=$this->m_config->id_event();
		$this->db->where($id, $id_event);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete event permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_event($id_event){

		$tbl=$this->m_config->tbl_event();
		$id=$this->m_config->id_event();
		$this->db->where($id, $id_event);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete event tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_event($id_event){

		$tbl=$this->m_config->tbl_event();
		$id=$this->m_config->id_event();
		$this->db->set('status', 1);
		$this->db->where($id, $id_event);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

		// mengembalika data yang terhapus status = 0 
	function restore_event($id_event){

		$tbl=$this->m_config->tbl_event();
		$id=$this->m_config->id_event();
		$this->db->set('status', 0);
		$this->db->where($id, $id_event);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table event dengan status 0 (ada)
	function get_all_event() {
		$tbl=$this->m_config->tbl_event();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

    // menampilkan semua data event pada table berdasarkan scope
	function get_scope_event($scope) {
		
		$tbl=$this->m_config->tbl_event();
		$this->db->where('scope', $scope);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


    // menampilkan semua data pada table event dengan status 0 (ada) dengan scope
	function get_scope_client($scope){
		$tbl=$this->m_config->tbl_event();
		$this->db->where('status', 0);
		$this->db->where('scope', $scope);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_event */         
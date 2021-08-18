<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminatan extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

 //add peminatan
	function add_peminatan($data){
		$tbl=$this->m_config->tbl_peminatan();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}

    // update peminatan
	function update_peminatan($id_peminatan, $data){
		$tbl=$this->m_config->tbl_peminatan();
		$id=$this->m_config->id_peminatan();
		$this->db->where($id, $id_peminatan);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete peminatan permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_peminatan($id_peminatan){
		$tbl=$this->m_config->tbl_peminatan();
		$id=$this->m_config->id_peminatan();
		$this->db->where($id, $id_peminatan);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete peminatan tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_peminatan($$id_peminatan){
		$tbl=$this->m_config->tbl_peminatan();
		$id=$this->m_config->id_peminatan();
		$this->db->set('status', 1);
		$this->db->where($id, $id_peminatan);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	function restore_peminatan($id_peminatan){
		$tbl=$this->m_config->tbl_peminatan();
		$id=$this->m_config->id_peminatan();
		$this->db->set('status', 0);
		$this->db->where($id, $id_peminatan);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	function get_all(){
		$tbl=$this->m_config->tbl_peminatan();
		$this->db->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


   // menampilkan semua data pada table peminatan dengan status 0 (ada)
	function get_all_peminatan() {
		$tbl=$this->m_config->tbl_peminatan();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

    // menampilkan semua data peminatan pada table berdasarkan minat
	function get_minat_peminatan($minat) {
		$tbl=$this->m_config->tbl_peminatan();
		$this->db->where('minat', $minat);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


    // menampilkan semua data pada table peminatan dengan status 0 (ada) dengan minat
	function get_minat_client($minat)
	{
		$tbl=$this->m_config->tbl_peminatan();
		$this->db->where('status', 0);
		$this->db->where('minat', $minat);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_peminatan */         
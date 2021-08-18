<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function __construct(){
		parent::__construct();
		/*=== load ===*/
		$this->load->model('m_config');
	} /*ini batas function contruct*/

	// melakukan pengecekan data user
	function check_user($username){
		$tbl=$this->m_config->tbl_user();
		$this->db->where('username', $username);
		$hsl = $this->db->get($tbl)->row_array();
		return $hsl;

	}	


	// melakukan pengecekan data peserta
	function check_peserta($username){
		$tbl=$this->m_config->tbl_peserta();
		$this->db->where('username', $username);
		$hsl = $this->db->get($tbl)->row_array();
		return $hsl;

	}	

	// melakukan pengecekan data peserta


	//daftar tanpa token
	/*	function daftar_user($data){
		$tbl=$this->m_config->tbl_user();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}	*/
	
	//daftar tanpa token
	/*	function daftar_peserta($data){
		$tbl=$this->m_config->tbl_peserta();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}*/

	// user daftar menggunakan token
	function daftar_user($data, $data_token){
		$tbl=$this->m_config->tbl_user();
		$tbl_2=$this->m_config->tbl_verify();
		$this->db->insert($tbl, $data);
		$this->db->insert($tbl_2, $data_token);

	}	

	// peserta daftar menggunakan token
	function daftar_peserta($data, $data_token){
		$tbl=$this->m_config->tbl_peserta();
		$tbl_2=$this->m_config->tbl_verify();
		$this->db->insert($tbl, $data);
		$this->db->insert($tbl_2, $data_token);

	}

} /*batas clash M_auth*/

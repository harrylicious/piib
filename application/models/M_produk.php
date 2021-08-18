<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	public $id = "id_produk";
	public $id_grub = "id_grub";
	public $view_data_produk_grub = "data_detail_produk_pergrub";

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

 //for produk

 //add produk
	function add_produk($data){
		$tbl=$this->m_config->tbl_produk();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	}
 
    // update produk
	function update_produk($id_produk, $data){
		$tbl=$this->m_config->tbl_produk();
		$id=$this->m_config->id_produk();
		$this->db->where($id, $id_produk);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

    // delete produk permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_produk($id_produk){
		$tbl=$this->m_config->tbl_produk();
		$id=$this->m_config->id_produk();
		$this->db->where($id, $id_produk);
		$hsl=$this->db->delete($tbl);
		return $hsl;
	}

    // delete produk tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_produk($id_produk){
		$tbl=$this->m_config->tbl_produk();
		$id=$this->m_config->id_produk();
		$this->db->set('status', 1);
		$this->db->where($id, $id_produk);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// mengembalika data yang terhapus status = 0 
	function restore_produk($id_produk){
		$tbl=$this->m_config->tbl_produk();
		$id=$this->m_config->id_produk();
		$this->db->set('status', 0);
		$this->db->where($id, $id_produk);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	function get_all_detail() {
		$tbl=$this->m_config->tbl_produk();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table produk dengan status 0 (ada)
	function get_all_produk() {
		$tbl=$this->m_config->tbl_produk();
		$this->where('status', 0);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

	 // menampilkan detail data pada table produk dengan status 0 (ada)
	 function get_detail_produk($u_id_grub) {
		$this->db->where("id_grub", $u_id_grub);
		return $this->db->get($this->view_data_produk_grub);
	}


    // menampilkan semua data produk pada table berdasarkan jenis
	function get_js_produk($jenis){
		$tbl=$this->m_config->tbl_produk();
		$this->db->where('jenis', $jenis);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

	function get_grub_produk($id_grub)
	{
		$tbl=$this->m_config->tbl_produk();
		$this->db->where('id_grub', $id_grub);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


    // menampilkan semua data produk pada table
    // produk dengan status 1 (terhapus) pada client-side



//===========================================
//for detail produk

 //add produk




	function restore_user($id_user){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->set('status', 0);
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

   // menampilkan semua data pada table detail_produk dengan status 0 (ada)
	function get_all_detail_produk_detail() {
		$tbl=$this->m_config->tbl_user();
		$hsl=$this->db->get($tbl);
		return $hsl;
	}


} /*close tag of Class M_produk */         
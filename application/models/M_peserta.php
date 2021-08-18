<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model {

	public $view_riwayat_kuliah = "data_riwayat_perkuliahan";
	public $view_anggota_grub = "data_detail_anggota_grub";

	public $id_grub = "id_grub";
	
	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 

// ============================================================> peserta

	function get_profile($id_peserta) {
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$hsl=$this->db->where($id, $id_peserta);
		$hsl=$this->db->get($tbl);
		return $hsl;

	}

	// update foto
	function update_foto($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	} 

	// delete foto
	function delete_foto($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

 	// tambah pengguna
	function add_user($data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	} 	

	// delete pengguna
	function delete($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}
 	// update profil
	function update_profile($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

	
	// ubah email
	function change_email($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->set('email', $data);
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	// cek_pengguna
	function check_peserta($id_peserta,$username){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$this->db->where('username', $username);
		$hsl = $this->db->get($tbl)->row_array();
		return $hsl;
	}

	// ubah password
	function change_password($id_peserta, $data){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->set('password', $data);
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}


	 // peanggil user level peserta dengan status 0 saja
	function get_peserta_user($limit){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where("status", "0");
		$this->db->where("level", "peserta");
		$hsl=$this->db->get($tbl, $limit);
		return $hsl;
	}	

	function get_peserta_user_profile($id_peserta){
		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta); // peanggil user level mentor saja
		$hsl=$this->db->get($tbl);
		return $hsl;
	}	

// ============================================================ 


	function get_data_riwayat_perkuliahan($id_peserta) {

		$id=$this->m_config->id_peserta();

		$this->db->where($id, $id_peserta);
		return $this->db->get($this->view_riwayat_kuliah);
	}


	function get_data_anggota_tim($id_grub) {
		$this->db->where("id_grub", $id_grub);
		return $this->db->get($this->view_anggota_grub);

	}


	function get_data_detail_grub($id_peserta) {

		$this->db->where("id_peserta", $id_peserta);
		return $this->db->get($this->view_anggota_grub);
		
	}


// delete peserta permanen
    // hapus data dari server-side ( data akan dihapus permanen)
	function delete_p_peserta($id_peserta){

		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->delete($tbl);
		return $hsl;

	}

    // delete peserta tanpa menghapus data fisik
    // hapus data dari client-side saja 
	function delete_peserta($id_peserta){

		$tbl=$this->m_config->tbl_peserta();
		$id=$this->m_config->id_peserta();
		$this->db->set('status', 1);
		$this->db->where($id, $id_peserta);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

// // mengembalika data yang terhapus status = 0 
// 	function restore_peserta($id_peserta){

// 		$tbl=$this->m_config->tbl_peserta();
// 		$id=$this->m_config->id_peserta();
// 		$this->db->set('status', 0);
// 		$this->db->where($id, $id_peserta);
// 		$hsl=$this->db->update($tbl);
// 		return $hsl;
// 	}


 //    // menampilkan semua data peserta pada table berdasarkan semester
	// function get_semester_peserta($semester)
	// {

	// 	$tbl=$this->m_config->tbl_peserta();
	// 	$this->db->where('semester', $semester);
	// 	$this->db->where('satus', 0);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }

 //   // menampilkan semua data pada table peserta dengan status 0 (ada)
	// function get_all()
	// {

	// 	$tbl=$this->m_config->tbl_peserta();
	// 	$this->db->where('status', 0);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;

	// }


 //    // menampilkan semua data pada table peserta dengan status 0 (ada) dengan jenis_kelamin

	// function get_jk_peserta($jenis_kelamin)
	// {

	// 	$tbl=$this->m_config->tbl_peserta();
	// 	$this->db->where('jenis_kelamin', $jenis_kelamin);
	// 	$this->db->where('status', 0);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }


} /*close tag of Class M_peserta */         
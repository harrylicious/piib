<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->model('m_config');
	} 
	
	// ============================================================> mentor

	function get_profile($id_user) {
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$hsl=$this->db->where($id, $id_user);
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

 	// update foto
	function update_foto($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	} 

	// delete foto
	function delete_foto($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

 	// tambah pengguna
	function add_user($data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$hsl=$this->db->insert($tbl, $data);
		return $hsl;
	} 	

	// delete pengguna
	function delete($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

	// update profil
	function update_profile($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl, $data);
		return $hsl;
	}

	// ubah email
	function change_email($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->set('email', $data);
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	// cek_pengguna
	function check_user($id_user,$username){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$this->db->where('username', $username);
		$hsl = $this->db->get($tbl)->row_array();
		return $hsl;
	}

	// ubah password
	function change_password($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->set('password', $data);
		$this->db->where($id, $id_user);
		$hsl=$this->db->update($tbl);
		return $hsl;
	}

	 // peanggil user level admin dengan status 0 saja
	function get_admin_user(){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where("status", "0");
		$this->db->where("level", "admin"); 
		$hsl=$this->db->get($tbl);
		return $hsl;
	}

	function get_admin_user_profile($id_admin){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_admin); // peanggil user level admin saja
		$hsl=$this->db->get($tbl);
		return $hsl;
	}	

	 // peanggil user level mentor dengan status 0 saja
	function get_mentor_user($limit){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where("status", "0");
		$this->db->where("level", "mentor");
		$hsl=$this->db->get($tbl, $limit);
		return $hsl;
	}	
	
	function get_mentor_user_profile($id_mentor){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_mentor); // peanggil user level mentor saja
		$hsl=$this->db->get($tbl);
		return $hsl;
	}	


// ============================================================> admin




 //    //add user
	// function add_user($data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$hsl=$this->db->insert($tbl, $data);
	// 	return $hsl;
	// }

 //    // update user
	// function update_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->update($tbl, $data);
	// 	return $hsl;
	// } 

	// //add user
	// function add_user($data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$hsl=$this->db->insert($tbl, $data);
	// 	return $hsl;
	// }

 //    // update user
	// function update_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->update($tbl, $data);
	// 	return $hsl;
	// }

 //    // change password
	// function change_password_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->update($tbl, $data);
	// 	return $hsl;
	// }

	// // verifikasi user dari admin
	// function admin_verify_user($id_user){
	// 	$tbl_user=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();

	// 	$this->db->set('is_activated', 1);
	// 	$this->db->where($id, $id_user);
	// 	$this->db->update($tbl_user);
	// } /*batas admin_verify_user*/

	// // verifikasi user dari admin
	// function admin_verify_user($id_user){
	// 	$tbl_user=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();

	// 	$this->db->set('is_activated', 1);
	// 	$this->db->where($id, $id_user);
	// 	$this->db->update($tbl_user);
	// } /*batas admin_verify_user*/


 //    // delete user permanen
 //    // hapus data dari server-side ( data akan dihapus permanen)
	// function delete_p_user($id_user){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->delete($tbl);
	// 	return $hsl;
	// }

 // 	// delete user tanpa menghapus data fisik
 // 	// hapus data dari client-side saja status = 1
	// function delete_user($id_user){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->set('status', 1);
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->update($tbl);
	// 	return $hsl;
	// }

 // 	// mengembalika data yang terhapus status = 0 
	// function restore_user($id_user){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->set('status', 0);
	// 	$this->db->where($id, $id_user);
	// 	$hsl=$this->db->update($tbl);
	// 	return $hsl;
	// }



 //   // menampilkan semua data pada table user dengan status 0 (ada)
	// function get_all(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }

	// function get_mentor(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', 'mentor');
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }

	// function get_user(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', 'user');
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }

	// // menampilkan semua data user pada table berdasarkan level
	// function get_level_user($level){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('level', $level);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }


	// // menampilkan semua data pada table user dengan status 0 (ada) dengan level admin
	// function get_level_client($level){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', $level);
	// 	$hsl=$this->db->get($tbl);
	// 	return $hsl;
	// }


} /*close tag of Class M_user */

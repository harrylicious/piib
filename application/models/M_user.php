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
		return $this->db->get($tbl);
		
	}

 	// update foto
	function update_foto($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		return $this->db->update($tbl, $data);
		
	} 

	// delete foto
	function delete_foto($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		return $this->db->update($tbl, $data);
		
	}

 	// tambah pengguna
	function add_user($data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		return $this->db->insert($tbl, $data);
		
	} 	

	// delete pengguna
	function delete($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		return $this->db->update($tbl, $data);
		
	}

	// update profil
	function update_profile($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		return $this->db->update($tbl, $data);
		
	}

	// ubah email
	function change_email($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->set('email', $data);
		$this->db->where($id, $id_user);
		return $this->db->update($tbl);
		
	}

	// cek_pengguna
	function check_user($id_user,$username){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_user);
		$this->db->where('username', $username);
		return $this->db->get($tbl)->row_array();
		
	}

	// ubah password
	function change_password($id_user, $data){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->set('password', $data);
		$this->db->where($id, $id_user);
		return $this->db->update($tbl);
		
	}

	 // peanggil user level admin dengan status 0 saja
	function get_admin_user(){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where("status", "0");
		$this->db->where("level", "admin"); 
		return $this->db->get($tbl);
		
	}

	function get_admin_user_profile($id_admin){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_admin); // peanggil user level admin saja
		return $this->db->get($tbl);
		
	}	

	 // peanggil user level mentor dengan status 0 saja
	function get_mentor_user($limit){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where("status", "0");
		$this->db->where("level", "mentor");
		return $this->db->get($tbl, $limit);
		
	}	
	
	function get_mentor_user_profile($id_mentor){
		$tbl=$this->m_config->tbl_user();
		$id=$this->m_config->id_user();
		$this->db->where($id, $id_mentor); // peanggil user level mentor saja
		return $this->db->get($tbl);
		
	}	


// ============================================================> admin




 //    //add user
	// function add_user($data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	return $this->db->insert($tbl, $data);
	// 	
	// }

 //    // update user
	// function update_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	return $this->db->update($tbl, $data);
	// 	
	// } 

	// //add user
	// function add_user($data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	return $this->db->insert($tbl, $data);
	// 	
	// }

 //    // update user
	// function update_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	return $this->db->update($tbl, $data);
	// 	
	// }

 //    // change password
	// function change_password_user($id_user, $data){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->where($id, $id_user);
	// 	return $this->db->update($tbl, $data);
	// 	
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
	// 	return $this->db->delete($tbl);
	// 	
	// }

 // 	// delete user tanpa menghapus data fisik
 // 	// hapus data dari client-side saja status = 1
	// function delete_user($id_user){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->set('status', 1);
	// 	$this->db->where($id, $id_user);
	// 	return $this->db->update($tbl);
	// 	
	// }

 // 	// mengembalika data yang terhapus status = 0 
	// function restore_user($id_user){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$id=$this->m_config->id_user();
	// 	$this->db->set('status', 0);
	// 	$this->db->where($id, $id_user);
	// 	return $this->db->update($tbl);
	// 	
	// }



 //   // menampilkan semua data pada table user dengan status 0 (ada)
	// function get_all(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	return $this->db->get($tbl);
	// 	
	// }

	// function get_mentor(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', 'mentor');
	// 	return $this->db->get($tbl);
	// 	
	// }

	// function get_user(){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', 'user');
	// 	return $this->db->get($tbl);
	// 	
	// }

	// // menampilkan semua data user pada table berdasarkan level
	// function get_level_user($level){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('level', $level);
	// 	return $this->db->get($tbl);
	// 	
	// }


	// // menampilkan semua data pada table user dengan status 0 (ada) dengan level admin
	// function get_level_client($level){
	// 	$tbl=$this->m_config->tbl_user();
	// 	$this->db->where('status', 0);
	// 	$this->db->where('level', $level);
	// 	return $this->db->get($tbl);
	// 	
	// }


} /*close tag of Class M_user */

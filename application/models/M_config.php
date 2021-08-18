<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_config extends CI_Model {
//***************************//
//function configurasi table //
//***************************//

// verify
	function tbl_verify(){
		$table="verify";
		return $table;
	}

// user
	function tbl_user(){
		$table="user";
		return $table;
	}

// peserta
	function tbl_peserta(){
		$table="peserta";
		return $table;
	}

//peminatan
	function tbl_peminatan(){
		$table="peminatan";
		return $table;
	}

// minat
	function tbl_minat(){
		$table="minat";
		return $table;
	}

// grub
	function tbl_grub(){
		$table="grub";
		return $table;
	}

// grub_detail
	function tbl_detail_grub(){
		$table="detail_grub";
		return $table;
	}	

// peserta_gld
	function tbl_peserta_gld(){
		$table="peserta_gld";
		return $table;
	}

// produk
	function tbl_produk(){
		$table="produk";
		return $table;
	}

// detail_produk
	function tbl_detail_produk(){
		$table="detail_produk";
		return $table;
	}

// peserta_startup_academy
	function tbl_peserta_startup_academy(){
		$table="peserta_startup_academy";
		return $table;
	}

// absensi_perkuliahan_mentoring
	function tbl_absensi_perkuliahan_mentoring(){
		$table="absensi_perkuliahan_mentoring";
		return $table;
	}

// riwayat_perkuliahan_mentoring
	function tbl_riwayat_perkuliahan_mentoring(){
		$table="riwayat_perkuliahan_mentoring";
		return $table;
	}

// event
	function tbl_event(){
		$table="event";
		return $table;
	}

	

//******************************//
//function configurasi field id //
//******************************//
	
// verify
	function id_verify(){
		$field="id_verify";
		return $field;
	}

// user
	function id_user(){
		$field="id_user";
		return $field;
	}

// peserta
	function id_peserta(){
		$field="id_peserta";
		return $field;
	}

//peminatan
	function id_peminatan(){
		$field="id_peminatan";
		return $field;
	}

// minat
	function id_minat(){
		$field="id_minat";
		return $field;
	}

// grub
	function id_grub(){
		$field="id_grub";
		return $field;
	}

// grub_detail
	function id_detail_grub(){
		$field="id_detail_grub";
		return $field;
	}	

// peserta_gld
	function id_peserta_gld(){
		$field="id_peserta_gld";
		return $field;
	}

// produk
	function id_produk(){
		$field="id_produk";
		return $field;
	}

// detail_produk
	function id_detail_produk(){
		$field="id_detail_produk";
		return $field;
	}

// peserta_startup_academy
	function id_peserta_startup_academy(){
		$field="id_peserta_startup_academy";
		return $field;
	}

// absensi_perkuliahan_mentoring
	function id_absensi_perkuliahan_mentoring(){
		$field="id_absensi_perkuliahan_mentoring";
		return $field;
	}

// riwayat_perkuliahan_mentoring
	function id_riwayat_perkuliahan_mentoring(){
		$field="id_riwayat_perkuliahan_mentoring";
		return $field;
	}

// event
	function id_event(){
		$field="id_event";
		return $field;
	}

//*********************************//
//function configurasi send token  //
//*********************************//

// email
	function config_token_email(){
		$email="userpiib@gmail.com";
		return $email;

		
	}

	// password
	function config_token_password(){
		$password="userpiib123";
		return $password;	

	}


} /*close tag of Class M_config */         


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

        // kondisi ketika session destroy (tidak aktif) atau session berakhir 
        // akan dipaksa kembali ke login page

		if($this->session->userdata('login_access') !=TRUE){   
			$url=base_url();
			redirect($url);
		};


		 // jika ingin menaruh model secara manual bisa load disini !
		$this->load->model('m_user');
		$this->load->model('m_peserta');
		$this->load->model('m_config');
	}

	//====================================================> Halaman

	public function index(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Beranda admin';
			$data['data']=$this->m_user->get_profile($id_user);
			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_dashboard',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	public function profile(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Profil';
			$data['data']=$this->m_user->get_profile($id_user); 
			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_profile',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}		

	public function mentor_user(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Mentor';
			$tbl=$this->m_config->tbl_user();
			$limit=10;
			$data['data']=$this->m_user->get_profile($id_user);
			$data['data_user']=$this->m_user->get_mentor_user($limit); 
			$this->db->where('level', 'mentor'); 
			$this->db->where('status', '0'); 
			$data['hitung']= $this->db->count_all_results($tbl); 
			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_mentor_user',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}	

	public function peserta_user(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Peserta';
			$tbl=$this->m_config->tbl_peserta();
			$limit=10;
			$data['data']=$this->m_user->get_profile($id_user);
			$data['data_user']=$this->m_peserta->get_peserta_user($limit); 
			$this->db->where('level', 'peserta'); 
			$this->db->where('status', '0'); 
			$data['hitung']= $this->db->count_all_results($tbl); 
			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_peserta_user',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}	



	public function mentor_user_profile($id_mentor){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Profil mentor';
			$tbl=$this->m_config->tbl_peserta();
			$data['data']=$this->m_user->get_profile($id_user);
			$data['data_mentor']=$this->m_user->get_mentor_user_profile($id_mentor); 
			$this->db->where('level', 'mentor'); 
			$data['hitung']= $this->db->count_all_results($tbl);

			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_mentor_profile',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}		

	public function peserta_user_profile($id_peserta){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$data['judul']='Profil Peserta';
			$tbl=$this->m_config->tbl_peserta();
			$data['data']=$this->m_user->get_profile($id_user);
			$data['data_peserta']=$this->m_peserta->get_peserta_user_profile($id_peserta); 
			$this->db->where('level', 'peserta'); 
			$data['hitung']= $this->db->count_all_results($tbl);

			$this->load->view('/templates/admin/v_header',$data);
			$this->load->view('/home/admin/v_peserta_profile',$data);
			$this->load->view('/templates/admin/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}	



//====================================================> fitur

//upload foto pengguna

	public function update_foto(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$username=$this->session->userdata('user');
			// $foto=$this->input->post('foto'); 
			$config['upload_path']          = 'assets/images/users/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']			= $id_user."_".$username;
			$config['overwrite']			= true;
			$config['max_size']             = 1000000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				// sesi tab
				$this->session->set_tempdata('tab', '2', 2);

				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Foto profil gagal diubah </div>', 2);
				redirect("admin/profile");
			}
			else
			{
				$up_foto = $this->upload->data();
				$up_foto = $up_foto['file_name'];
				$data = array('foto' => $up_foto, );
				$this->m_user->update_foto($id_user,$data);

				// sesi tab
				$this->session->set_tempdata('tab', '2', 2);

				echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Foto profil berhasil diubah </div>', 2);
				redirect("admin/profile");
			}

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


	//hapus foto pengguna
	public function delete_foto(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			
			$foto=$this->input->post('foto');

			$data = array(
				'foto' 				=> "default.jpg" , 
			);	
			
			if ($foto == "default.jpg") {
				// sesi tab
				$this->session->set_tempdata('tab', '2', 2);

				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Foto profil gagal diubah </div>', 2);
				redirect("admin/profile");
			}else{

				// hapus file foto
				unlink("assets/images/users/".$foto);
				
				$this->m_user->delete_foto($id_user,$data);
				
				// sesi tab
				$this->session->set_tempdata('tab', '2', 2);

				echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Foto profil berhasil dihapus </div>', 2);
				redirect("admin/profile");
			}

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

//tambah pengguna
	public function tambah_mentor(){
		if($this->session->userdata('access')=='2'){
			$nip=$this->input->post('nip');  
			$nama_lengkap=$this->input->post('nama_lengkap'); 
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$alamat=$this->input->post('alamat');
			$desa=$this->input->post('desa');
			$kecamatan=$this->input->post('kecamatan');
			$kabupaten=$this->input->post('kabupaten');
			$provinsi=$this->input->post('provinsi');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$email=$this->input->post('email');
			$semester=$this->input->post('semester');
			$telpon=$this->input->post('telpon');
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$data = array(
				'nip' 				=> htmlspecialchars($nip), 
				'nama_lengkap'		=> htmlspecialchars($nama_lengkap),
				'jenis_kelamin' 	=> htmlspecialchars($jenis_kelamin),
				'alamat'        	=> htmlspecialchars($alamat), 
				'desa' 				=> htmlspecialchars($desa), 
				'kecamatan' 		=> htmlspecialchars($kecamatan),
				'kabupaten'	    	=> htmlspecialchars($kabupaten),
				'provinsi'	    	=> htmlspecialchars($provinsi), 
				'tempat_lahir'		=> htmlspecialchars($tempat_lahir), 
				'tanggal_lahir' 	=> htmlspecialchars($tanggal_lahir), 
				'semester' 	 		=> htmlspecialchars($semester), 
				'telpon' 	 		=> htmlspecialchars($telpon), 
				'email' 	 		=> htmlspecialchars($email), 
				'username' 			=> htmlspecialchars($username),
				'password' 			=> password_hash($username, PASSWORD_DEFAULT),
				'level' 			=> "mentor" ,
			);

			$this->m_user->add_user($data);

			// sesi tab
			$this->session->set_tempdata('tab', '$tab', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Mentor berhasil ditambah</div>', 2);
			redirect("admin/mentor_user");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

//tambah pengguna
	public function tambah_peserta(){
		if($this->session->userdata('access')=='2'){
			$nim=$this->input->post('nim');  
			$nama_lengkap=$this->input->post('nama_lengkap'); 
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$alamat=$this->input->post('alamat');
			$desa=$this->input->post('desa');
			$kecamatan=$this->input->post('kecamatan');
			$kabupaten=$this->input->post('kabupaten');
			$provinsi=$this->input->post('provinsi');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$email=$this->input->post('email');
			$semester=$this->input->post('semester');
			$telpon=$this->input->post('telpon');
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$data = array(
				'nim' 				=> htmlspecialchars($nim), 
				'nama_lengkap'		=> htmlspecialchars($nama_lengkap),
				'jenis_kelamin' 	=> htmlspecialchars($jenis_kelamin),
				'alamat'        	=> htmlspecialchars($alamat), 
				'desa' 				=> htmlspecialchars($desa), 
				'kecamatan' 		=> htmlspecialchars($kecamatan),
				'kabupaten'	    	=> htmlspecialchars($kabupaten),
				'provinsi'	    	=> htmlspecialchars($provinsi), 
				'tempat_lahir'		=> htmlspecialchars($tempat_lahir), 
				'tanggal_lahir' 	=> htmlspecialchars($tanggal_lahir), 
				'semester' 	 		=> htmlspecialchars($semester), 
				'telpon' 	 		=> htmlspecialchars($telpon), 
				'email' 	 		=> htmlspecialchars($email), 
				'username' 			=> htmlspecialchars($username),
				'password' 			=> password_hash($username, PASSWORD_DEFAULT),
				'level' 			=> "peserta" ,
			);

			$this->m_peserta->add_user($data);

			// sesi tab
			$this->session->set_tempdata('tab', '$tab', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Peserta berhasil ditambah</div>', 2);
			redirect("admin/peserta_user");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

// hapus akun mentor
	public function delete_mentor($id_mentor){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');

			$data = array(
				'status' 				=> 1 , 
			);	
			
			$this->m_user->delete($id_mentor, $data);

				// sesi tab
			$this->session->set_tempdata('tab', '2', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Mentor berhasil dihapus </div>', 2);
			redirect("admin/mentor_user");


		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

// hapus akun peserta
	public function delete_peserta($id_peserta){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');

			$data = array(
				'status' 				=> 1 , 
			);	
			
			$this->m_peserta->delete($id_peserta, $data);

				// sesi tab
			$this->session->set_tempdata('tab', '2', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Mentor berhasil dihapus </div>', 2);
			redirect("admin/peserta_user");


		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

//update pengguna
	public function update_profile(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$nip=$this->input->post('nip');  
			$nama_lengkap=$this->input->post('nama_lengkap'); 
			$jenis_kelamin=$this->input->post('jenis_kelamin');
			$alamat=$this->input->post('alamat');
			$desa=$this->input->post('desa');
			$kecamatan=$this->input->post('kecamatan');
			$kabupaten=$this->input->post('kabupaten');
			$provinsi=$this->input->post('provinsi');
			$tempat_lahir=$this->input->post('tempat_lahir');
			$tanggal_lahir=$this->input->post('tanggal_lahir');
			$semester=$this->input->post('semester');
			$telpon=$this->input->post('telpon');

			$data = array(

				'nip' 				=> htmlspecialchars($nip), 
				'nama_lengkap'		=> htmlspecialchars($nama_lengkap),
				'jenis_kelamin' 	=> htmlspecialchars($jenis_kelamin),
				'alamat'        	=> htmlspecialchars($alamat), 
				'desa' 				=> htmlspecialchars($desa), 
				'kecamatan' 		=> htmlspecialchars($kecamatan),
				'kabupaten'	    	=> htmlspecialchars($kabupaten),
				'provinsi'	    	=> htmlspecialchars($provinsi), 
				'tempat_lahir'		=> htmlspecialchars($tempat_lahir), 
				'tanggal_lahir' 	=> htmlspecialchars($tanggal_lahir), 
				'semester' 	 		=> htmlspecialchars($semester), 
				'telpon' 	 		=> htmlspecialchars($telpon), 
			
			);

			$this->m_user->update_profile($id_user,$data);

			// sesi tab
			$this->session->set_tempdata('tab', '2', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Update profil berhasil </div>', 2);
			redirect("admin/profile");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	//mengganti email pengguna
	public function change_email(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$email=$this->input->post('email');

			$data = array(
				'email' => htmlspecialchars($this->input->post('email',true)),
			);

			$this->m_user->update_profile($id_user,$data);

			// sesi tab
			$this->session->set_tempdata('tab', '3', 2);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Email berhasil diubah</div>', 2);
			redirect("admin/profile");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


	//mengganti password pengguna
	public function change_password(){
		if($this->session->userdata('access')=='2'){
			$id_user=$this->session->userdata('u_id');
			$username=$this->session->userdata('user');
			$password_sekarang=$this->input->post('currentpassword');
			$password_baru=$this->input->post('password');
			$password_baru2=$this->input->post('password2');
			//cek pengguna
			$u_login=$this->m_user->check_user($id_user,$username);

			// jika password sama
			if ($password_baru2==$password_baru) {
				// verifikasi password sekarang
				if (password_verify($password_sekarang, $u_login['password'])) {

					$data = array(
						'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					);

					$this->m_user->update_profile($id_user,$data);

					// sesi tab
					$this->session->set_tempdata('tab', '3', 2);

					echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Kata sandi berhasil diubah</div>', 2);
					redirect("admin/profile");

				// jika password saat ini tidak sama 
				}else{

					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Kata sandi saat ini salah</div>', 2);
					redirect("admin/profile");
				}

			// jika passsword tidak sama
			}else{
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Kata sandi baru tidak sama</div>', 2);
				redirect("admin/profile");
			}/*batas password jika sama*/

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


} /*ini adalah batas class admin / this line is limit of Class admin*/

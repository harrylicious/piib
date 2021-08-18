<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();

        // kondisi ketika session destroy (tidak aktif) atau session berakhir 
        // akan dipaksa kembali ke login page

		if($this->session->userdata('login_access') !=TRUE){   
			$url=base_url();
			redirect($url);
		};
   		 // jika ingin menaruh model secara manual bisa load disini !
		$this->load->library('form_validation');
		$this->load->model('m_peserta');
		$this->load->model('m_event');
		$this->load->model('m_produk');
		$this->load->model('m_auth');
	}

//====================================================> Halaman

	public function index(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$u_id_grub=$this->session->userdata('u_id_grub');


			$data['judul']='Beranda Peserta';
			$data['data']=$this->m_peserta->get_profile($id_peserta)->row_array();


			$data['data_riwayat_perkuliahan']=$this->m_peserta->get_data_riwayat_perkuliahan($id_peserta)->result();
			
			$data['data_anggota_tim']=$this->m_peserta->get_data_anggota_tim($u_id_grub)->result();
			$data['data_array_anggota_tim']=$this->m_peserta->get_data_anggota_tim($u_id_grub)->row_array();

			$data['data_event']=$this->m_event->get_all()->result();
			$data['data_produk']=$this->m_produk->get_detail_produk($u_id_grub)->row_array();

			$this->load->view('/templates/peserta/v_header',$data);
			$this->load->view('/home/peserta/v_dashboard',$data);
			$this->load->view('/templates/peserta/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	public function profile(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$data['judul']='Profil';
			$data['data']=$this->m_peserta->get_profile($id_peserta); 
			$this->load->view('/templates/peserta/v_header',$data);
			$this->load->view('/home/peserta/v_profile',$data);
			$this->load->view('/templates/peserta/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}	

	public function edit_profile(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$data['judul']='Ubah profil';
			$data['data']=$this->m_peserta->get_profile($id_peserta); 
			$this->load->view('/templates/peserta/v_header',$data);
			$this->load->view('/home/peserta/v_edit_profile',$data);
			$this->load->view('/templates/peserta/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	public function security(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$data['judul']='Keamanan';
			$data['data']=$this->m_peserta->get_profile($id_peserta);
			$this->load->view('/templates/peserta/v_header',$data);
			$this->load->view('/home/peserta/v_security',$data);
			$this->load->view('/templates/peserta/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	public function social(){
		if($this->session->userdata('access')=='4'){
			$data['judul']='Akun sosial media';
			$id_peserta=$this->session->userdata('u_id');
			$data['data']=$this->m_peserta->get_profile($id_peserta);
			$this->load->view('/templates/peserta/v_header',$data);
			$this->load->view('/home/peserta/v_social',$data);
			$this->load->view('/templates/peserta/v_footer',$data);
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


//====================================================> fitur

//uload foto pengguna

	public function update_foto(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$username=$this->session->userdata('user');
			// $foto=$this->input->post('foto'); 
			$config['upload_path']          = 'assets/images/users/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']			= $id_peserta."_".$username;
			$config['overwrite']			= true;
			$config['max_size']             = 1000000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Foto profil gagal diubah </div>', 2);
				redirect("peserta/edit_profile");
			}
			else
			{
				$up_foto = $this->upload->data();
				$up_foto = $up_foto['file_name'];
				$data = array('foto' => $up_foto, );
				$this->m_peserta->update_foto($id_peserta,$data);

				
				echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Foto profil berhasil diubah </div>', 2);
				redirect("peserta/edit_profile");
			}

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	//delete foto pengguna

	public function delete_foto(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			
			$foto=$this->input->post('foto');

			$data = array(
				'foto' 				=> "default.jpg" , 
			);	
			
			if ($foto == "default.jpg") {
				
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Foto profil gagal diubah </div>', 2);
				redirect("peserta/edit_profile");
			}else{

				// hapus file foto
				unlink("assets/images/users/".$foto);
				
				$this->m_peserta->delete_foto($id_peserta,$data);
				
				
				echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Foto profil berhasil dihapus </div>', 2);
				redirect("peserta/edit_profile");
			}

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


	//update peserta
	public function update_profile(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
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
			$semester=$this->input->post('semester');
			$jurusan=$this->input->post('jurusan');
			$telpon=$this->input->post('telpon');

			$data = array(
				'nim' 				=> $nim , 
				'nama_lengkap'		=> $nama_lengkap ,
				'jenis_kelamin' 	=> $jenis_kelamin ,
				'alamat'        	=> $alamat , 
				'desa' 				=> $desa , 
				'kecamatan' 		=> $kecamatan ,
				'kabupaten'	    	=> $kabupaten ,
				'provinsi'	    	=> $provinsi , 
				'tempat_lahir'		=> $tempat_lahir , 
				'tanggal_lahir' 	=> $tanggal_lahir , 
				'semester' 	 		=> $semester , 
				'jurusan' 	 		=> $jurusan ,
				'telpon' 			=> $telpon , 
			);

			$this->m_peserta->update_profile($id_peserta,$data);
			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Update profil berhasil </div>', 2);
			redirect("peserta/edit_profile");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	//update sosia media
	public function update_social(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$link_portfolio=$this->input->post('link_portfolio');
			$link_website=$this->input->post('link_website');
			$link_facebook=$this->input->post('link_facebook');
			$link_linkedin=$this->input->post('link_linkedin');  

			$data = array(
				'link_portfolio' 	=> $link_portfolio ,
				'link_website' 		=> $link_website ,
				'link_linkedin' 	=> $link_linkedin ,
				'link_facebook' 	=> $link_facebook ,
			);

			$this->m_peserta->update_profile($id_peserta,$data);
			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Update akun sosial media berhasil </div>', 2);
			redirect("peserta/social");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}

	//mengganti email pengguna
	public function change_email(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$email=$this->input->post('email');

			$data = array(
				'email' => htmlspecialchars($this->input->post('email',true)),
			);

			$this->m_peserta->update_profile($id_peserta,$data);

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Email berhasil diubah</div>', 2);
			redirect("peserta/security");
		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}


	//mengganti password pengguna
	public function change_password(){
		if($this->session->userdata('access')=='4'){
			$id_peserta=$this->session->userdata('u_id');
			$username=$this->session->userdata('user');
			$password_sekarang=$this->input->post('currentpassword');
			$password_baru=$this->input->post('password');
			$password_baru2=$this->input->post('password2');
			//cek pengguna
			$u_login=$this->m_peserta->check_peserta($id_peserta,$username);

			// jika password sama
			if ($password_baru2==$password_baru) {
				// verifikasi password sekarang
				if (password_verify($password_sekarang, $u_login['password'])) {

					$data = array(
						'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					);

					$this->m_peserta->update_profile($id_peserta,$data);

			

					echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Kata sandi berhasil diubah</div>', 2);
					redirect("peserta/security");

				// jika password saat ini tidak sama 
				}else{

					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Kata sandi saat ini salah</div>', 2);
					redirect("peserta/security");
				}

			// jika passsword tidak sama
			}else{
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Kata sandi baru tidak sama</div>', 2);
				redirect("peserta/security");
			}/*batas password jika sama*/

		}else{
			$this->load->view('/maintenance/v_error_404');
		}
	}



} /*ini adalah batas class Peserta / this line is limit of Class Peserta*/

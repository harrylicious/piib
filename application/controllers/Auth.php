<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		/*=== load ===*/

		$this->load->library('form_validation');
		$this->load->model('m_auth');
		$this->load->model('m_config');
		$this->load->model('m_peserta');
	} /*ini batas function contruct*/


	//===================================>> pages
	// halaman login pengguna
	public function index(){
		$data['judul']='Masuk';
		$data['label']='Login pengguna';
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/v_login');
		$this->load->view('templates/auth/v_footer',$data);

	}		

	// halaman login super
	public function login_super(){
		$data['judul']='Masuk';
		$data['label']='Login';
		$this->load->view('templates/auth/super/v_header',$data);
		$this->load->view('auth/super/v_login',$data);
		$this->load->view('templates/auth/super/v_footer',$data);

	}	

	// halaman login admin
	public function login_admin(){
		$data['judul']='Masuk';
		$data['label']='Login admin';
		$this->load->view('templates/auth/admin/v_header',$data);
		$this->load->view('auth/admin/v_login',$data);
		$this->load->view('templates/auth/admin/v_footer',$data);
	}

	// halaman login mentor
	public function login_mentor(){
		$data['judul']='Masuk';
		$data['label']='Login mentor';
		$this->load->view('templates/auth/mentor/v_header',$data);
		$this->load->view('auth/mentor/v_login',$data);
		$this->load->view('templates/auth/mentor/v_footer',$data);
	}

	// halaman login peserta
	public function login_peserta(){
		$data['judul']='Masuk';
		$data['label']='Login peserta';
		$this->load->view('templates/auth/peserta/v_header',$data);
		$this->load->view('auth/peserta/v_login',$data);
		$this->load->view('templates/auth/peserta/v_footer',$data);
	}

	//halaman registrasi
	public function register(){
		$data['judul']='Daftar';
		$data['label']='Daftar';
		// $data['label']='Create an Account!';
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/v_register');
		$this->load->view('templates/auth/v_footer',$data);
	}

	//halaman registrasi mentor
	public function register_mentor(){
		$data['judul']='Daftar';
		$data['label']='Daftar mentor';
		// $data['label']='Create an Account!';
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/mentor/v_register',$data); 
		$this->load->view('templates/auth/v_footer',$data);
	}

	// halaman registrasi peserta
	public function register_peserta(){
		$data['judul']='Daftar PIIB';
		$data['label']='Daftar peserta';
		// $data['label']='Create an Account!';
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/peserta/v_register',$data); 
		$this->load->view('templates/auth/v_footer',$data);

	}

	// halaman lupa password super
	public function forgot_super(){
		$data['judul']='Lupa kata sandi';
		$data['label']='Lupa kata sandi ?';
		$data['notif']="Kami mengerti, hal-hal terjadi. Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!";
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/super/v_forgot',$data);
		$this->load->view('templates/auth/v_footer',$data);
	}	

	// halaman lupa password admin
	public function forgot_admin(){
		$data['judul']='Lupa kata sandi';
		$data['label']='Lupa kata sandi ?';
		$data['notif']="Kami mengerti, hal-hal terjadi. Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!";
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/admin/v_forgot',$data);
		$this->load->view('templates/auth/v_footer',$data);
	}

	// halaman lupa password mentor
	public function forgot_mentor(){
		$data['judul']='Lupa kata sandi';
		$data['label']='Lupa kata sandi ?';
		$data['notif']="Kami mengerti, hal-hal terjadi. Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!";
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/mentor/v_forgot',$data);
		$this->load->view('templates/auth/v_footer',$data);
	}

	// halaman lupa password peserta
	public function forgot_peserta(){

		$data['judul']='Lupa kata sandi';
		$data['label']='Lupa passwLupa kata sandi ?';
		$data['notif']="Kami mengerti, hal-hal terjadi. Cukup masukkan alamat email Anda di bawah ini dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda!";
		$this->load->view('templates/auth/v_header',$data);
		$this->load->view('auth/peserta/v_forgot',$data);
		$this->load->view('templates/auth/v_footer',$data);

	}

	//===================================>> proccess

	
	// process login untuk super 
	public function login_process_super(){
		// configurasi variable id table ==================>  load dari model M_config
		$id_user=$this->m_config->id_user();

		//===========================================================

		//username tabel user field username*/
		$this->form_validation->set_rules('username', 'Username ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

		// register gagal
		if ($this->form_validation->run() == false) { 
			$this->login_super(); 	/* =================================> kembali ke halaman login*/

		}else{ /*register berhasil*/

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// cek pengguna di database dari variable table ==> $tbl (cek di bagian configruasi varable table dan id table)
			$user_login = $this->m_auth->check_user($username);

			// pengguna ada
			if ($user_login and $user_login['level'] == 'super') {

				// cek pengguna aktif
				if ($user_login['is_activated'] == '1') {

				// password benar
					if (password_verify($password, $user_login['password'])) {
						$this->session->set_userdata('login_access',true);
						$this->session->set_userdata('user',$username);

					//============================================
					// kondisi hak akses pengguna

						if($user_login['level'] == 'super') {

							$this->session->set_userdata('access','1');
							$u_id=$user_login["$id_user"];
							$u_name=$user_login['nama_lengkap'];
							$u_level=$user_login['level'];
							$this->session->set_userdata('u_id',$u_id);
							$this->session->set_userdata('u_name',$u_name);
							$this->session->set_userdata('u_level',$u_level);

						}else{
							redirect('auth/login_failed_super');
						} /* batas kondisi hak akses*/

					//============================================
						if($this->session->userdata('login_access')==true){
							redirect('auth/login_success');
						}else{
							redirect('auth/login_failed_super');
						}
					//============================================

					}else{	/* pengguna ada tapi password salah*/
						echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Kata sandi salah !  </div>', 2);
						redirect('auth/login_super');
					}

				}else{ /* cek pengguna aktif */
					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Akun tidak aktif ! </div>', 2);
					redirect('auth/login_super');
				}

			}else{	/*pengguna tidak ada*/
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
				redirect('auth/login_super');
			}
		} /* batas jika login berhasil */
	} /*batas login procss super*/


	// process login untuk admin 
	public function login_process_admin(){
		// configurasi variable id table ==================>  load dari model M_config
		$id_user=$this->m_config->id_user();

		//===========================================================

		//username tabel user field username*/
		$this->form_validation->set_rules('username', 'Username ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

		// register gagal
		if ($this->form_validation->run() == false) { 
			$this->login_admin(); 	/* =================================> kembali ke halaman login*/

		}else{ /*register berhasil*/

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// cek pengguna di database dari variable table ==> $tbl (cek di bagian configruasi varable table dan id table)
			$user_login = $this->m_auth->check_user($username);

			// pengguna ada
			if ($user_login and $user_login['level'] == 'admin') {

				// cek pengguna aktif
				if ($user_login['is_activated'] == '1') {

				// password benar
					if (password_verify($password, $user_login['password'])) {
						$this->session->set_userdata('login_access',true);
						$this->session->set_userdata('user',$username);

					//============================================
					// kondisi hak akses pengguna

						if($user_login['level'] == 'admin') {

							$this->session->set_userdata('access','2');
							$u_id=$user_login["$id_user"];
							$u_name=$user_login['nama_lengkap'];
							$u_level=$user_login['level'];


							$this->session->set_userdata('u_id',$u_id);
							$this->session->set_userdata('u_name',$u_name);
							$this->session->set_userdata('u_level',$u_level);

						}else{
							redirect('auth/login_failed_user');
						} /* batas kondisi hak akses*/

					//============================================
						if($this->session->userdata('login_access')==true){
							redirect('auth/login_success');
						}else{
							redirect('auth/login_failed_admin');
						}
					//============================================

					}else{	/* pengguna ada tapi password salah*/
						echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Kata sandi salah !  </div>', 2);
						redirect('auth/login_admin');
					}

				}else{ /* cek pengguna aktif */
					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Akun tidak aktif ! </div>', 2);
					redirect('auth/login_admin');
				}

			}else{	/*pengguna tidak ada*/
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
				redirect('auth/login_admin');
			}
		} /* batas jika login berhasil */
	} /*batas login procss admin*/

// process login untuk mentor 
	public function login_process_mentor(){
		// configurasi variable id table ==================>  load dari model M_config
		$id_user=$this->m_config->id_user();

		//===========================================================

		//username tabel user field username*/
		$this->form_validation->set_rules('username', 'Username ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

		// register gagal
		if ($this->form_validation->run() == false) { 
			$this->login_mentor(); 	/* =================================> kembali ke halaman login*/

		}else{ /*register berhasil*/

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// cek pengguna di database dari variable table ==> $tbl (cek di bagian configruasi varable table dan id table)
			$user_login = $this->m_auth->check_user($username);

			// pengguna ada
			if ($user_login and $user_login['level'] == 'mentor') {

				// cek pengguna aktif
				if ($user_login['is_activated'] == '1') {

				// password benar
					if (password_verify($password, $user_login['password'])) {
						$this->session->set_userdata('login_access',true);
						$this->session->set_userdata('user',$username);

					//============================================
					// kondisi hak akses pengguna

						if($user_login['level'] == 'mentor') {

							$this->session->set_userdata('access','3');
							$u_id=$user_login["$id_user"];
							$u_name=$user_login['nama_lengkap'];
							$u_level=$user_login['level'];
							$this->session->set_userdata('u_id',$u_id);
							$this->session->set_userdata('u_name',$u_name);
							$this->session->set_userdata('u_level',$u_level);

						}else{
							redirect('auth/login_failed_mentor');
						} /* batas kondisi hak akses*/

					//============================================
						if($this->session->userdata('login_access')==true){
							redirect('auth/login_success');
						}else{
							redirect('auth/login_failed_mentor');
						}
					//============================================

					}else{	/* pengguna ada tapi password salah*/
						echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Kata sandi salah !  </div>', 2);
						redirect('auth/login_mentor');
					}

				}else{ /* cek pengguna aktif */
					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Akun tidak aktif ! </div>', 2);
					redirect('auth/login_mentor');
				}

			}else{	/*pengguna tidak ada*/
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
				redirect('auth/login_mentor');
			}
		} /* batas jika login berhasil */
	} /*batas login procss mentor*/


	// process login peserta
	public function login_process_peserta(){
		// configurasi variable id table ==================>  load dari model M_config
		$id_peserta=$this->m_config->id_peserta();

		//===========================================================

		//username tabel peserta field username*/
		$this->form_validation->set_rules('username', 'Username ', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

		// register gagal
		if ($this->form_validation->run() == false) { 
			$this->login_peserta(); 	/* =================================> kembali ke halaman login*/

		}else{ /*register berhasil*/

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// cek pengguna di database 
			$user_login = $this->m_auth->check_peserta($username);

			// pengguna ada
			if ($user_login and $user_login['level'] == 'peserta') {


				// cek pengguna aktif
				if ($user_login['is_activated'] == '1') {

				// password benar
					if (password_verify($password, $user_login['password'])) {
						$this->session->set_userdata('login_access',true);
						$this->session->set_userdata('user',$username);

					//============================================
					// kondisi hak akses pengguna
						if ($user_login['level'] == 'peserta') {
							$this->session->set_userdata('access','4');
							$u_id=$user_login["$id_peserta"];
							$u_name=$user_login['nama_lengkap'];
							$u_level=$user_login['level'];

							$get_id_grub = $this->m_peserta->get_data_detail_grub($u_id)->row_array();
							$id_grub = $get_id_grub['id_grub'];


							$this->session->set_userdata('u_id',$u_id);
							$this->session->set_userdata('u_name',$u_name);
							$this->session->set_userdata('u_level',$u_level);
							$this->session->set_userdata('u_id_grub',$id_grub);

							//echo $id_grub;


						}else{
							redirect('auth/login_failed_peserta');
						}/* batas kondisi hak akses*/

					//============================================
						if($this->session->userdata('login_access')==true){
							redirect('auth/login_success');
						}else{
							redirect('auth/login_failed_peserta');
						}
					//============================================

					}else{	/* pengguna ada tapi password salah*/
						echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Kata sandi salah !  </div>', 2);
						redirect('auth/login_peserta');
					}

				}else{ /* cek pengguna aktif */
					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">Akun tidak aktif ! </div>', 2);
					redirect('auth/login_peserta');
				}

			}else{	/*pengguna tidak ada*/
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
				redirect('auth/login_peserta');
			}
		} /* batas jika login berhasil */
	} /*batas login procss peserta*/

	
	// process register mentor
	public function register_process_mentor(){

		//name
		$this->form_validation->set_rules('nama_lengkap', 'Full name', 'trim|required|min_length[5]');
		//nip
		// $this->form_validation->set_rules('nip', 'NIP', 'trim|required|min_length[5]|is_unique[user.nip]',['is_unique' => 'nip sudah terdaftar']);
		// //Username
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]|is_unique[user.username]',['is_unique' => 'Username sudah terdaftar']);
		// email tabel pengguna field email*/
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]',['is_unique' => 'Email sudah terdaftar']);
		// password
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[password2]');
		// password2
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');
		// register gagal
		if ($this->form_validation->run() == false) { 
			// register mentor
			$this->register_mentor(); 	

		// register berhasil
		}else{ 

			$email=$this->input->post('email',true);

			$data =[

				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap',true)),
				// 'nip' => htmlspecialchars($this->input->post('nip',true)),
				'username' => htmlspecialchars($this->input->post('username',true)),
				'email' => htmlspecialchars($email),
				'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' =>  'mentor',
				'is_activated' 	=>  0,
				'status'		=>	0,
				// 'updated_at'	=>	null,

			]; /* batas $data */

			// membuat token verifikasi ke email
			$token = base64_encode(random_bytes(32));
			$data_token = [
				'email'=>$email,
				'token'=>$token,
			];

			// insert data pendaftaran ke database
			$this->m_auth->daftar_user($data, $data_token);
			
			//kirim verifkasi pengguna melalui email 
			$this->_send_email($token, 'verify_mentor');

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert">Akun telah dibuat. Silahkan cek email anda untuk verifikasi </div>', 2);

			//redirecting
			redirect('auth/register_mentor');

		}

	} /*batas register procss mentor*/


	// process register
	public function register_process_peserta(){

		//name
		$this->form_validation->set_rules('nama_lengkap', 'Name', 'trim|required|min_length[5]');
		//nim
		// $this->form_validation->set_rules('nim', 'NIM', 'trim|required|min_length[5]|is_unique[peserta.nim]',['is_unique' => 'NIM sudah terdaftar']);
		//Username
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]|is_unique[peserta.username]',['is_unique' => 'Username sudah terdaftar']);
		// email tabel pengguna field email*/
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[peserta.email]',['is_unique' => 'Email sudah terdaftar']);
		// password
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[password2]');
		// password2
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password]');
		// register gagal
		if ($this->form_validation->run() == false) { 
			// register peserta
			$this->register_peserta(); 	

		// register berhasil
		}else{ 

			$email=$this->input->post('email',true);

			$data =[

				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap',true)),
				// 'nim' => htmlspecialchars($this->input->post('nim',true)),
				'username' => htmlspecialchars($this->input->post('username',true)),
				'email' => htmlspecialchars($email),
				'password' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'level' =>  'peserta',
				'is_activated' 	=>  0,
				'status'		=>	0,
				// 'updated_at'	=>	null,

			]; /* batas $data */


			// membuat token verifikasi ke email
			$token = base64_encode(random_bytes(32));
			$data_token = [
				'email'=>$email,
				'token'=>$token,
			];

			// insert data pendaftaran ke database
			$this->m_auth->daftar_peserta($data, $data_token);

			// kirim verifkasi pengguna melalui email 
			$this->_send_email($token, 'verify_peserta');

			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert">Akun telah dibuat. Silahkan cek email anda untuk verifikasi </div>', 2);
			redirect('auth/register_peserta');
		}

	} /*batas register procss peserta*/

	private function _send_email($token, $type){
		$this->load->model('m_config');
		$config_email=$this->m_config->config_token_email();
		$config_password=$this->m_config->config_token_password();
		$tbl_user=$this->m_config->tbl_user();
		$id_user=$this->m_config->id_user();
		$tbl_verify=$this->m_config->tbl_verify();
		$id_verify=$this->m_config->id_verify();

		$config =[
			'protocol'=> 'smtp',
			'smtp_host'=> 'ssl://smtp.googlemail.com',
			'smtp_user'=> $config_email,
			'smtp_pass'=> $config_password,
			'smtp_port'=> '465',
			'mailtype'=> 'hml',
			'charset'=> 'utf-8',
			'newline'=> "\r\n",
		];

		$this->email->initialize($config);
		$this->load->library('email', $config); 
		$this->email->from($config_email,'PIIB-Daftar');
		$this->email->to($this->input->post('email'));
		if ($type == 'verify_mentor') {
			$this->email->subject('PIIB Account Verification');
			$this->email->message('Clik the link to verify your account : ' . base_url() . 'auth/verify_mentor?email=' . $this->input->post('email') . '&token=' . urlencode($token). ' ');

		}elseif ($type == 'verify_peserta') {
			$this->email->subject('PIIB Account Verification');
			$this->email->message('Clik the link to verify your account : ' . base_url() . 'auth/verify_peserta?email=' . $this->input->post('email') . '&token=' . urlencode($token). ' ');

		}

		if ($this->email->send()) {
			return true;
		}else{
			$this->email->print_debugger();
		};

	} /*ini batas _send_email*/


	//token verifikasi mentor
	function verify_mentor(){

		$tbl_user=$this->m_config->tbl_user();
		$id_user=$this->m_config->id_user();
		$tbl_verify=$this->m_config->tbl_verify();
		$id_verify=$this->m_config->id_verify();

		$email = $this->input->get('email');
		$token = $this->input->get('token');
		
		$user = $this->db->get_where($tbl_user,['email' => $email])->row_array();
		$data_token = $this->db->get_where($tbl_verify,['token' => $token])->row_array();

		if ($user) {
			if ($data_token) {
				//token akan terhapus otomatis setelah 24 jam
				if (date('Y-m-d H:i:s')-$data_token['created_at']< (86400)) {  

					$this->db->set('is_activated', 1);
					$this->db->where('email',$email);
					$this->db->update($tbl_user);
					$this->db->delete($tbl_verify, ['email' => $email ]);

					echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Akun anda sudah diverifikasi, silahkan login !</div>', 2);
					redirect('auth/login_mentor');

				}else{
					$this->db->delete($tbl_user, ['email' => $email]);
					$this->db->delete($tbl_verify, ['email' => $email]);

					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Sorry, Token has been expired, please try register again ! </div>', 2);
					redirect('auth/login_mentor');
				}

			}else{
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">
					Sorry, Token is wrong ! </div>',2);
				redirect('auth/login_mentor');
			}
		}else{
			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Sorry, Email is wrong ! </div>', 2);
			redirect('auth/login_mentor');
		};
	} /* batas verifikasi user*/

	//token verifikasi peserta
	function verify_peserta(){

		$tbl_peserta=$this->m_config->tbl_peserta();
		$id_peserta=$this->m_config->id_peserta();
		$tbl_verify=$this->m_config->tbl_verify();
		$id_verify=$this->m_config->id_verify();

		$email = $this->input->get('email');
		$token = $this->input->get('token');
		
		$peserta = $this->db->get_where($tbl_peserta,['email' => $email])->row_array();
		$data_token = $this->db->get_where($tbl_verify,['token' => $token])->row_array();

		if ($peserta) {
			if ($data_token) {
				//token akan terhapus otomatis setelah 24 jam
				if (date('Y-m-d H:i:s')-$data_token['created_at']< (86400)) {

					$this->db->set('is_activated', 1);
					$this->db->where('email',$email);
					$this->db->update($tbl_peserta);
					$this->db->delete($tbl_verify, ['email' => $email ]);

					echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Akun anda sudah diverifikasi, silahkan login !</div>', 2);
					redirect('auth/login_peserta');

				}else{
					$this->db->delete($tbl_peserta, ['email' => $email]);
					$this->db->delete($tbl_verify, ['email' => $email]);

					echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Sorry, Token has been expired, please try register again ! </div>', 2);
					redirect('auth/login_peserta');
				} 

			}else{
				echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert">
					Sorry, Token is wrong ! </div>',2);
				redirect('auth/login_peserta');
			}
		}else{
			echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Sorry, Email is wrong ! </div>', 2);
			redirect('auth/login_peserta');
		};
	} /* batas verifikasi peserta*/


	function login_failed_super(){
		$url=base_url('auth/login_super');
		echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
		redirect($url);
	} /* batas login_filed_admin*/

	function login_failed_admin(){
		$url=base_url('auth/login_admin');
		echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
		redirect($url);
	} /* batas login_filed_admin*/
	
	function login_failed_mentor(){
		$url=base_url('auth/login_mentor');
		echo $this->session->set_tempdata('msg','<div class="alert alert-danger" role="alert"> Gagal masuk ! </div>', 2);
		redirect($url);
	} /* batas login_filed_admin*/
	

	function login_failed_peserta(){
		$url=base_url('auth/login_peserta');
		echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert"> Gagal masuk ! </div>', 2);
		redirect($url);
	} /* batas login_filed_peserta*/

	// redirecting
	public function login_success(){	
		if ($this->session->userdata('access')=='1') {
			redirect('super');
		}elseif ($this->session->userdata('access')=='2') {
			redirect('admin');
		}elseif ($this->session->userdata('access')=='3') {
			redirect('mentor');
		}elseif ($this->session->userdata('access')=='4') {
			redirect('peserta');
		}
	} /* batas login_success*/


	function logout(){
		$this->session->sess_destroy();
		$url=base_url('home');
		echo $this->session->set_tempdata('msg','<div class="alert alert-success" role="alert">
			Anda sudah logout !
			</div>', 2);
		redirect($url);
	} /* batas logout*/


} /*ini batas class Auth*/


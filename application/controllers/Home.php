<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//class Home diperuntukan untuk umum/ bisa diakses untuk publik

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		/*=== load ===*/

		$this->load->library('form_validation');
		$this->load->model('m_auth');
		$this->load->model('m_event');
		$this->load->model('m_config');
	} /*ini batas function contruct*/

//===================================>> halaman

	public function index()
	{
		$data['judul']='PIIB UNIVERSITAS HAMZANWADI'; 
		$data['data']=$this->m_event->get_all();
		$this->load->view('/templates/v_header', $data);
		$this->load->view('/home/v_landing', $data);
		$this->load->view('/templates/v_footer', $data);
	}

	public function event($id_event)
	{
		$data['judul']='Materi'; 
		$data['data']=$this->m_event->get_all();
		$data['data_event']=$this->m_event->get_event($id_event);
		$this->load->view('/templates/v_header', $data);
		$this->load->view('/home/v_event', $data);
		$this->load->view('/templates/v_footer', $data);
	}

} /*ini adalah batas class Home / this line is limit of Class Home*/

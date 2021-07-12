<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_home');
	}
	public function getlogin()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$this->load->model('m_login');
		$this->m_login->getlogin($u,$p);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}


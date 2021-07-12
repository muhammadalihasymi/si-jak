<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dash extends CI_Controller {

	
	public function __construct(){

        parent ::__construct();

	$this->load->model('m_squrity'); 
	$this->load->model('m_bayar');
	$this->load->helper('url'); 
	}

	
	public function index()
	{
		$isi['menu']='v_menu';
		$isi['content']='v_content';
		$isi['sum'] = $this->m_bayar->get_sum();
		$this->load->view('v_dash',$isi);
	}
	
	
}

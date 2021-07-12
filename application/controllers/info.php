<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller {

	
	public function __construct(){

        parent ::__construct();

	$this->load->model('m_squrity');  
	$this->load->helper('url'); 
	}

	
	public function index()
	{
	$this->m_squrity->getsqurity();	
	$isi['content']='v_info';
	$this->load->view('v_dash',$isi);
	}
 
}

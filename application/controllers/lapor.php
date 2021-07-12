<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lapor extends CI_Controller {

	
	public function __construct(){

        parent ::__construct();

	$this->load->model('m_squrity');
	$this->load->model('m_lapor');  
	$this->load->helper('url'); 
	}

	
	public function index()
  {
    $this->m_squrity->getsqurity();
    $isi['data'] = $this->m_lapor->view();
	$isi['content'] = 'v_lapor';
	$this->load->view('v_dash',$isi);   
    }

    public function sp()
  {
    $this->m_squrity->getsqurity();
    $isi['bgs'] = $this->m_lapor->bgs();
    $isi['btx'] = $this->m_lapor->btx();
    $isi['data'] = $this->m_lapor->view3();
    $isi['sum'] = $this->m_lapor->get_sum();
	$isi['content'] = 'laporan/v_sp2d';
	$this->load->view('v_dash',$isi);   
    }
}
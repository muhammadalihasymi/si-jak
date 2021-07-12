<?php
if (! defined('BASEPATH'))  exit('No direct script access allowed');

class m_squrity extends CI_model {

	public function getsqurity()
	{		
		$username = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('home');
		}
	}	
	

}

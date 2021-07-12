<?php
if (! defined('BASEPATH'))  exit('No direct script access allowed');

class m_login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd=md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query=$this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			 {
				$sessi = array('username'=> $row->username,
								'nm_user'=>$row->nm_user);
							   
				$this->session->set_userdata($sessi);
				redirect('dash');
			}
		}
		else 
		{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('home');
		}
	}

}

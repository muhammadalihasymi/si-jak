<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_lapor extends CI_model {
	public function tampil()
	{
		$hasil=$this->db->query("SELECT * FROM tbinput");
		return $hasil;
	}
public function view()
{
	$this->db->SELECT('kdskpd');
	$this->db->SELECT('jenispjk');
	$this->db->SELECT_SUM('nilaipajak');
	$this->db->FROM('tbinput');
	$this->db->GROUP_BY('jenispjk');
	$query = $this->db->get();
	 return $query->result();
	}

	
}
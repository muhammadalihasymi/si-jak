<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_bayar extends CI_model {
	public function tampil()
	{
		$hasil=$this->db->query("SELECT * FROM tbinput");
		return $hasil;
	}

	public function view()
	{
		
		$this->db->SELECT('*');
		$this->db->FROM('tbinput');
		$query = $this->db->get();
		 return $query->result();
		}
		

public function get_sum()
		{
			$sql="SELECT sum(nilaipajak) as nilai FROM tbinput";
			$result = $this->db->query($sql);
			return $result->row()->nilai;
}

function get(){
	$query = $this->db->query('SELECT * FROM tbskpd');
	return $query->result();
}
public function pajakku($data){
	$this->db->insert('tbinput',$data);
}

	public function delete($param)
	{
		$this->db->delete('tbinput',array('kdskpd'=>$param));
	}


}
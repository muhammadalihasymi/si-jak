<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayar extends CI_Controller {

	
	public function __construct(){

        parent ::__construct();

	$this->load->model('m_squrity');
	$this->load->model('m_bayar','',TRUE);  
	$this->load->helper('url'); 
	}

	
	public function index()
	{
  $this->m_squrity->getsqurity();
  $isi['data'] = $this->m_bayar->view();	
	$isi['content']='v_bayar';
	$this->load->view('v_dash',$isi);
	}
 
  public function tambah()
  { 
    $this->m_squrity->getsqurity();
    $data['yes']=$this->m_bayar->get();
    $data['content'] = 'f_bayar';
    $this->load->view('v_dash',$data);
  }

  public function insert()
   {
     
  $cek = $this->db->query("SELECT * FROM tbinput where ntpn='".$this->input->post('ntpn')."'")->num_rows();
  if ($cek<=0) {
   
          $data = array(
            'kdskpd' => $this->input->post('kdskpd'), 
          'skpd' => $this->input->post('skpd'),
          'tanggal' => $this->input->post('tanggal'),
          'nospp' => $this->input->post('nospp'),
          'nilaispp' => $this->input->post('nilaispp'),
          'nospm' => $this->input->post('nospm'),
          'nilaispm' => $this->input->post('nilaispm'),
          'jenispjk' => $this->input->post('jenispjk'),
         'nilaipajak' => $this->input->post('nilaipajak'),
         'npwp' => $this->input->post('npwp'),
         'idbilling' => $this->input->post('idbilling'),
         'ntpn' => $this->input->post('ntpn')
      );
      $this->m_bayar->pajakku($data);
 
      $this->session->set_flashdata('info', 'anda berhasil menginput data...!!!');
      redirect('bayar','refresh');
  }else {
     $this->session->set_flashdata('info', 'data sudah ada ...!!!');
      redirect('bayar','refresh');
  }
}

public function hapus($kdskpd)
{
  $this->m_bayar->delete($kdskpd);
  echo $this->db->affected_rows();
  {
    $this->session->set_flashdata('info','data berhasil dihapus');
    redirect('bayar');
  }
}

public function edit($idx)
      {
      if($this->input->post('simpan'))
      { 
      if($this->input->post('simpan'))
        
      $kdskpd = $this->input->post('kdskpd');
        $skpd = $this->input->post('skpd');
          $nospp = $this->input->post('nospp');
          $nilaispp = $this->input->post('nilaispp');
          $nospm= $this->input->post('nospm');
          $nilaispm = $this->input->post('nilaispm');
         $tanggal = $this->input->post('tanggal');
         $jenispjk= $this->input->post('jenispjk');
         $nilaipajak= $this->input->post('nilaipajak');
         $npwp= $this->input->post('npwp');
         $idbilling= $this->input->post('idbilling');
         $ntpn= $this->input->post('ntpn');;

    $object = array(
      'kdskpd' => $kdskpd,
        'skpd' => $skpd,
        'nospp' => $nospp,
        'nilaispp' => $nilaispp,
        'nospm' => $nospm,
         'nilaispm' => $nilaispm,
         'tanggal' => $tanggal,
         'jenispjk' => $jenispjk,
         'nilaipajak' => $nilaipajak,
         'npwp' => $npwp,
         'idbilling' => $idbilling,
         'ntpn' => $ntpn,

      );
      $this->db->where('idx',$idx);
      $this->db->update('tbinput',$object);
      if($this->db->affected_rows())
      {
        $this->session->set_flashdata('info','data berhasil di update');
        redirect('bayar');
      }
    
    else
    {
      $this->session->set_flashdata('info','data gagal di update');
      redirect('bayar');
    }

  }
  else
  {
     
    
        $data['content'] = 'v_edit';
        $data['editdata'] = $this->db->get_where('tbinput',array('idx'=>$idx))->row();
        $this->load->view('v_dash',$data);
      }
    }
}





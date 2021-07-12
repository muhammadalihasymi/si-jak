<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class import extends CI_Controller{

  public function __construct(){

    parent::__construct();

    $this->load->model('m_import');

    $this->load->library('excel');

  }

  function index(){
    $data['content']='v_import';
    $this->load->view('v_dash',$data);
  }

  function fetch(){

    $data = $this->m_import->select();
    $output = '

    <h3 align="center">Total Data - '.$data->num_rows().'</h3>

    <table class="table table-striped table-bordered">

     <tr>
     <th style="text-align: center;">Kode SKPD</th>
  	 <th style="text-align: center;">Perangkat Daerah</th>
  	 <th style="text-align: center;">Nomor SPP</th>
  	 <th style="text-align: center;">Nilai SPP</th>
  	 <th style="text-align: center;">Nomor SPM</th>
  	  <th style="text-align: center;">Nilai SPM</th>
  	 <th style="text-align: center;">Tanggal SPM</th>
  	 <th style="text-align: center;">Keterangan Pajak</th>
  	 <th style="text-align: center;">Nilai Pajak</th>
  	  <th style="text-align: center;">NPWP</th>
  	  <th style="text-align: center;">Id Billing</th>
  	  <th style="text-align: center;">NTPN</th>

     </tr>

    ';

    foreach($data->result() as $row){

      $output .= '

      <tr>
      <td>'.$row->kdskpd.'</td>
      <td>'.$row->skpd.'</td>
	  <td>'.$row->nospp.'</td>
	  <td>'.$row->nilaispp.'</td>
	  <td>'.$row->nospm.'</td>
	  <td>'.$row->nilaispm.'</td>
	  <td>'.$row->tanggal.'</td>
	  <td>'.$row->jenispjk.'</td>
	  <td>'.$row->nilaipajak.'</td>
	  <td>'.$row->npwp.'</td>	
      <td>'.$row->idbilling.'</td>
	  <td>'.$row->ntpn.'</td>

      </tr>

      ';

    }

    $output .= '</table>';

    echo $output;

  }

 

  function import(){

    if(isset($_FILES["file"]["name"])){

      $path = $_FILES["file"]["tmp_name"];

      $object = PHPExcel_IOFactory::load($path);

      foreach($object->getWorksheetIterator() as $worksheet){

        $highestRow = $worksheet->getHighestRow();

        $highestColumn = $worksheet->getHighestColumn();

        for($row=2; $row<=$highestRow; $row++){

          $kdskpd = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
           $skpd = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
           $nospp = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
           $nilaispp = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
           $nospm = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
           $nilaispm = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
           $tanggal = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
           $jenispjk = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
           $nilaipajak = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
           $npwp = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
           $idbilling = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
           $ntpn = $worksheet->getCellByColumnAndRow(11, $row)->getValue();

           $data[] = array(

            'kdskpd'  => $kdskpd,
            'skpd'  => $skpd,
      			'nospp'  => $nospp,
      			'nilaispp'  => $nilaispp,
      			'nospm'  => $nospm,
      			'nilaispm'  => $nilaispm,
      			'tanggal'  => $tanggal,
      			'jenispjk'  => $jenispjk,
      			'nilaipajak'  => $nilaipajak,
      			'npwp'  => $npwp,
      			'idbilling'  => $idbilling,
            'ntpn'   => $ntpn

           );

        }

      }
      $this->m_import->insert($data);

      echo 'Data Imported successfully';

    }

  }

}

?>
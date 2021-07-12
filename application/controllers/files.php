<?php

defined('BASEPATH') OR exit('No direct script access allowed');

  class files extends CI_Controller {

    function index(){

      $this->load->model("m_files");

      $data["employee_data"] = $this->m_files->fetch_data();
      $data["content"]='v_files';
      $this->load->view("v_dash", $data);

    }

    function action(){

        $this->load->model("m_files");
  
        $this->load->library("excel");
  
        $object = new PHPExcel();
  
        $object->setActiveSheetIndex(0);
  
        $table_columns = array("kdskpd","skpd","nospp", "nilaispp", "nospm", "nilaispm", "tanggal", "jenispjk", "nilaipajak", "npwp", "idbilling", "ntpn");
  
        $column = 0;
  
        foreach($table_columns as $field){
  
          $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
  
          $column++;
  
        }
  
        $employee_data = $this->m_files->fetch_data();
  
        $excel_row = 2;
  
        foreach($employee_data as $row){
          $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->kdskpd);
          $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->skpd);
          $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nospp);
          $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nilaispp);
          $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->nospm);
          $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->nilaispm);
          $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->tanggal);
          $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->jenispjk);
          $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->nilaipajak);
          $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->npwp);
          $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->idbilling);
          $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->ntpn);
  
          $excel_row++;
  
        }
  
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  
        header('Content-Type: application/vnd.ms-excel');
  
        header('Content-Disposition: attachment;filename="laporpajak21.xls"');
  
        $object_writer->save('php://output');
  
      }
  
    }
  
  
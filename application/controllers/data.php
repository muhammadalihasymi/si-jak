<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		$data['pelanggan'] = $this->m_import->get_all();
        $data['content'] = 'v_data';
		$this->load->view('v_dash', $data);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pmsan extends CI_Controller {

	public function index()
	{
		$this->load->view('Pesan/Data_pemesan');
		
	}

}
?>
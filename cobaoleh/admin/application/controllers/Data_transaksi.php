<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_transaksi extends CI_Controller {

	public function index()
	{
		$this->load->view('Transaksi/Data_transaksi');
		
	}

}
?>
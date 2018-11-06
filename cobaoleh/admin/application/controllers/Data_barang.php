<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function index()
	{
		$this->load->view('Datamaster/Data_barang');

	}

}
?>
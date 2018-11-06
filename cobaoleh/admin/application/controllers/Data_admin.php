<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Datamaster/Data_admin');
		
	}

}
?>
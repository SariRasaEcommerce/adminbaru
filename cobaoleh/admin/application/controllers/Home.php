<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Content');
		$this->load->view('Home/Sidebar');
		$this->load->view('Home/Footer');

	}

}
?>
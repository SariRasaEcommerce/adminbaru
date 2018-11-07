<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Datapengguna_model');
		$this -> model = $this -> Datapengguna_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index()
	{
		$data = array(
			'data_pengguna' => $this -> Datapengguna_model -> get_datapengguna(),
		);
		$this->load->view('Datamaster/Data_pengguna', $data);
		
	}

}
?>
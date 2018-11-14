<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_bukti extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Dataupload_model');
		$this -> model = $this -> Dataupload_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index()
	{
		$data = array(
			'data_upload' => $this -> Dataupload_model -> get_dataupload(),
		);
		$this->load->view('Uploadbukti/upload_bukti', $data);
		
	}

}
?>
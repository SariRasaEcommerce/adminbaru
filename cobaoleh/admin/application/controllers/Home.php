<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function Dashboard()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Dashboard');
		$this->load->view('Home/Sidebar_dashboard');
		$this->load->view('Home/Footer');

	}

	public function Databarang()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Data_barang');
		$this->load->view('Home/Sidebar_databarang');
		$this->load->view('Home/Footer');

	}

	public function Datapengguna()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Data_pengguna');
		$this->load->view('Home/Sidebar_datapengguna');
		$this->load->view('Home/Footer');

	}

	public function Datapemesanan()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Data_pemesanan');
		$this->load->view('Home/Sidebar_datapemesanan');
		$this->load->view('Home/Footer');
	}

	public function Datatransaksi()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Data_transaksi');
		$this->load->view('Home/Sidebar_datatransaksi');
		$this->load->view('Home/Footer');

	}

	public function Dataadmin()
	{
		$this->load->view('Home/js');
		$this->load->view('Home/Main_header');
		$this->load->view('Home/Data_admin');
		$this->load->view('Home/Sidebar_dataadmin');
		$this->load->view('Home/Footer');

	}

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Databarang_model');
		$this -> model = $this -> Databarang_model;
		$this -> load -> database();
		$this -> load -> helper('url');
	}
	public function index()
	{
		$data = array(
			'data_barang' => $this -> Databarang_model -> get_databarang(),
		);
		$this->load->view('Datamaster/Data_barang', $data);

	}
	public function insert(){
		$this -> load -> view('Datamaster/Tambah_databarang');
	}
	public function create(){
		if(isset($_POST['btnSubmit'])){
        	$config = array('upload_path' => './assets/webadmin/img/',
        					'allowed_types' => 'gif|jpg|png'
        					);
        	$this -> load -> library ('upload',$config);
        	if ($this->upload->do_upload('img'))
    		{
        		$upload_data = $this -> upload -> data ();
        		$adminn = $this -> input -> post ('adminn');
        		$nm_barang = $this -> input -> post ('nama_brg');
        		// $this-> Kategori_model ->get_kategori();
        		$hrg = $this -> input -> post ('hrg');
        		$des = $this -> input -> post ('des');
        		$brt = $this -> input -> post ('brt');
        		$stokk = $this -> input -> post ('stokk');
        		$foto = "assets/webadmin/img/".$upload_data['file_name'];
				$data = array(
				'ID_BARANG' => $this->session->userdata('ID_BARANG'),
				'ID_ADMIN' => $adminn,
				'NAMA_BARANG' => $nm_barang,
				'BERAT' => $brt,
				'DESKRIPSI' => $des,
				'IMG' => $foto,
				'HARGA_BARANG' => $hrg,
				'STOK' => $stokk
				);
				$insert_data = $this->db->insert('tbl_barang',$data);
			if ($insert_data) {
				redirect(base_url().'index.php/Data_barang');
			 } else{
				echo "string";
			 }
		}
		else
		{
			echo "string1";
		}
	}
}
}
?>
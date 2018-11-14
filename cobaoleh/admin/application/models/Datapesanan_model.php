<?php
	class Datapesanan_model extends CI_Model{ 
		public $id ='ID_TRANSAKSI';
		public $table ='tbl_transaksi';
		function get_datatransaksi(){
			return $this->db->query('SELECT * FROM tbl_transaksi ORDER BY ID_TRANSAKSI DESC')->result();
		}
	}
?>
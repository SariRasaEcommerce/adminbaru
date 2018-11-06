<?php
	class Databarang_model extends CI_Model{ 
		public $id ='ID_BARANG';
		public $table ='tbl_barang';
		function get_databarang(){
			return $this->db->query('SELECT * FROM tbl_barang ORDER BY ID_BARANG DESC')->result();
		}
	}
?>
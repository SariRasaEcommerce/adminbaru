<?php
class Datapengguna_model extends CI_Model{
	public $id ='ID_PELANGGAN';
		public $table ='tbl_pelanggan';
		function get_datapengguna(){
			return $this->db->query('SELECT * FROM tbl_pelanggan ORDER BY ID_PELANGGAN DESC')->result();
		}
}
?>
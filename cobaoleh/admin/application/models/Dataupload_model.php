<?php
/**
 * 
 */
class Dataupload_model extends CI_Model
{
	public $id ='ID_BARANG';
	public $table ='tbl_barang';
		function get_dataupload(){
			return $this->db->query('SELECT * FROM tbl_buktitf ORDER BY ID_BUKTI DESC')->result();
		}
}
?>
<?php defined('BASEPATH') or exit("Jangan coba coba akses ya");

class Coba_model extends CI_Model {
	
	private $tabel = 'test';

	function __construct(){
		parent::__construct();
	}

	function getSemuaData(){
		return $this->db->get($this->tabel)->result_array();	
	}

	function getDataId($id){
		$this->db->where('id', $id);
		return $this->db->get($this->tabel)->row_array();
	}
}

<?php defined('BASEPATH') or exit("Ga boleh akses");

class Post extends CI_Controller {
	function index(){
		$this->load->model('coba_model');
		$data['semua_artikel'] = $this->coba_model->getSemuaData();
		$this->load->view('tampilan_semua_artikel', $data);
	}

	function lihat($id){
		$this->load->model('coba_model');
		$data['artikel'] = $this->coba_model->getDataId($id);
		$this->load->view('tampilan_satu_artikel', $data);
	}
}

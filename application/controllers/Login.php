<?php defined('BASEPATH') or exit("Yahhh...Ga boleh ngakses ya");

class Login extends CI_Controller {

	function index(){
		echo "ini index ya, otomatis ke load ketika dipanggil --> index.php/login";
	}

	function fungsi_a(){
		echo "ini tampilan dari fungsi a --> index.php/login/fungsi_a";
	}

	function fungsi_b($parameter_pertama, $parameter_kedua){
		echo "Get value dari parameter\n";
		echo "P1 = ".$parameter_pertama."\n";
		echo "P2 = ".$parameter_kedua."\n";
	}

	function fungsi_c(){
		// render view
		$this->load->view('tampilan_apa_aja');
	}

	function fung_seterusnya(){
		$data = [
			"kunci_a" => "Data dari kunci A",
			"kunci_b" => "Data dari kunci B",
			"judul" => "Judul HTML ni, lihat di title bar browser"
		];

		$data["ini_pun_sama"] = "Apa pun yang ingin di tulis";

		$this->load->view('terima_data_dari_controller', $data);
	}
}

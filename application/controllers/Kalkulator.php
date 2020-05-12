<?php defined('BASEPATH') or exit("no access");

class Kalkulator extends CI_Controller {
	function tambah($a, $b){
		echo $a." + ".$b." = ". ($a+$b);
	}

	function kurang($a, $b){
		echo $a." - ".$b." = ". ($a-$b);
	}

	function bagi($a, $b){
		echo $a." / ".$b." = ". ($a/$b);
	}

	function kali($a, $b){
		echo $a." * ".$b." = ". ($a*$b);
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {


	public function index(){
		$this->load->view('form');
		//echo "helloo";
	}
	public function data(){
		var_dump($_POST);
	}
}
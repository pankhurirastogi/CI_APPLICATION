<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		 $this->load->library('session');
		 $loggedIn = FALSE;
		 //var_dump($this->session->all_userdata());
		if($this->session->userdata('username')!=false)
		// {
			$loggedIn = TRUE;
          $this->load->model('nibusermod');
             $data2['type']="offline events";
             $data2['result'] = $this->nibusermod->getoffline();
                       $data2['flag']=false;
             $data['data2'] = $data2;
		// }
		 $data['loggedIn'] = $loggedIn;
		$this->load->view('home/home',$data);
		//$this->load->view('welcome_message');
	}

	public function a(){
		  echo $this->input->post('name');
		session_start();
		$_SESSION['in'] = 1;
	}

	
	 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
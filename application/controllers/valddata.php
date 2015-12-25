<?php
  class Valddata extends CI_Controller {

	public function  ubr()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'TITLE', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('slug', 'Password', 'required');
//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
//$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form');
		}
		else
		{
			//$this->load->view('formsuccess');
			echo 'no success';
		}
	}
}

?>
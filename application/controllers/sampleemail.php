<?php
  class Sampleemail extends CI_Controller
    {
    	public function sendemail()
    	  {
    	  	  echo 'hi';
    	  	$this->load->library('email');
    	  	$this->email->from('pankhurirastogi11@gmail.com');
 	      	$this->email->to('pankhurirastogi06@gmail.com');
 	      	$this->email->subject('for forgotten password');
 	      	$this->email->message('please go to beach');
 	      	$this->email->send();
 	      	echo 'done';
 	      
    	  }
    }
?>
<?php
 /**
 * 
 */
 class Nibeuser extends CI_Controller
 {
 	
 	 public function __construct()
 	{
 		# code...
 		parent::__construct();
 		$this->load->library('session');
 		//echo 'hoo';

 	}
 	public function usersignup()
 	 {
 	   $this->load->view('lasttri');
 		
 	 }
 	
 	 public function val()
 	 {
 	      $this->load->library('form_validation');
        $this->load->database();
 	      $this->form_validation->set_rules('username','username','required|min_length[4]|trim|xss_clean');
        $this->form_validation->set_rules('branch','branch','required|min_length[2]|trim|xss_clean');
        $this->form_validation->set_rules('admissionno','admissionno','required|min_length[4]|trim|xss_clean');
        $this->form_validation->set_rules('password','password','trim|required|min_length[4]|max_length[10]|');
 	      $this->form_validation->set_rules('emailid','emailid','required|valid_email|min_length[10]|is_unique[users.emailid]');
 	      $this->form_validation->set_rules('phoneno','phoneno','required|trim|validate_phone_number');
        
        
 	      if($this->form_validation->run()==FALSE)
 	      {
 	      	//echo 'notdone';
           echo Validation_errors();
          //$this->load->view('lasttri');
 	      }
 	      else
 	      {  //echo 'done';
 	      	$this->load->model('nibusermod');
             $this->nibusermod->adduser();
             
 	      	echo 'done';
 	      }
 	 }
   function validate_phone_number( $string ) {
    if ( preg_match( '/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/', $string ) ) {
        return TRUE;
    } else {
        return FALSE;
    }
}

 	 public function loginmodule()
 	 {
 	 	$this->load->view('nibsignin');
 	 }
 	 public function signin()
 	   { //$this->load->library('session');
 	   	 $user=$this->input->post('username');
 	   	 $pass=md5($this->input->post('password'));
 	   	 $this->load->model('nibusermod');
       if( $this->nibusermod->signinn($user,$pass))
       {
       // $arr=$this->session->all_userdata();
       // print_r($arr);
        $this->session->set_userdata('username',$user);
        $ar= $this->session->all_userdata();
        echo json_encode($ar);

       }
       else
       {
         $this->session->set_userdata('username','');
         $ar= $this->session->all_userdata();
         echo json_encode($ar);

       }


 	   }
 	 public function yo() 
 	   {
 	   	$this->load->view('forget');
 	   } 

 	  public function forgetpass()
 	  { // echo 'hii';
 	  	$this->load->library('form_validation');
 	    $this->form_validation->set_rules('emailid','emailid','required|valid_email');
 	      if($this->form_validation->run()==FALSE)
 	      {
 	      	           echo Validation_errors();

 	      }
 	      else
 	      {
 	      	  $var=$this->input->post('emailid');
           $this->load->model('nibusermod');
           if($this->nibusermod->check_email($var))
           {  //echo 'found';
           	 $this->send_email();
           }
           else
           	{

           	}




 	      	
 	      }


 	  }
 	 public function send_email()

 	      { $email=$this->input->post('emailid');
 	         $this->load->helper('string');
 	         $rs=random_string('alnum',12);
 	         $data=array('rs'=>$rs);
 	         $this->db->where('emailid',$email);
 	         $this->db->update('users',$data);
           echo 'done';

            //this function will be called by  user 
 	        // $this->get_pass($rs);

           /*code for sending email*/
 	      	//$this->load->library('email');

 	      	//$this->email->from('');
 	      	//$this->email->to($email);
 	      	//$this->email->subject('for forgotten password');
 	      	//$this->email->message('please go to the following link http://localhost/nibbleSite/index.php/Nibeuser/get_pass/'.$rs);
 	      	//$this->email->send();
 	      }
 	    public  function get_pass()//to be called by user
 	    {    
             // $this->load->view('repass');
             // $this->load->database();
             //  $this->load->helper(array('form','url');
             $rs=$this->input->post('actkey');
             $data=array('rat'=>$rs);
 	    	    $this->load->view('repass',$data);
            //echo 'done';

          

 	         	  	  
 	      }



              


              //echo 'done';


 	    
 	    public function taken_pass($rs=false)

 	    {
 	    	// $data=array('password'=>md5($this->input->post('password')),'rs'=>'');
              $this->load->library('form_validation');
              $this->load->database();
            $this->form_validation->set_rules('password','password','trim|required|min_length[4]|max_length[8]|');
            $this->form_validation->set_rules('conpass','conpass','required|trim|matches[password]');
            if($this->form_validation->run()==FALSE)
           {
               echo false;
           }
           else
           { $var=$this->input->post('hid');
             $ar=array('rs'=>$var);
            $query=$this->db->get_where('users',$ar,1);
              if($query->num_rows()==0)
                  {
                    echo 'invalid request';
                  }
                  else
                  {
                    $data=array('password'=>md5($this->input->post('password')),'rs'=>'');
                    $where=$this->db->where('rs',$var);
                    $where->update('users',$data);
                    echo 'congratulations your password has been changed';
                  }
            }       


 	    	
 	    }

      public function adminlogin()//for admin login
      {
        $this->load->view('adminlog');
      }

      public function adminsignin()
      {
        $user=$this->input->post('username');
       $pass=$this->input->post('password');
       $this->load->model('nibusermod');
        if(  $this->nibusermod->adminsi($user,$pass))
           {
            $this->load->view('data_entry');
           }
              
      }
           
      public function enter_data()
      {    $name=$this->input->post('eventname');
            $date=$this->input->post('eventdate');
            $time=$this->input->post('eventtime');
            $venue=$this->input->post('eventvenue');
            $type=$this->input->post('eventtype');
            $dis=$this->input->post('eventdisp');
            $this->load->model('nibusermod');
            $this->nibusermod->enter_event($name,$date,$time,$venue,$type,$dis);
      }  
      public function displayonlineevents()
       {
          $this->load->model('nibusermod');
          $data['type']="online events";
          $data['result'] = $this->nibusermod->getonline();
          $data['flag']=TRUE;
             $this->load->view('hoo',$data);



       }
        public function displayofflineevents()
       {
          $this->load->model('nibusermod');
             $data['type']="offline events";
             $data['result'] = $this->nibusermod->getoffline();
                       $data['flag']=false;

             $this->load->view('hoo',$data);


       }

       public function trialFunction()
       {
         // echo 'i m in nibeuser';
          $this->load->view('repass');
       }

       public function send_message()
       {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('emailid','emailid','required|valid_email|min_length[10]');
        if($this->form_validation->run()==FALSE)
        {
          
           echo Validation_errors();
          
        }
        else
        {  
        $this->load->model('nibusermod');
        $this->nibusermod->contact();
        }

       }

    public function logout()
    {
      $this->session->unset_userdata('username');

    }
    public function loadActivationKeyPage()
    {
      $this->load->view('activate');
    }
    public function regsuccess()
    {
      $this->load->view('regsucess');
    }

 }
?>
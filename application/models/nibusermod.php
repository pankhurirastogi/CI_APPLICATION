<?php
class Nibusermod extends CI_Model
   {
   	

	
	 public function __construct()
	{
		
	 $this->load->database();
	 
	}
  public function adduser()
  {
  	$data = array(
		'username' => $this->input->post('username'),
    'branch'=>$this->input->post('branch'),
		'password' => md5($this->input->post('password')),
		'emailid' => $this->input->post('emailid'),
    'admission_number'=>$this->input->post('admissionno'),
    'phoneno'=>$this->input->post('phoneno')

    
     //'admission_number'=>$this->input->post('admissionno'),
     //'phoneno'=>$this->input->post('phoneno')
	);
	$this->db->insert('users',$data);


	 
	 
  }
  public function signinn($user,$pass)
   {      
          $this->db->where('username',$user);
	 $this->db->where('password',$pass);
	 $query= $this->db->get('users');
	 //$ar=$query->result_array();
     	//  print_r($ar);
   if($query->num_rows==0)
       {
         return false;
       }
       else 
          return true;
       
       
   }

  public function check_email($var)

    {
    	$this->db->where('emailid',$var);
    	$query=$this->db->get('users');
    	if($query->num_rows()==1)
    	{
    		return true;
    	}
    	else return false;

    } 
    public function adminsi($user,$pass)
   {      echo 'yoyo';
          $this->db->where('adminname',$user);
	 $this->db->where('adpassword',$pass);
	 $query= $this->db->get('admin');
	 $ar=$query->result_array();
     	  print_r($ar);
     	  return true;
   }
   public function enter_event($name,$date,$time,$venue,$type,$dis)
   {
         	$data = array(
		'eventname' => $name,
		'eventtime' =>  $time,
		'eventdate' => $date,
		'eventvenue'=>$venue,
		'type'=>$type,
		'discription'=>$dis
        
		
	);
	$this->db->insert('events',$data);
	echo 'done';
   }
  public function getonline()

     {  //echo 'yoyo';
     	//$this->db->where('type','online');
     	//$this->db->select('eventname');
        $this->db->select('eventname');
        $this->db->where('type','online');
     	$query=$this->db->get('events');
     	 return $ar=$query->result();
     	 
     /*foreach ($query->result() as $row) {

     		# code..
     		echo $row->eventname ."<br>";

     	}*/
     	
     	
     }
     public function getoffline()

     {  //echo 'yoyo';
     	//$this->db->where('type','online');
     	//$this->db->select('eventname');
        $this->db->select('eventname');
        $this->db->where('type','offline');
     	$query=$this->db->get('events');
     	return $ar=$query->result();
       //echo json_encode($ar);
     	 
     	/*foreach ($query->result() as $row) {

     		# code..
     		echo $row->eventname ."<br>";

     	}*/
     // print_r($ar);
     	
     	
     }
     public function contact()
     {
      $data = array(
    'name' => $this->input->post('name'),
    'emailid'=>$this->input->post('emailid'),
    'subject' => $this->input->post('subject'),
    'message' => $this->input->post('message')

    
     //'admission_number'=>$this->input->post('admissionno'),
     //'phoneno'=>$this->input->post('phoneno')
  );
  $this->db->insert('contact',$data);
  echo 'done';

     }

   }
?>
<?php
/**
* 
*/
class Myfrmhandel extends CI_Model
{
	
	 public function __construct()
	{
		
	 $this->load->database();
	 echo 'hi';
	}
  public function mys($titl,$slug)
  {
  	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $this->input->post('slug'),
		'text' => $this->input->post('text')
	);
	$this->db->insert('news',$data);
	echo 'done';
	 
	 $this->db->where('title',$titl);
	 $this->db->where('slug',$slug);
	 $query= $this->db->get('news');
	 $ar=$query->result_array();
     	  print_r($ar);
  }
}
?>
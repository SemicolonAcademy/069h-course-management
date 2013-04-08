<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions_m extends CI_Model{
	
	function __construct(){
	
		parent::__construct();
	}
	
	function get_questions(){

		 $query = $this->db->get('questions'); 
		 return $query->result_array();
		
	}
	
	function delete_questions(){
		
		$query = $this->delete('questions',array('id',$id));
		
	}


}

?>

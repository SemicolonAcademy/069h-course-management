<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exams_m extends CI_Model {
  
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
        
     
    function get_exams()
    {
        $query = $this->db->get('exam');
        return $query->result_array();
    }

  
    
 	function delete_exam($id)
    {
        $this->db->delete('exam', array('id' => $id));       
        
    }
    
    function insert_exam($data){
    	return $this->db->insert('exam', $data);
    	
    }
    
    function get_exambyid($id){

    	$this->db->where('id',$id);
    	$query = $this->db->get('exam');
        return $query->row_array();        
    	
    }
} ?>
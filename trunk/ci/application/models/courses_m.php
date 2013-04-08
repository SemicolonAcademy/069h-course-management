<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses_m extends CI_Model {

  

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_courses()
    {
        $query = $this->db->get('courses');
        return $query->result();
    }
	
    function get_coursebyid($id)
    {
        $this->db->where('id',$id);
    	$query = $this->db->get('courses');
        return $query->row_array();
    }
    
    
 	function delete_courses($id)
    {
    	$this->db->where('id',$id);
        return $this->db->delete('courses');       
        
    }
    
    function insert_course($data)
    {
		return $this->db->insert('courses', $data);
    }
    
 	function update_course($data, $id)
    {
                
		$this->db->where('id',$id);	
        return $this->db->update('courses', $data);
    }
    
    

} ?>
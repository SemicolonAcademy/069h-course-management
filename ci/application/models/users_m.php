<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_m extends CI_Model {

  

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_users()
    {
        $this->db->select('*, user_type.name as user_type_name');
        $this->db->from('users');
    	$this->db->join('user_type','users.user_type = user_type.id');        
        $query = $this->db->get();
        return $query->result_array();
        
        
        
    }

    function search($q){
    	
    	$this->db->select('*, user_type.name as user_type_name');
        $this->db->from('users');
    	$this->db->join('user_type','users.user_type = user_type.id');        
        $this->db->like('username', $q); 
    	$this->db->or_like('first_name', $q);
    	$query = $this->db->get();
    	
        return $query->result_array();
         
    	
    	
    	
    }
    
     function get_user($id)
    {
        $this->db->select('*, user_type.name as user_type_name');
    	$this->db->join('user_type','users.user_type = user_type.id');
        $this->db->where('users.id',$id);        
    	$query = $this->db->get('users');
    	    	
        return $query->row_array();
    }
        
    
    function insert_user($data)
    {        
    	$data['created_at'] = time();
        return $this->db->insert('users', $data);
    }

    function update_user($data, $id)
    {
        $data['created_at'] = time();        
		$this->db->where('id',$id);	
        return $this->db->update('users', $data);
    }
    
 	function dalete_user($id)
    {
        return $this->db->delete('users', array('id' => $id));       
        
    }
    
    

} ?>
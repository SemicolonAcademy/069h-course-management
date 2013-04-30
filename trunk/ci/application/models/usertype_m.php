<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usertype_m extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_usertype()
    {
        $query = $this->db->get('user_type');
        return $query->result();
    }

}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usertype extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Users_m');
        
    }
    
	public function index()
	{		
		$data['usertype'] = $this->Usertype_m->get_usertype();		
		$data['page'] = 'usertype';
		
				
		$data['page_title'] = 'Recent usertype'; 
		$this->load->view('admin/usertype', $data);
	}
    
}
?>
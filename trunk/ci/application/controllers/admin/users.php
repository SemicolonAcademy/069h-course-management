<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Users_m');

        
        $this->load->library('form_validation');
    
        $validation_rules = array(
               array(
                     'field'   => 'username', 
                     'label'   => 'Username', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password', 
                     'label'   => 'Password', 
                     'rules'   => 'required'
                  ),                  
               array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'required|valid_email'
                  ),
                  array(
                     'field'   => 'usertype', 
                     'label'   => 'User Type', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'firstname', 
                     'label'   => 'First Name', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'midname', 
                     'label'   => 'Middle Name', 
                     'rules'   => ''
                  ),
                  array(
                     'field'   => 'lastname', 
                     'label'   => 'Last Name', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'phone', 
                     'label'   => 'Phone', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'address', 
                     'label'   => 'Address', 
                     'rules'   => 'required'
                  ),
                  array(
                     'field'   => 'website', 
                     'label'   => 'Website', 
                     'rules'   => 'required'
                  ),
            );

		$this->form_validation->set_rules($validation_rules);
		        
    }
  
	public function index()
	{		
		$data['users'] = $this->Users_m->get_users();		
		$data['page'] = 'users';
		
		/*
		echo "<pre>";
		print_r($data['users']);
		echo "</pre>"; */
		
		
		$data['page_title'] = 'Recent Users'; 
		$this->load->view('admin/users', $data);
	}
	
	public function delete($id){
	
		$this->Users_m->dalete_user($id);
		redirect('admin/users');		
		
	}
	
	public function create(){		
		
		
		$data['page'] = 'users';
		$data['page_title'] = 'Create user';
		
	

		if ($this->form_validation->run())
		{
			//$this->load->view('myform');
			
			$userdata = array (
  				'username' => $this->input->post('username'),
  				'password' => $this->input->post('password'),
  				'email' => $this->input->post('email'),
  				'user_type' => $this->input->post('usertype'),
  				'first_name' => $this->input->post('firstname'),
  				'mid_name' => $this->input->post('midname'),
  				'last_name' => $this->input->post('lastname'),
  				'phone' => $this->input->post('phone'),
  				'address' => $this->input->post('address'),
  				'website' => $this->input->post('website') 			
			);
			
			if ($this->Users_m->insert_user($userdata)){
				redirect ('admin/users');
			}
			
			
			//insert date 
			//redirect 
		}	
		
		
		$this->load->view('admin/create_user',$data);
		
	}
	
	public function edit($id){
		
		$data['page'] = 'edit_user';
		$data['page_title'] = 'Edit user';
		
		$data['user']= $this->Users_m->get_user($id);

		if ($this->form_validation->run())
		{
			//$this->load->view('myform');
			
			$userdata = array (
  				'username' => $this->input->post('username'),
  				'password' => $this->input->post('password'),
  				'email' => $this->input->post('email'),
  				'user_type' => $this->input->post('usertype'),
  				'first_name' => $this->input->post('firstname'),
  				'mid_name' => $this->input->post('midname'),
  				'last_name' => $this->input->post('lastname'),
  				'phone' => $this->input->post('phone'),
  				'address' => $this->input->post('address'),
  				'website' => $this->input->post('website')  			
			);
			
			if ($this->Users_m->update_user($userdata, $id)){
				redirect ('admin/users');
			}
			
		}
		
		
		$this->load->view('admin/edit_user',$data);
		
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Users_m');
      //  $this->load->library('upload');        
        $this->load->library('form_validation');
     	$this->load->model('Usertype_m');
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
                     'rules'   => ''
                  ),
                   array(
                     'field'   => 'picture', 
                     'label'   => 'Picture', 
                     'rules'   => ''
                  ),
                  
            );

		$this->form_validation->set_rules($validation_rules);
		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';			
		$this->load->library('upload', $config);
			
		        
    }
  
	public function index()
	{		
		$data['users'] = $this->Users_m->get_users();		
		$data['page'] = 'users';
		
		//echo $this->db->last_query();
		
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
		
		$all_usertype = $this->Usertype_m->get_usertype();
		$usertype_select = array();
		
		foreach ($all_usertype as $u){
			$usertype_select [$u->id] = $u->name;
		}
		
		$data['usertype_select'] = $usertype_select;		
		
		if ($this->form_validation->run())
		{
			//$this->load->view('myform');
				
			
			$field_name = "picture";
			
			if ( ! $this->upload->do_upload('picture'))
			{
				$error = array('error' => $this->upload->display_errors());
	
				//$this->load->view('upload_form', $error);
				$this->form_validation->set_message('picture', 'Error Message');
				
			}
			else
			{
				$upload_data = $this->upload->data();
				
				/*
				echo "<pre>";
				print_r($upload_data);
				exit;
				*/
			
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
  				'website' => $this->input->post('website'),
				'picture' => $upload_data['file_name']	
			);
			
			if ($this->Users_m->insert_user($userdata)){
				redirect ('admin/users');
			}
			
	
				$this->load->view('upload_success', $data);
			}
						
			
			//insert date 
			//redirect 
		}	
		
		
		$this->load->view('admin/create_user',$data);
		
	}
	
	public function edit($id){
		
		$data['page'] = 'edit_user';
		$data['page_title'] = 'Edit user';
		$all_usertype = $this->Usertype_m->get_usertype();
		$usertype_select = array();
		
		foreach ($all_usertype as $u){
			$usertype_select [$u->id] = $u->name;
		}
		
		$data['usertype_select'] = $usertype_select;		
				
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
	
	function search(){
	
	$data['page'] = 'users';		
	
	$q = $this->input->post('query');
	
	//$this->data->search_result = $this->Users_m->search($q);
	$data['users'] = $this->Users_m->search($q);
	
	$this->load->view('admin/users', $data);
	
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
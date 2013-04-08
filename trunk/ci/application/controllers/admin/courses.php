<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Courses_m');

                
        $this->load->library('form_validation');
    
        $validation_rules = array(
               array(
                     'field'   => 'name', 
                     'label'   => 'Coursename', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'description', 
                     'label'   => 'Description', 
                     'rules'   => 'required'
                     ),
            );

		$this->form_validation->set_rules($validation_rules);
		      
        
    }
	public function index()
	{	
		$data['courses'] = $this->Courses_m->get_courses();			
		$data['page_title'] = 'Courses'; 
		$data['page'] = 'courses';     		
		
		$this->load->view('admin/courses', $data);
	}
	public function delete($id){
	
		$this->Courses_m->delete_courses($id);
		redirect('admin/courses');		
		
	}
	
	public function create(){
		$data['page'] = 'courses';
		$data['page_title'] = 'Add Course';	

		if ($this->form_validation->run())
		{
			//$this->load->view('myform');
			
			$coursedata = array (
  				'name' => $this->input->post('name'),
  				'description' => $this->input->post('description'),
  			);
			
			if ($this->Courses_m->insert_course($coursedata)){
				redirect ('admin/courses');
			}
			
		}			
		
		$this->load->view('admin/create_course',$data);		
	}
	
	public function update($id){

		$data['page'] = 'edit_course';
		$data['page_title'] = 'Edit Course';
		
		$data['course']= $this->Courses_m->get_coursebyid($id);

		if ($this->form_validation->run())
		{
			
			$coursedata = array (
  				'name' => $this->input->post('name'),
  				'description' => $this->input->post('description'),
  							
			);
			
			if ($this->Courses_m->update_course($coursedata, $id)){
				redirect ('admin/courses');
			}
		}
			
		
		$this->load->view('admin/edit_course',$data);
	}
		
}

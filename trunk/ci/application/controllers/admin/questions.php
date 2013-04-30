<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Controller {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Questions_m');		 
		
        
    }
	
	public function index()
	{	
			
		$data['page_title'] = 'Questions'; 
		$data['page'] = 'questions';     		
		
		$data['questions'] = $this->Questions_m->get_questions();
		$this->load->view('admin/questions', $data);
	}
	
	public function create(){
		
		$data['page'] = "questions";
		$data['page_title'] = "Add Questions";
		
		$coursedata = array (
  				'name' => $this->input->post('name'),
  				'description' => $this->input->post('description'),
  			);
			
			if ($this->Courses_m->insert_course($coursedata)){
				redirect ('admin/courses');
			}
				
		$this->load->view('admin/create_course',$data);		
		
	}
	
	public function delete($id)
	{
			$this->Questions_m->delete_questions($id);
			redirect('admin/questions');	
	}
}

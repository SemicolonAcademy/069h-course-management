<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exams extends CI_Controller {
function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('Exams_m');
        
        $this->load->model('Courses_m');
        

        $this->load->library('form_validation');
    
        $validation_rules = array(
               array(
                     'field'   => 'name', 
                     'label'   => 'Exam name', 
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'description', 
                     'label'   => 'Description', 
                     'rules'   => 'required'
                     ),
                array(
                     'field'   => 'full_marks', 
                     'label'   => 'Full Marks', 
                     'rules'   => 'required|integer'
                     ),
                 array(
                     'field'   => 'pass_marks', 
                     'label'   => 'Pass Marks', 
                     'rules'   => 'required|integer'
                     ),
                 array(
                     'field'   => 'start_time', 
                     'label'   => 'Start Time', 
                     'rules'   => 'required|integer'
                     ),
                 array(
                     'field'   => 'end_time', 
                     'label'   => 'End time', 
                     'rules'   => 'required|integer'
                     ),
                 array(
                     'field'   => 'date', 
                     'label'   => 'Date', 
                     'rules'   => 'required|alpha_numeric'
                     ),
                 array(
                     'field'   => 'course_id', 
                     'label'   => 'Course', 
                     'rules'   => 'required'
                     ),
        );

		$this->form_validation->set_rules($validation_rules);
		     
        
    }
	

	public function index()
	{	
		$data['exams'] = $this->Exams_m->get_exams();	
		$data['page_title'] = 'exams';
		$data['page'] = 'exams';     		
		
		$this->load->view('admin/exams', $data);
	}
	public function delete($id){
	
		$this->Exams_m->delete_exam($id);
		redirect('admin/exams');		
		
	}
	
	public function add(){
		
		$data['page'] = 'exams';
		$data['page_title'] = 'Add Exam';
	
		$all_courses = $this->Courses_m->get_courses();
		
		/*echo "<pre>";
		print_r($all_courses);
		echo "</pre>"; */
		
		$course_select = array();
		
		foreach ($all_courses as $c){
			$course_select [$c->id] = $c->name;
		}
		
		
		$data['course_select'] = $course_select;		
		
		/*echo "<pre>";
		print_r($data['course_select']);
		echo "</pre>";*/
		
		
		if ($this->form_validation->run())
		{
			//$this->load->view('myform');
			
			$examedata = array (
  				'name' => $this->input->post('name'),
  				'description' => $this->input->post('description'),
				'full_marks' => $this->input->post('full_marks'),
  				'pass_marks' => $this->input->post('pass_marks'),
				'start_time' => $this->input->post('start_time'),
  				'end_time' => $this->input->post('end_time'),
				'date' => $this->input->post('date'),
  				'course_id' => $this->input->post('course_id'),
			);
			
			if ($this->Exams_m->insert_exam($examedata)){
				redirect ('admin/exams');
			}
			
		}			
		
		$this->load->view('admin/add_exam',$data);
		
	}
	
	public function edit($id){
		$data['page'] = 'exams';
		$data['page_title'] = 'edit Exam';
		$data['exam']= $this->Exams_m->get_exambyid($id);
		
		$this->load->view('admin/edit_exam',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
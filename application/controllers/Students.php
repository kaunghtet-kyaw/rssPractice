<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('student_model');
        $this->load->helper(array('form','url'));

        $this->load->library('form_validation');
    }
 
	public function index()
	{
		$studentData['result'] = $this->student_model->getAllData();

        // $student_id = getStudentId($students);


        // foreach ($studentData['result'] as $sData)
        // {
        //     echo $sData->id;

        // }

        $this->load->view('layout/header');
        $this->load->view('students/view_students', $studentData);
        $this->load->view('layout/footer');
	}


    public function create() {

        if(!$this->input->post('register')){

            $this->load->view('students/add_students'); 
        }

        else{
            $studentData = $this->input->post('student');

            if($this->isValidate($studentData)) {

                $this->student_model->createData($studentData);
                redirect("students");
            }

        }
    }

    public function update($id) {

        if(!$this->input->post('EditStudent')){
            
            $studentData['row'] = $this->student_model->getData($id);
            $this->load->view('students/edit_students', $studentData);
        }
        else{
            $studentData = $this->input->post('student');


            if($this->isValidate($studentData)) {

                $this->student_model->updateData($id, $studentData);
                redirect("students");
            }

        }
    }

    public function delete($id) {

        $this->student_model->deleteData($id);
        redirect("students");

    }

    private function isValidate($studentData) {

        $this->form_validation->set_rules('student[name]', 'Name', 'required');
        $this->form_validation->set_rules('student[age]', 'Age', 'required|integer');
        $this->form_validation->set_rules('student[address]','Address', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('students/add_students'); 
        }else{
            return $studentData;
        }

    }
}

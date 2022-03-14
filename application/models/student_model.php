<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model {

	public function __construct(){
        $this->load->database();
    }

    function getAllData(){
        $this->db->select('*');
        $this->db->from('students');
        $query = $this->db->get();
        return $query->result();
    }

    function getData($id){
        // $query = $this->db->query('SELECT * FROM students WHERE `id` =' .$id);
        // return $query->row();

        $this->db->select('*');
        $this->db->from('students');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    function createData($studentData){
        $this->db->insert('students', $studentData);
    }

    function updateData($id, $studentData){
        $this->db->where('id', $id);
        $this->db->update('students', $studentData);
    }
    
    function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('students');
    }

}

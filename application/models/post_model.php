<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class post_model extends CI_Model {

	public function __construct(){
        $this->load->database();
    }

    public function getPosts($limit = NULL)  
    {  
        return $this->db->get('posts', $limit);
    }

    public function createPosts($data){
        $this->db->insert('posts', $data);
        return true;
    }
 
}

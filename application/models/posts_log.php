<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class posts_log extends CI_Model {

	public function getLog() {

        $this->db->select('*');
        $this->db->from('posts_log');
        $this->db->order_by('posts_log_id', 'desc');
        $this->db->limit(1);
        
        $query = $this->db->get();
        return $query->result_array();

    }

    public function createDateLog()  
    {  
        date_default_timezone_set('Asia/Yangon');
        $data = ['latest_modified_date' => date('Y/m/d H:i:s', time())];

        $this->db->insert('posts_log',$data);

    }
 
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feed extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

        $this->load->helper('xml');
        $this->load->helper('text');
        $this->load->model('post_model','posts');
        $this->load->model('posts_log','posts_log');


	}
	
	public function index()  
    {  
        $data['encoding']           = 'utf-8'; 
        $data['feed_name']          = '';   
        $data['feed_url']           = 'http://localhost/ci-project/feed'; 
        $data['page_description']   = ''; 
        $data['page_language']      = 'en-en';  
        $data['creator_email']      = 'khtetkyaw.andfun@gmail.com';  
        $data['posts'] = $this->posts->getPosts();

        $time = $this->posts_log->getLog();

        $latest_modified_date = $time[0]['latest_modified_date'];
        $this->output->set_header('Last-Modified: '.$latest_modified_date);
        if(isset($this->input->request_headers()['If-Modified-Since'])) {
            if($latest_modified_date == $this->input->request_headers()['If-Modified-Since']) {
                http_response_code(304);
                $this->output->set_header('X-MODIFIED_SINCE: MATCH');
                die();
            }
        }
        
        http_response_code(200);
        $this->output->set_header('X-CONTENT-RETURN: YES');
        $this->output->set_header('Content-Type: text/xml'); 
        $this->load->view('rss', $data);
    }

    public function create() {

        $this->load->view('posts/add_posts');

        if($this->input->post('create')) {
            $data['post_title'] = $this->input->post('post_title');
            $data['post_content'] = $this->input->post('post_content');
            $response = $this->posts->createPosts($data);

            if($response == true) {
                $this->posts_log->createDateLog();
                echo "Sucessfully posted.";
            }else{
                echo "Sorry, error is occurring.";
            }
            redirect('feed');

        }
    }    

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feed extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

        $this->load->helper('xml');
        $this->load->helper('text');
        $this->load->model('post_model');
        $this->load->model('posts_log');

        $this->load->helper('form','url');
        $this->load->library('form_validation');

	}
	
	public function index()  
    {  
        $post_data['encoding']           = 'utf-8'; 
        $post_data['feed_name']          = '';   
        $post_data['feed_url']           = 'http://localhost/ci-project/feed'; 
        $post_data['page_description']   = ''; 
        $post_data['page_language']      = 'en-en';  
        $post_data['creator_email']      = 'khtetkyaw.andfun@gmail.com';  
        $post_data['posts'] = $this->post_model->getPosts();


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
        $this->load->view('rss', $post_data);
    }

    public function create() {

        if(!$this->input->post('create')){

            $this->load->view('posts/add_posts'); 
        }

        else{

            $data['post_title'] = $this->input->post('post_title');
            $data['post_content'] = $this->input->post('post_content');

            $this->form_validation->set_rules('post_title', 'Post_title', 'required');
            $this->form_validation->set_rules('post_content', 'Post_content', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('posts/add_posts');
                
            }
            else{

                $response = $this->post_model->createPosts($data);
    
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

}

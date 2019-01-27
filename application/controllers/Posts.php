<?php
class Posts extends CI_Controller{
    public function index(){
       
        $data['title']= 'Student Details';
        $data['users']= $this->post_model->get_posts();
        
        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');
        
    }
    
    public function view($id = NULL){
        $data['user'] = $this->post_model->get_posts($id);
        if(empty($data['user'])){
            show_404();
        }
        
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }
}
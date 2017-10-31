<?php 
if( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Opencode extends CI_Controller {
		public function index(){

			$this->home();
		}

		public function home(){

            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('footer');
	}

        public function about(){
     
            $this->load->view('header');
            $this->load->view('about');
            $this->load->view('footer');
         }
        public function projects(){

            $this->load->view('header');
            $this->load->view('projects');
            $this->load->view('footer');
           }

        public function start_project(){
        $data = array();
        $userData = array();
        if($this->input->post('ideaSubmit')){
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
         //   $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'messageTitle' => strip_tags($this->input->post('title')),
                'message' => strip_tags($this->input->post('message')),
                'category' => $this->input->post('category')
               );

            if($this->form_validation->run() == true){
                $insert = $this->Mopencode->insertIdea($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your idea submittet successfully.');
                    redirect('Opencode/user_message');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['Mopencode'] = $userData;
        //load the view
    //    $this->load->view('users/opencode_register_page', $data);
    
            $this->load->view('header');
            $this->load->view('start_project',$data);
            $this->load->view('footer');
           }
        public function team(){

            $this->load->view('header');
            $this->load->view('team');
            $this->load->view('footer');
           }
        public function userMessageListing(){

            $this->load->model('Mopencode');
        
            $data["results"] = $this->Mopencode->getIdea($this->session->userdata('userId'));
            
            $this->load->view('header');
            $this->load->view('user_message',$data);
            $this->load->view('footer');
           
    }


    public function comments(){
        $userComment = array();
            $this->load->model("Mopencode");
            $data["results"] = $this->Mopencode->getComment("comments");
        //if($this->input->post('commentSubmit')){
        //$userComment = array(
          //      'comments' => strip_tags($this->input->post('comments')),
            //    );
        $comments = $this->input->post('commentSubmit');
         $commentSubmit = $this->Mopencode->addComment($comments);
        
    
 
        $this->load->helper('directory'); //load directory helper
        $dir = "uploads/images/"; // Your Path to folder
        $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */ 
    }

	 function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mopencode');
    }

	 public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['Mopencode'] = $this->Mopencode->getRows(array('user_id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/opennews_account_page', $data);
        }else{
            redirect('Opencode/login');
        }
    }
     /*
     * User login
     */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                $checkLogin = $this->Mopencode->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['user_id']);
                    redirect('Opencode/home');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('users/opencode_login_page', $data);
    }
    
    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
               );

            if($this->form_validation->run() == true){
                $insert = $this->Mopencode->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('Opencode/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['Mopencode'] = $userData;
        //load the view
        $this->load->view('users/opencode_register_page', $data);
    }
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('Opencode/home');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->Mopencode->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
?>
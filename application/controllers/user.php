<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('post_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'OpenCode : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

			$returns = $this->paginationCompress ( "userListing/", $count, 5 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'OpenNews : User Listing';
            
            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

 function postListing()
    {
        if($this->isAdmin() == TRUE||$this->isTeamMember()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('post_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->post_model->postListingCount($searchText);

            $returns = $this->paginationCompress ( "postListing/", $count, 5 );
            
            $data['postRecords'] = $this->post_model->postListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'OpenNews : Post Listing';
            
            $this->loadViews("browsePost", $this->global, $data, NULL);
        }
    }


 function articleListing()
    {
        if($this->isAdmin() == TRUE||$this->isTeamMember()== TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('post_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->post_model->articleListingCount($searchText);

            $returns = $this->paginationCompress ( "articleListing/", $count, 5 );
            
            $data['articleRecords'] = $this->post_model->articleListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'OpenNews : Article Listing';
           // $this->load->View("header");
            $this->load->View("article_page1", $this->global, $data, NULL);
           // $this->load->view("footer");
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'OpenNews : Add New User';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    function addNewP()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('post_model');
            $data['categories'] = $this->post_model->getPostCategories();
            $data['authors'] = $this->post_model->getPostAuthors();
            
            $this->global['pageTitle'] = 'OpenNews : Add New Post';

            $this->loadViews("addNewPost", $this->global, $data, NULL);
        }
    }
  
  
    function addNewPost()
    {
        if($this->isAdmin() == TUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            
            $this->form_validation->set_rules('ptitle','Post Title','trim|required|max_length[100]|xss_clean');
            $this->form_validation->set_rules('author','Author','trim|required|numeric');
            $this->form_validation->set_rules('category','Category','trim|required|numeric');
            $this->form_validation->set_rules('iurl','Image URL','trim|required|valid_url|xss_clean');
            $this->form_validation->set_rules('pcontent','Post Content','trim|required|xss_clean');
            $this->form_validation->set_rules('psummery','Post Summery','required|max_length[200]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $ptitle = $this->input->post('ptitle');
                $authorId = $this->input->post('author');
                $categoryId = $this->input->post('category');
                $iurl = $this->input->post('iurl');
                $pcontent = $this->input->post('pcontent');
                $psummery = $this->input->post('psummery');
                                $postInfo = array('iurl'=>$iurl, 'categoryId'=>$categoryId, 'authorId'=>$authorId, 'ptitle'=> $ptitle,
                                    'pcontent'=>$pcontent, 'psummery'=>$psummery, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('post_model');
                $result = $this->post_model->addNewPost($postInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Post created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post creation failed');
                }
                
                redirect('addNewP');
            }
        }
    }
     function img_upload()
    {   
        $this->load->helper(array('form', 'url'));
            $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "700",
            'max_width' => "1200"
);
          $this->load->library('upload',$config);
          

    }
    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId =$this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = 'OpenNews : Edit User';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->eitUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }

        function editOldP($postId = NULL)
    {
        if($this->isAdmin() == TRUE )
        {
            $this->loadThis();
        }
        else
        {
            if($postId == null)
            {
                redirect('postListing');
            }
            
            $data['categories'] = $this->post_model->getPostCategories();
            $data['authors'] = $this->post_model->getPostAuthors();
            $data['postInfo'] = $this->post_model->getPostInfo($postId);
            
            $this->global['pageTitle'] = 'Open News : Edit Post';
            
            $this->loadViews("editOldPost", $this->global, $data, NULL);
        }
    }
    
      
    function editPost()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $postId = $this->input->post('postId');
            
            $this->form_validation->set_rules('ptitle','Post Title','trim|required|max_length[100]|xss_clean');
            $this->form_validation->set_rules('author','Author','trim|required|numeric');
            $this->form_validation->set_rules('category','Category','trim|required|numeric');
            $this->form_validation->set_rules('iurl','Image URL','trim|required|valid_url|xss_clean');
            $this->form_validation->set_rules('pcontent','Post Content','trim|required|xss_clean');
            $this->form_validation->set_rules('psummery','Post Summery','required|max_length[200]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOldP($postId);
            }
            else
            {
                $ptitle = $this->input->post('ptitle');
                $authorId = $this->input->post('author');
                $categoryId = $this->input->post('category');
                $iurl = $this->input->post('iurl');
                $pcontent = $this->input->post('pcontent');
                $psummery = $this->input->post('psummery');
                
                $postInfo = array();
                
                    $postInfo = array('iurl'=>$iurl, 'categoryId'=>$categoryId, 'authorId'=>$authorId,
                        'ptitle'=>$ptitle, 'pcontent'=>$pcontent, 'psummery'=>$psummery, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                
                
                $result = $this->post_model->editPost($postInfo, $postId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Post updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Post updation failed');
                }
                
                redirect('postListing');
            }
        }
    }

      function deletePost()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $postId = $this->input->post('postId');
            $postInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->post_model->deletePost($postId, $postInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = 'OpenNews : Change Password';
        
        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
           
            if(empty($resultPas))
            {
                $this->session->set_flashdata('nomatch', 'Your old password not correct');
                redirect('loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
                else { $this->session->set_flashdata('error', 'Password updation failed'); }
               
                redirect('loadChangePass');
            }
        }
    }

    function pageNotFound()
   {
        $this->global['pageTitle'] = 'OpenNews : 404 - Page Not Found';
        
       $this->loadViews("404", $this->global, NULL, NULL);
    }
}

?>
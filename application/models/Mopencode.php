<?php
	
	class Mopencode extends CI_Model{
        
	    function getComment($comments){
            //$this->load->helper('url');
            $query = $this->db->get_where("comments",array("comments"=>$comments));
            return $query->result();
        }
        function addComment($comments){
        
        $this->db->from('comments'); //table
        $this->db->set('votes', 'comments', FALSE);
        $this->db->update('comments');
        }
//		function addUser($data)
//	{
//		$this->db->insert('user',$data);
//	}
	 function __construct() {
        $this->userTbl = 'users';
        $this->ideaTbl = 'ideas';
    }

	function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("user_id",$params)){
            $this->db->where('user_id',$params['user_id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    
    /*
     * Insert user information
     */
   function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
       function insertIdea($data) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("user_id", $data)){
            $data['user_id'] = $this->session->userdata('userId');
        }
        if(!array_key_exists("status", $data)){
            $data['status'] = 'Pending';
        }

        //insert idea data to ideas table
        $insert = $this->db->insert('ideas', $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
     /*function getIdea($userId)
        {
            $this->db->select('*');
            $this->db->from('ideas');

        $this->db->where('user_id',$userId);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
  
    }*/
    function getIdea($userId)
    {
        $this->db->select('*');
        $this->db->from('ideas');
        $this->db->where('user_id',$userId);
        $query = $this->db->get();
        $result = $query->result();        
        
       return $result;
  /*
        $idea = array();
        $row = $query->row();

        $idea['message_id'] = $row->message_id;
        $idea['messageTitle'] = $row->messageTitle;
        $idea['message'] = $row->message;
        $idea['category_id'] = $row->category_id;
        $idea['status_id'] = $row->status_id;
        
       // $idea['category'] = $row->getCategories($idea['category_id']);
       // $idea['status'] = $row->getStatus($idea['status_id']);
    
        //return $query->row_array();
    */  //  return $idea;
    }

   /*  function getCategories($category_id)
    {
        $this->db->select('category');
        $this->db->from('tbl_categories');
        $this->db->where('$category_id',$category_id);
        $query = $this->db->get();
        return $query;
    }
     function getStatus($status_id)
    {
        $this->db->select('status');
        $this->db->from('tbl_status');
        $this->db->where('$status_id',$status_id);
        $query = $this->db->get();
        return $query;
    } */
}
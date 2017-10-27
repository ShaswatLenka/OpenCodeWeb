<?php
	
	class Mopencode extends CI_Model{
        
	/*	function getData($page){
			//$this->load->helper('url');
			$query = $this->db->get_where("homepage",array("page"=>$page));
			return $query->result();
		} 

         function getArticle($postId)
        {
            $this->db->select('ptitle,categoryId,authorId,iurl,pcontent,psummery');
            $this->db->from('tbl_posts');
            //$this->db->join('tbl_categories as Category', 'categoryId = categoryId','left');
         
        $this->db->where('isDeleted', 0);
        //$this->db->where('categoryId ');
        //$this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
  
    }
      */  function getUser($name){
            //$this->load->helper('url');
            $query = $this->db->get_where("users",array("name"=>$name));
            return $query->result();
        }
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
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
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
        //if(!array_key_exists("modified", $data)){
          //  $data['modified'] = date("Y-m-d H:i:s");
        //}
        
        //insert user data to users table
        $insert = $this->db->insert($this->userTbl, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}


<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Post_model extends CI_Model
{

    function postListingCount($searchText = '')
    {
        $this->db->select('tbl_posts.postId,tbl_posts.ptitle,tbl_posts.categoryId,tbl_posts.authorId');
        $this->db->from('tbl_posts');
        //$this->db->join('tbl_categories as Category', 'categoryId = categoryId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(authorId  LIKE '%".$searchText."%'
                            OR  ptitle  LIKE '%".$searchText."%'
                            OR  categoryId  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
       // $this->db->where('categoryId !=', 1);
        $query = $this->db->get();
        
        return count($query->result());
    }
    
    
    function postListing($searchText = '', $page, $segment)
    {
        $this->db->select('tbl_posts.postId, tbl_posts.ptitle, tbl_posts.categoryId,tbl_posts.authorId');
        $this->db->from('tbl_posts');
        //$this->db->join('tbl_categories as Category', 'categoryId = categoryId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(authorId  LIKE '%".$searchText."%'
                            OR  ptitle  LIKE '%".$searchText."%'
                            OR  categoryId  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
        //$this->db->where('categoryId ');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

 /*function articleListingCount($searchText = '')
    {
        $this->db->select('ptitle,categoryId,authorId,pcontent,psummery');
        $this->db->from('tbl_posts');
        //$this->db->join('tbl_categories as Category', 'categoryId = categoryId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(authorId  LIKE '%".$searchText."%'
                            OR  ptitle  LIKE '%".$searchText."%'
                            OR  category  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
       // $this->db->where('categoryId !=', 1);
        $query = $this->db->get();
        
        return count($query->result());
    }
   

    function articleListing($searchText = '', $page, $segment)
    {
        $this->db->select('ptitle,categoryId,authorId,pcontent,psummery');
        $this->db->from('tbl_posts');
        //$this->db->join('tbl_categories as Category', 'categoryId = categoryId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(authorId  LIKE '%".$searchText."%'
                            OR  ptitle  LIKE '%".$searchText."%'
                            OR  category  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
        //$this->db->where('categoryId ');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

*/
    function getPostCategories()
    {
        $this->db->select('categoryId, category');
        $this->db->from('tbl_categories');
        //$this->db->where('categoryId');
        $query = $this->db->get();
        
        return $query->result();
    }

    function getPostAuthors()
    {
        $this->db->select('authorId, author');
        $this->db->from('tbl_authors');
        //$this->db->where('authorId = ',);
        $query = $this->db->get();
        
        return $query->result();
    }

    
    function addNewPost($postInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_posts', $postInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    
    
    function getPostInfo($postId)
    {
        $this->db->select('postId, ptitle,authorId, categoryId,iurl, pcontent, psummery');
        $this->db->from('tbl_posts');
        $this->db->where('isDeleted', 0);
        //$this->db->where('authorId', $authorId);
        $this->db->where('postId', $postId);
        //$this->db->where('categoryId', $categoryId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    function editPost($postInfo, $postId)
    {
        $this->db->where('postId', $postId);
        $this->db->update('tbl_posts', $postInfo);
        
        return TRUE;
    }
    

function deletePost($postId, $postInfo)
    {
        $this->db->where('postId', $postId);
        $this->db->update('tbl_posts', $postInfo);
        
        return $this->db->affected_rows();
    }

}
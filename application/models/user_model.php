<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    function memberListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('tbl_members');
//        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(   role LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
        $this->db->where('role !=','System Admin');
        $query = $this->db->get();
        
        return count($query->result());
    }
    
    function memberListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('tbl_members');
        if(!empty($searchText)) {
            $likeCriteria = "( role LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('isDeleted', 0);
        $this->db->where('role !=','System Admin');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    function getMemberRoles()
    {
        $this->db->select('role');
        $this->db->from('tbl_members');
        $this->db->where('role !=','System Admin');
        $query = $this->db->get();
        
        return $query->result();
    }

    function checkEmailExists($email, $memberId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_members");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($memberId != 0){
            $this->db->where("memberId !=", $memberId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    function addNewMember($memberInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_members', $memberInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    function getMemberInfo($memberId)
    {
        $this->db->select('*');
        $this->db->from('tbl_members');
        $this->db->where('isDeleted', 0);
		$this->db->where('role !=','System Admin');
        $this->db->where('memberId', $memberId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    function editMember($memberInfo, $memberId)
    {
        $this->db->where('memberId', $memberId);
        $this->db->update('tbl_members', $memberInfo);
        
        return TRUE;
    }
    
    function deleteMember($memberId, $memberInfo)
    {
        $this->db->where('memberId', $memberId);
        $this->db->update('tbl_members', $memberInfo);
        
        return $this->db->affected_rows();
    }


    function matchOldPassword($memberId, $oldPassword)
    {
        $this->db->select('memberId, password');
        $this->db->where('memberId', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_members');
        
        $member = $query->result();

        if(!empty($member)){
            if(verifyHashedPassword($oldPassword, $member[0]->password)){
                return $member;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
  /*  
    function changePassword($memberId, $memberInfo)
    {
        $this->db->where('memberId', $memberId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_members', $memberInfo);
        
        return $this->db->affected_rows();
    }*/
}

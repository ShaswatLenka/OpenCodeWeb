<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    function loginMe($email, $password)
    {
        $this->db->select('*');
        $this->db->from('tbl_members');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        $member = $query->result();
        
        if(!empty($member)){
            if(verifyHashedPassword($password, $member[0]->password)){
                return $member;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    function checkEmailExist($email)
    {
        $this->db->select('memberId');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_members');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    /*
    function resetPasswordUser($data)
    {
        $result = $this->db->insert('tbl_reset_password', $data);

        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }*/

    function getCustomerInfoByEmail($email)
    {
        $this->db->select('userId, email, name');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->result();
    }

    function checkActivationDetails($email, $activation_id)
    {
        $this->db->select('id');
        $this->db->from('tbl_reset_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
        $query = $this->db->get();
        return $query->num_rows;
    }

    // This function used to create new password by reset link
    function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', array('password'=>getHashedPassword($password)));
        $this->db->delete('tbl_reset_password', array('email'=>$email));
    }
}

?>
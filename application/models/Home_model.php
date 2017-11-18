<?php

class home_model extends CI_Model {
        
    public function getHollywood($id)
    {
        $this->db->select('*');
        $this->db->from('hollywood');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        $result = $query->result();
        
       return $result;
    }
    public function getBollywood($id)
    {
        $this->db->select('*');
        $this->db->from('bollywood');
        $this->db->where('ID',$id);
        $query = $this->db->get();
        $result = $query->result();
        
       return $result;
    }
}

?>